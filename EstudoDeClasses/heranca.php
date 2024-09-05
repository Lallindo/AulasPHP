<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
</head>
<body>
    
</body>
</html>

<?php
    require_once "Herancas/conta.Class.php";
    require_once "Herancas/corrente.Class.php";
    require_once "Herancas/poupanca.Class.php";
    
    $corrente = new Conta_Corrente('123-2', '12345-6', 'Bruno Lallo', 10000, 5000);
    echo "Agência: {$corrente->getAgencia()} <br>";
    echo "Conta: {$corrente->getConta()} <br>";
    echo "Titular: {$corrente->getTitular()} <br>";
    echo "Saldo: {$corrente->getSaldo()} <br>";
    echo "Limite: {$corrente->getLimite()} <br>";
    $corrente->retirar(1000);

    echo "<br>";
    echo "<br>";

    $poupanca = new Conta_Poupanca('123-2', '12345-6', 'Bruno Lallo', 5000, '16/10/2003');
    echo "Agência: {$poupanca->getAgencia()} <br>";
    echo "Conta: {$poupanca->getConta()} <br>";
    echo "Titular: {$poupanca->getTitular()} <br>";
    echo "Saldo: {$poupanca->getSaldo()} <br>";
    echo "Aniversário: {$poupanca->getAniversario()} <br>";
    $poupanca->retirar(1000);
?>