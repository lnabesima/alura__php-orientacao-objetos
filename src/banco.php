<?php
require_once './Conta.php';

$conta1 = new Conta();
$conta1->definirNomeTitular("Lucas Nabesima");
$conta1->definirCpfTitular("123.456.789-01");
echo $conta1->exibirNomeTitular() . PHP_EOL;
echo $conta1->exibirCpfTitular() . PHP_EOL;
echo $conta1->exibirSaldo() . PHP_EOL;