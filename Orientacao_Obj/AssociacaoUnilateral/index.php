<?php
require_once 'Fornecedor.class.php';
require_once 'Produto.class.php';

$fornecedor1 = new Fornecedor('Razao1', 'Nome1', '1', '1');
$produto1 = new Produto('Nome1', 'Desc1', 1.99, 10, $fornecedor1);

var_dump($produto1);
var_dump($produto1->getOutForn());
