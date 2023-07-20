<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected function tarifaDeSaque(): float
    {
        return 0.03;
    }
}