<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoloader.php';

$endereco1 = new Endereco(
    "PR",
    "Londrina",
    "Centro",
    "Avenida Brasil",
    "100"
);

echo $endereco1 . PHP_EOL;

$endereco1->cidade = "Maringá";
$endereco1->bairro = "Vila Sésamo";

echo $endereco1;