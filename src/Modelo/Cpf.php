<?php

namespace Alura\Banco\Modelo;

class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validarCpf($cpf);
        $this->cpf = $cpf;
    }

    public function exibirCpf(): string
    {
        return $this->cpf;
    }

    private function validarCpf($cpf): void
    {
        if (strlen($cpf) < 14) {
            echo "O CPF precisa ter ao mínimo 14 caracteres. Por favor, informe o CPF com pontos e traço." . PHP_EOL;
            exit();
        }
    }
}