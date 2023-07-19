<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validarNomeDoTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function exibirEndereco(): Endereco
    {
        return $this->endereco;
    }
    public function exibirCpf(): string
    {
        return $this->cpf->exibirCpf();
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