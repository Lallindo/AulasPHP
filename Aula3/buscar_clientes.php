<?php
require_once "cliente.Class.php";
$cliente = new Cliente();
$conexao_aberta = $cliente->conexao();
$retorno = $cliente->buscar_clientes($conexao_aberta);
#var_dump($retorno);
if($_GET) {
    echo "<h3>{$_GET["mensagem"]}</h3><br>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tableStyle.css">
    <title>Document</title>
</head>

<body>
    <h1>Clientes</h1>
    <a href="formCliente.html">Novo Cliente</a>
    <table>
        <thead>
            <tr>
                <th class="coluna-id">ID</th>
                <th class="coluna-nome">Nome</th>
                <th class="coluna-cpf">CPF</th>
                <th class="coluna-email">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($retorno as $dado) {
                //var_dump($dado);
                echo "<tr>
                            <td class='coluna-id'>{$dado->cliente_id}</td>  
                            <td class='coluna-nome'>{$dado->cliente_nome}</td>  
                            <td class='coluna-cpf'>{$dado->cliente_cpf}</td>  
                            <td class='coluna-email'>{$dado->cliente_email}</td>  
                          </tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>