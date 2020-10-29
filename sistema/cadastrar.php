<?php
ini_set('display_errors', 1);
error_reporting(E_ERROR);

require_once './autoload.php';

use Classes\Cadastro;

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$cadastro = new Cadastro($nome, $telefone, $email);
$cadastro->inserir();

header('Location: lista_usuarios.php');
