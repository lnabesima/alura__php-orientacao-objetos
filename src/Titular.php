<?php

class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validarNomeDoTitular($nome);
        $this->nome = $nome;
    }
    public function exibirCpf(): string
    {
        return $this->cpf;
    }
    public function exibirNome(): string
    {
        return $this->nome;
    }

    private function validarNomeDoTitular(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo "O nome do titular precisa ter ao menos cinco caracteres." . PHP_EOL;
            exit();
        }
    }
}