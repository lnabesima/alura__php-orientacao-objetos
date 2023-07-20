<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private static int $quantidadeDeContas = 0;
    private Titular $titular;
    protected float $saldo;

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

    public function sacar(float $valorASacar): void
    {
        $taxaSaque = $valorASacar * $this->tarifaDeSaque();
        $valorSaque = $valorASacar + $taxaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo insuficiente para realizar esta operação.";
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "O valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    abstract protected function tarifaDeSaque(): float;
}