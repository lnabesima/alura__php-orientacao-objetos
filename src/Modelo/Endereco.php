<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo;
 * @property string $estado
 * @property string $cidade
 * @property string $bairro
 * @property string $logradouro
 * @property string $numeroDaCasa
 */
final class Endereco
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

    public function exibeEstado(): string
    {
        return $this->estado;
    }

    public function exibeCidade(): string
    {
        return $this->cidade;
    }

    public function exibeBairro(): string
    {
        return $this->bairro;
    }

    public function exibeLogradouro(): string
    {
        return $this->logradouro;
    }

    public function exibeNumeroDaCasa(): string
    {
        return $this->numeroDaCasa;
    }

    public function __get(string $nomeAtributo)
    {
        $metodo = "exibe" . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    public function __set(string $nomeAtributo, string $valorAAtualizar): void
    {
        $this->$nomeAtributo = $valorAAtualizar;
    }
}