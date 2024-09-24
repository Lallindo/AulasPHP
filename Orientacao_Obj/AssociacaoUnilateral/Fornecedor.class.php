<?php 
    class Fornecedor {
        public function __construct(
            private string $razao_forn = '',
            private string $nome_fant_forn = '',
            private string $cnpj_forn = '',
            private string $tel_forn = ''
        ){}

        public function getRazaoForn() {
            return $this -> razao_forn;
        }

        public function getNomeFantForn() {
            return $this -> nome_fant_forn;
        }

        public function getCNPJForn() {
            return $this -> cnpj_forn;
        }

        public function getTelForn() {
            return $this -> tel_forn;
        }

        /*public function getOutProduto() {
            return $this -> out_produto;
        }

        public function setOutProduto(Produto $produto) {
            $this->out_produto[] = $produto;
        }*/
    }