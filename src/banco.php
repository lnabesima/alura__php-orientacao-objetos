<?php
require_once './Conta.php';

$conta1 = new Conta('123.456.789-01', 'Lucas Nabesima');
echo $conta1->exibirNomeTitular() . PHP_EOL;
echo $conta1->exibirCpfTitular() . PHP_EOL;
echo $conta1->exibirSaldo() . PHP_EOL;