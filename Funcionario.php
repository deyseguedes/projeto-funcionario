<?php

class Funcionario {

    public string $nome;

    protected string $cargo;

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

        return "
        Nome: $this->nome <br>
        Cargo: $this->cargo <br>
        Salário: ".number_format($this->salario, 2, ',', '.')." <br>
        ";

    }

}