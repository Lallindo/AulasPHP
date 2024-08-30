<?php
class Cliente
{

    public function __construct(
        private int $id = 0,
        private string $nome = '',
        private string $cpf = '',
        private string $email = ''
    ) {
    }

    public function getId_cliente()
    {
        return $this->id;
    }

    public function setId_cliente($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}

?>