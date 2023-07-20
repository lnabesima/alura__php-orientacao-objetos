<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, cpf $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
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
}