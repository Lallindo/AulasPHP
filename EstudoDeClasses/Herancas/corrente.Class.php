<?php
class Conta_Corrente extends Conta
{

    public function __construct(
        $agencia,
        $conta,
        $titular,
        $saldo,
        private float $limite
    ) {
        parent::__construct($agencia, $conta, $titular, $saldo);
    }

    # Get
    public function getLimite(): string
    {
        return $this->limite;
    }

    # Set
    public function setLimite(float $limite)
    {
        $this->limite = $limite;
    }

    # Métodos
    public function retirar($valor)
    {
        if ($this->limite < $valor) {
            echo "Você não tem limite";
        } else if ($this->saldo < $valor) {
            echo "Saldo insuficiente";
        } else {
            parent::retirar($valor);
            echo "Novo saldo: {$this->getSaldo()}";
        }
    }
}