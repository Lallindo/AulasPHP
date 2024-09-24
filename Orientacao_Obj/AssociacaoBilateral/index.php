<?php
require_once 'Fornecedor.class.php';
require_once 'Produto.class.php';

// -- Produtos -- //

$produto1 = new Produto('Caderno', 'Desc', 9.99, estoque_produto: 10);
$produto2 = new Produto('Lápis', 'Desc', 15.99, estoque_produto: 7);
$produto3 = new Produto('Borracha', 'Desc', 10.99, estoque_produto: 5);
$produto4 = new Produto('Caneta', 'Desc', 8.99, estoque_produto: 11);

// -- Fornecedores -- //

$fornecedor1 = new Fornecedor('Razão', 'Nome', '1', '1', [$produto1, $produto2, $produto3]);
$fornecedor2 = new Fornecedor('Razão2', 'Nome2', '2', '2', [$produto2, $produto3, $produto4]);

// Alterar produtos //  

$produto1->setOutForn($fornecedor1);

$produto2->setOutForn($fornecedor1);
$produto2->setOutForn($fornecedor2);

$produto3->setOutForn($fornecedor1);
$produto3->setOutForn($fornecedor2);

$produto4->setOutForn($fornecedor2);

// Echo das informações //

echo "<h3>Fornecedores</h3><br>";
echo "Razão-Social: {$fornecedor1->getRazaoForn()}<br>";
echo "Nome Fantasia: {$fornecedor1->getNomeFantForn()}<br>";
echo "CNPJ: {$fornecedor1->getCNPJForn()}<br>";
echo "Telefone: {$fornecedor1->getTelForn()}<br><br>";

echo "<h3>Produtos</h3>";
foreach ($fornecedor1->getOutProduto() as $produto) {
    echo "Nome: {$produto->getNomeProd()}<br>";
    echo "Descrição: {$produto->getDescProd()} <br>";
    echo "Preço: " . number_format($produto->getPrecoProd(), 2, ',', '.') . "<br>";
    echo "Estoque: {$produto->getEstoqueProd()} <br>";
    echo "<br><spam>----------------------------------------</spam><br>";
}

foreach ($produto2->getOutForn() as $fornecedor) {
    echo "Razão-Social: {$fornecedor->getRazaoForn()}<br>";
    echo "Nome Fantasia: {$fornecedor->getNomeFantForn()}<br>";
    echo "CNPJ: {$fornecedor->getCNPJForn()}<br>";
    echo "Telefone: {$fornecedor->getTelForn()}<br><br>";
    echo "<br><spam>----------------------------------------</spam><br>";
}