<?php

namespace Classes;

class Programador extends Funcionario
{
    private $linguagem;

    public function __construct($nome, $salario, $linguagem)
    {
        parent::__construct($nome, $salario);
        $this->linguagem = $linguagem;
    }

    public function relatorioFunc()
    {
        parent::relatorioFunc();
        echo "<p><b>Linguagem</b>: {$this->linguagem}</p>";
    }

    /**
     * Get the value of linguagem
     */
    public function getLinguagem()
    {
        return $this->linguagem;
    }

    /**
     * Set the value of linguagem
     *
     * @return  self
     */
    public function setLinguagem($linguagem)
    {
        $this->linguagem = $linguagem;

        return $this;
    }
}
