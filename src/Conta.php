<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    private static int $quantidadeDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validarNomeDoTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
        self::$quantidadeDeContas++;
    }

    public function __destruct()
    {
        self::$quantidadeDeContas--;
    }

    private function validarNomeDoTitular(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo "O nome do titular precisa ter ao menos cinco caracteres." . PHP_EOL;
            exit();
        }
    }

    public function exibirCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function exibirNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function exibirSaldo(): float
    {
        return $this->saldo;
    }

    public static function exibirQuantidadeDeContas(): int
    {
        return self::$quantidadeDeContas;
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