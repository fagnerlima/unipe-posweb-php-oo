<?php
ini_set('display_errors', 1);
error_reporting(E_ERROR);
require_once './autoload.php';

use Classes\Carro;
use Classes\Moto;
use Interfaces\ICaracteristicas;

$nome = $_POST['nome'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];

$veiculo;

switch ($tipo) {
    case 'CARRO':
        $veiculo = new Carro($nome, $marca, $modelo);
        break;
    case 'MOTO':
        $veiculo = new Moto($nome, $marca, $modelo);
        break;
}

if ($veiculo instanceof ICaracteristicas) {
    $veiculo->exibeNome();
    $veiculo->exibeMarca();
    $veiculo->exibeModelo();
}
