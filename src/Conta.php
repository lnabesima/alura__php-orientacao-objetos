<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function definirCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function exibirCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function definirNomeTitular(string $nome): void
    {
        $this->nomeTitular=$nome;
    }

    public function exibirNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function exibirSaldo(): float
    {
        return $this->saldo;
    }

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo insuficiente para realizar esta operação.";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "O valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo insuficiente para esta operação.";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}