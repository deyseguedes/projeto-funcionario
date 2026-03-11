<?php

class Classe {
    public static $propridade;


    public static function metodo(){
        echo "Método estático chamado!";
    }
}

Classe::$propridade;

Classe::metodo();