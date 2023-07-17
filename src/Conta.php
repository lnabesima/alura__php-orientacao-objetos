<?php
class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
    
    public function sacar(float $valorASacar): void{
        if($valorASacar > $this->saldo){
            echo "Saldo insuficiente para realizar esta operação.";
        } else {
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar(float $valorADepositar): void{
        if($valorADepositar < 0){
            echo "O valor precisa ser positivo";
        } else {
            $this->saldo += $valorADepositar;
        }
    }
}