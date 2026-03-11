<?php

class Usuario {
    public static $totalUsuarios = 0;
    public string $nome;

    public function __construct($nome){
        echo "Criando usuário: $nome <br>";
        $this->nome = $nome;
        self::$totalUsuarios++;
    }
}

$u = new Usuario("joao");
$u2 = new Usuario("maria");
$u3 = new Usuario("pedro");

echo Usuario::$totalUsuarios;

