<?php
    require_once "cliente.Class.php";
    $cliente = new Cliente();
    $conexao_aberta = $cliente->conexao();
    $retorno = $cliente->buscar_clientes($conexao_aberta);
    var_dump($retorno);
?>