<?php
    require_once "cliente.Class.php";

    $cliente = new Cliente(0, "Bruno Lallo", "512.147.408-39", "brunolallo8@gmail.com");

    echo $cliente->getNome();
    echo $cliente->setNome("Novo nome");
    echo "<br>";
    echo $cliente->getNome();
?>