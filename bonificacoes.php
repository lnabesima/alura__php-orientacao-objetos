<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Servicos\ControladorBonificacao;

require_once './autoloader.php';

$funcionario1 = new Funcionario('Lucas Nabesima', new Cpf('123.456.789-10'), 'Desenvolvedor', 1000);
$funcionario2 = new Funcionario('Adriani Zago', new Cpf('321.654.987-01'), 'Gerente', 5000);

$controlador = new ControladorBonificacao();
$controlador->adicionaBonificacoesDo($funcionario1);
$controlador->adicionaBonificacoesDo($funcionario2);
echo $controlador->exibeTotalDeBonificacoes();