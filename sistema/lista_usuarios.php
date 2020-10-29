<?php

ini_set('display_errors', 1);
error_reporting(E_ERROR);

require_once './autoload.php';

use Classes\Cadastro;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema - PHP OO :: Unipê</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Sistema - PHP OO</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cadastro = new Cadastro();
                $list = $cadastro->exibir();

                foreach ($list as $row) {
                    echo "
                        <tr>
                            <td>{$row['codigo']}</td>
                            <td>{$row['nome']}</td>
                            <td>{$row['telefone']}</td>
                            <td>{$row['email']}</td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="index.html">Cadastrar</a>
    </div>
</body>

</html>
