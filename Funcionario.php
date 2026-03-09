<?php

class Funcionario {
    public $nome;
    protected $cargo;
    private $salario;

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function mostrarDados(){
        return "Nome: {$this->nome}, Cargo: {$this->cargo}, Salário: R$ {$this->salario}";
    }



}