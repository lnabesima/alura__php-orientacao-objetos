<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private static int $quantidadeDeContas = 0;
    private Titular $titular;
    private float $saldo;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$quantidadeDeContas++;
    }

    public static function exibirQuantidadeDeContas(): int
    {
        return self::$quantidadeDeContas;
    }

    public function __destruct()
    {
        self::$quantidadeDeContas--;
    }

    public function exibirNomeTitular(): string
    {
        return $this->titular->exibirNome();
    }

    public function exibirCpfTitular(): string
    {
        return $this->titular->exibirCpf();
    }

    public function exibirSaldo(): float
    {
        return $this->saldo;
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
}