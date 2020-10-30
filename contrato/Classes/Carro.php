<?php

namespace Classes;

use Interfaces\ICaracteristicas;

class Carro extends Veiculo implements ICaracteristicas
{
    public function exibeNome()
    {
        echo "<p><b>Nome do Carro</b>: {$this->getNome()}</p>";
    }

    public function exibeMarca()
    {
        echo "<p><b>Marca</b>: {$this->getMarca()}</p>";
    }

    public function exibeModelo()
    {
        echo "<p><b>Modelo</b>: {$this->getModelo()}</p>";
    }
}
