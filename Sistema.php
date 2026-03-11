<?php

class Sistema{
    public static $versao = "1.0";

    public static function info(){
        echo "Sistema versão: " . self::$versao;
    }
}

Sistema::info();