<?php

ini_set('display_errors', 1);
require_once './autoload.php';

use Classes\Funcionario;
use Classes\Gerente;
use Classes\Programador;

$nome = $_POST['nome'];
$salario = $_POST['salario'];
$cargo = $_POST['cargo'];
$observacao = $_POST['observacao'];

$funcionario;

switch ($cargo) {
    case 'GERENTE':
        $funcionario = new Gerente($nome, $salario, $observacao);
        break;
    case 'PROGRAMADOR':
        $funcionario = new Programador($nome, $salario, $observacao);
        break;
    default:
        $funcionario = new Funcionario($nome, $salario);
}

$funcionario->relatorioFunc();
