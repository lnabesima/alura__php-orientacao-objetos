<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\{Banco\Modelo\Cpf, Banco\Modelo\Pessoa};

abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, cpf $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function exibirCargo(): string
    {
        return $this->cargo;
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

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}