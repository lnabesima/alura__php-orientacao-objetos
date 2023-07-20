<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function sacar(float $valorASacar): void
    {
        $taxaSaque = $valorASacar * 0.03;
        $valorSaque = $valorASacar + $taxaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo insuficiente para realizar esta operação.";
            return;
        }
        $this->saldo -= $valorSaque;
    }
}