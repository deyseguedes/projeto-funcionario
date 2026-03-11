<?php
require_once "Animal.php";

class Cachorro extends Animal {
    public function emitirSom(){
        echo "Au Au";
    }
}

$a = new Animal(); // Erro: Não é possível instanciar uma classe abstrata