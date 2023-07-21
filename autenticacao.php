<?php
require_once 'autoloader.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Modelo\Servicos\Autenticador;


$autenticador = new Autenticador();
$diretor = new Gerente("John Doe", new Cpf('887.928.870-90'), 10000);

$autenticador->podeAutenticar($diretor, '4321');
