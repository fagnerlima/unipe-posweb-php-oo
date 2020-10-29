<?php

namespace Classes;

class ContaCorrente extends Conta
{
    public function saca($valor)
    {
        parent::saca($valor);
        $this->saldo -= 0.1;
    }

    public function getTipo()
    {
        return 'Conta Corrente';
    }
}
