<?php

namespace Alura\Banco\Modelo\Servicos;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacao
{
    private float $totalDeBonificacoes = 0;

    public function adicionaBonificacoesDo(Funcionario $funcionario): void
    {
        $this->totalDeBonificacoes += $funcionario->calculaBonificacao();
    }

    /**
     * @return float
     */
    public function exibeTotalDeBonificacoes(): float
    {
        return $this->totalDeBonificacoes;
    }
}