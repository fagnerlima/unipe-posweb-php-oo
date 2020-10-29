<?php

namespace Classes;

class Funcionario
{
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function relatorioFunc()
    {
        echo "<h3>Relatório do Funcionário</h3>";
        echo "<p><b>Nome</b>: {$this->nome}</p>";
        echo "<p><b>Salário</b>: {$this->salario}</p>";
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}
