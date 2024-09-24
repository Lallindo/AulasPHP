<?php 
    class Produto {
        public function __construct(
            private string $nome_produto = '',
            private string $desc_produto = '',
            private float $preco_produto = 0.00,
            private int $estoque_produto = 0,
            private array $out_forn = []
        ){}

        public function getNomeProd() {
            return $this->nome_produto;
        }

        public function getDescProd() {
            return $this->desc_produto;
        }

        public function getPrecoProd() {
            return $this->preco_produto;
        }

        public function getEstoqueProd() {
            return $this->estoque_produto;
        }

        public function getOutForn() {
            return $this->out_forn;
        }

        public function setOutForn(Fornecedor $fornecedor) {
            $this->out_forn[] = $fornecedor;
        }
    }