<?php
ini_set('display_errors', 1);
error_reporting(E_ERROR);

require_once './autoload.php';

use Classes\Carnivoro;
use Classes\Herbivoro;

$carnivoro = new Carnivoro('carne');
$herbivoro = new Herbivoro('legumes');

$carnivoro->habitoAlimentar();
$herbivoro->habitoAlimentar();
