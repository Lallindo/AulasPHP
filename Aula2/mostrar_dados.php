<?php
if ($_POST) {
    #include "cliente.Class.php";  Produz um alerta (E_WARNING) e o script irá continuar
#include_once "cliente.Class.php"; '' porém é 'rodado' apenas uma vez 
#require "cliente.Class.php"; Produzirá um FATAL ERROR (E_COMPILE_ERROR) e para o script
    require_once "cliente.Class.php"; // '' porém é 'rodado' apenas uma vez 

    $cliente1 = new Cliente(0, $_POST['nome'], $_POST['cpf'], $_POST['email']);
    // $cliente1 = new Cliente (nome:$_POST['nome'], cpf:$_POST['cpf']) -> Dá nome ás variáveis para ignorar a ordem;

    // Caso apenas uma varíavel seja necessária, faça: nome_Variavel:$_POST['id_dela']; dentro dos argumentos;

    /*echo "<pre>";
    var_dump($cliente1);
    echo "</pre>";*/

    $cliente1->mostrar_dados();

    $conexao_aberta = $cliente1->conexao();
    $mensagem = $cliente1->inserir_cliente($conexao_aberta);
    echo $mensagem;

    /*
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    echo "Nome: $nome";
    echo "<br>";
    echo "CPF: $cpf";
    */

} else {
    header("location:index.html");
    die();
}

?>