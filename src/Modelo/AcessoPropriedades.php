<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = "exibe" . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}