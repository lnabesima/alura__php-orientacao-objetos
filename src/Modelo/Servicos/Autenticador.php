<?php

namespace Alura\Banco\Modelo\Servicos;
use Alura\Banco\Modelo\Autenticavel;

class Autenticador{
    public function podeAutenticar(Autenticavel $autenticavel, string $senha)
    {
        if($autenticavel->podeAutenticar($senha)){
            echo "Usuário logado no sistema" . PHP_EOL;
        } else {
            echo "Senha incorreta." . PHP_EOL;
        }
    }
}