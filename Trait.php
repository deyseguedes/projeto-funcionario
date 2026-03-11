<?php

trait Log
{
    public function registrarLog()
    {
        echo "Log registrado";
    }
}

class Usuario
{
    use Log;
}

class Produto
{
    use Log;
}

$u = new Usuario();
$u->registrarLog();
