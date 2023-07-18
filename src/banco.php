<?php
require_once './Conta.php';

$conta1 = new Conta('123.456.789-01', 'Lucas Nabesima');
echo $conta1->exibirNomeTitular() . PHP_EOL;
echo $conta1->exibirCpfTitular() . PHP_EOL;
echo $conta1->exibirSaldo() . PHP_EOL;

$conta2 = new Conta('987.654.321-10', 'Ana Paula');

echo Conta::exibirQuantidadeDeContas();