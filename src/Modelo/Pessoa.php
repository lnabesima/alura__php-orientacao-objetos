<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validarNomeDoTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }


    public function exibirNome(): string
    {
        return $this->nome;
    }

    public function exibirCpf(): string
    {
        return $this->cpf->exibirCpf();
    }

    protected function validarNomeDoTitular(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo "O nome do titular precisa ter ao menos cinco caracteres." . PHP_EOL;
            exit();
        }
    }
}