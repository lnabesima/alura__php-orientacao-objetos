<?php
require_once './autoloader.php';


use Alura\Banco\Modelo\{Cpf, Endereco, Funcionario};
use Alura\Banco\Modelo\Conta\{Conta, Titular};

$conta1 = new Conta(new Titular(new Cpf('123.456.789-01'), 'Lucas Nabesima', new Endereco('SP',
    "São Paulo", "Lapa", "Rua X", "1")));
echo $conta1->exibirSaldo() . PHP_EOL;
echo $conta1->exibirNomeTitular() . PHP_EOL;
echo $conta1->exibirCpfTitular() . PHP_EOL;
$conta1->depositar(500);
$conta1->sacar(100);
echo $conta1->exibirSaldo() . PHP_EOL;

//var_dump($conta1);

$conta2 = new Conta(new Titular(new Cpf('987.654.321-10'), 'Adriani', new Endereco('SP',
    "São Paulo", "Lapa", "Rua X", "1")));

//echo Conta::exibirQuantidadeDeContas();

$funcionario = new Funcionario('Thiago', new Cpf('123.456.789-99'), 'Peão de Obra');
//var_dump($funcionario);