<?php

namespace Classes;

use Exception;

abstract class Conta
{
    protected $saldo;

    public function __construct($saldoInicial = 0)
    {
        $this->saldo = $saldoInicial;
    }

    public function deposita($valor)
    {
        $this->saldo += $valor;
    }

    public function saca($valor)
    {
        if ($this->saldo < $valor) {
            throw new Exception('Saldo inferior ao valor desejado');
        }

        $this->saldo -= $valor;
    }

    public function imprimeExtrato()
    {
        $saldoFormatado = number_format($this->saldo, 2, ',', '.');
        echo "<h1>Extrato {$this->getTipo()}</h1>";
        echo "<p><b>Saldo atual</b>: R\$ {$saldoFormatado}</p>";
    }

    abstract public function getTipo();

    /**
     * Get the value of saldo
     */
    public function getSaldo()
    {
        return $this->saldo;
    }
}
