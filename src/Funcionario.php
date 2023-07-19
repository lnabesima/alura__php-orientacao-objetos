<?php

class Funcionario
{
    private string $nome;
    private string $cpf;
    private string $cargo;

    public function __construct(string $nome, string $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function exibirNome(): string
    {
        return $this->nome;
    }

    public function exibirCpf(): string
    {
        return $this->cpf;
    }

    public function exibirCargo(): string
    {
        return $this->cargo;
    }
}