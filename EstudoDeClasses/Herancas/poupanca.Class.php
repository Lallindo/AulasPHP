<?php
class Conta_Poupanca extends Conta
{

    public function __construct(
        $agencia,
        $conta,
        $titular,
        $saldo,
        private string $aniversario = ''
    ) {
        parent::__construct($agencia, $conta, $titular, $saldo);
    }

    # Get
    public function getAniversario(): string
    {
        return $this->aniversario;
    }

    # Set
    public function setAniversario(string $aniversario)
    {
        $this->aniversario = $aniversario;
    }

    # Métodos

    public function retirar($valor)
    {
        $data_atual = explode('/', date('d/m/y'));
        if ($this->aniversario >= $data_atual[0]) {
            if ($this->saldo < $valor) {
                echo "Saldo insuficiente";
            } else {
                parent::retirar($valor);
                echo "Novo saldo: {$this->getSaldo()}";
            }
        } else {
            echo "Sem idade?";
        }
    }
}