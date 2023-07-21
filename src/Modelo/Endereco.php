<?php

namespace Alura\Banco\Modelo;

class Endereco
{
    private string $estado;
    private string $cidade;
    private string $bairro;
    private string $logradouro;
    private string $numeroDaCasa;

    public function __construct(string $estado, string $cidade, string $bairro, string $logradouro, string $numeroDaCasa)
    {
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->logradouro = $logradouro;
        $this->numeroDaCasa = $numeroDaCasa;
    }

    public function __toString(): string
    {
        return "{$this->logradouro} {$this->numeroDaCasa}, {$this->bairro}, {$this->cidade}, {$this->estado}";
    }

    public function exibirEstado(): string
    {
        return $this->estado;
    }

    public function exibirCidade(): string
    {
        return $this->cidade;
    }

    public function exibirBairro(): string
    {
        return $this->bairro;
    }

    public function exibirLogradouro(): string
    {
        return $this->logradouro;
    }

    public function exibirNumeroDaCasa(): string
    {
        return $this->numeroDaCasa;
    }
}