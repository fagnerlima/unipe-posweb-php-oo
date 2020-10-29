<?php

namespace Classes;

class Gerente extends Funcionario
{
    private $projeto;

    public function __construct($nome, $salario, $projeto)
    {
        parent::__construct($nome, $salario);
        $this->projeto = $projeto;
    }

    public function relatorioFunc()
    {
        parent::relatorioFunc();
        echo "<p><b>Projeto</b>: {$this->projeto}</p>";
    }

    /**
     * Get the value of projeto
     */
    public function getProjeto()
    {
        return $this->projeto;
    }

    /**
     * Set the value of projeto
     *
     * @return  self
     */
    public function setProjeto($projeto)
    {
        $this->projeto = $projeto;

        return $this;
    }
}
