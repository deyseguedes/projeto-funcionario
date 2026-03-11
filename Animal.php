<?php

abstract class Animal {
    abstract public function emitirSom();
}


class Cachorro extends Animal {
    public function emitirSom(){
        echo "Au Au";
    }
}



$c = new Cachorro();

$c->emitirSom();




