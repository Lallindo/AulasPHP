<?php
class Conta
{
    public function __construct(
        protected string $agencia = "",
        protected string $conta = "",
        protected string $titular = "",
        protected float $saldo = 0
    ) {
    }

    # Funções Get
    public function getAgencia(): string
    {
        return $this->agencia;
    }
    # -- #
    public function getConta(): string
    {
        return $this->conta;
    }
    # -- #
    public function getTitular(): string
    {
        return $this->titular;
    }
    # -- #
    public function getSaldo(): float
    {
        return $this->saldo;
    }
    # -- # -- # -- # -- #
    # Funções Set
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }
    # -- #
    public function setConta($conta)
    {
        $this->conta = $conta;
    }
    # -- #
    public function setTitular($titular)
    {
        $this->titular = $titular;
    }
    # -- #
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    # -- # -- # -- # -- #
    # Métodos
    public function retirar($valor)
    {
        if ($valor > 0) {
            $this->saldo -= $valor;
        }
        return $this->saldo;
    } # Adiciona 1 ao valor do saldo

    public function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
        return $this->saldo;
    } # Subtrai 1 ao valor do saldo
}