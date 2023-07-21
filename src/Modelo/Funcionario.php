<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
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

    public function exibeSalario(): float{
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}