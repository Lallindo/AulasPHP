<?php
if ($_POST) {
    #include "cliente.Class.php";  Produz um alerta (E_WARNING) e o script irá continuar
#include_once "cliente.Class.php"; '' porém é 'rodado' apenas uma vez 
#require "cliente.Class.php"; Produzirá um FATAL ERROR (E_COMPILE_ERROR) e para o script
    require_once "cliente.Class.php"; // '' porém é 'rodado' apenas uma vez 

    $cliente1 = new Cliente();

    echo "<pre>";
    var_dump($cliente1);
    echo "</pre>";

    $cliente1->nome = $_POST['nome'];
    $cliente1->cpf = $_POST['cpf'];
    $cliente1->mostrar_dados();

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