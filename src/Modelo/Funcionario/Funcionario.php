<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\{Banco\Modelo\Cpf, Banco\Modelo\Pessoa};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNomeDoFuncionario(string $nome): void
    {
        $this->validarNomeDoTitular($nome);
        $this->nome = $nome;
    }

    public function exibeSalario(): float
    {
        return $this->salario;
    }

    protected function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "O valor do aumento deve ser positivo." . PHP_EOL;
            return;
        }
        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao(): float;
}