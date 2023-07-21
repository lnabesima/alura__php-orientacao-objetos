<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, Funcionario, Gerente};
use Alura\Banco\Modelo\Servicos\ControladorBonificacao;

require_once './autoloader.php';

$funcionario1 = new Desenvolvedor('Fulaninho', new Cpf('159.753.852-89'), 'Vendedor', 1000);
$funcionario2 = new Gerente('Lucas Nabesima', new Cpf('123.456.789-10'), 'Desenvolvedor', 2000);
$funcionario3 = new Diretor('Adriani Zago', new Cpf('321.654.987-01'), 'Gerente', 5000);

$funcionario1->sobeDeNivel();

$controlador = new ControladorBonificacao();
$controlador->adicionaBonificacoesDo($funcionario1);
$controlador->adicionaBonificacoesDo($funcionario2);
$controlador->adicionaBonificacoesDo($funcionario3);
echo $controlador->exibeTotalDeBonificacoes();

