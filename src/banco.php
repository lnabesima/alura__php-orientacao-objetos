<?php
require_once './Conta.php';
require_once './Titular.php';
require_once './Cpf.php';
require_once './Endereco.php';

$endereco = new Endereco('SP', 'São Paulo', 'Centro', 'Av. Brasil', '100');
$conta1 = new Conta(new Titular(new Cpf('123.456.789-01'), 'Lucas Nabesima', $endereco));
echo $conta1->exibirSaldo() . PHP_EOL;
echo $conta1->exibirNomeTitular() . PHP_EOL;
echo $conta1->exibirCpfTitular() . PHP_EOL;
var_dump($conta1);

$conta2 = new Conta(new Titular(new Cpf('987.654.321-10'), 'Adriani', $endereco));

echo Conta::exibirQuantidadeDeContas();