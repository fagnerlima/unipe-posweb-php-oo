<?php

ini_set('display_errors', 1);

require_once './autoload.php';

use Classes\ContaCorrente;
use Classes\ContaPoupanca;

try {
    $contaCorrente = new ContaCorrente(200);
    $contaPoupanca = new ContaPoupanca(500);

    $contaCorrente->saca(100);
    $contaPoupanca->saca(100);

    $contaCorrente->imprimeExtrato();
    $contaPoupanca->imprimeExtrato();
} catch (Exception $exception) {
    echo "<p><b>Erro</b>: {$exception->getMessage()}</p>";
}
