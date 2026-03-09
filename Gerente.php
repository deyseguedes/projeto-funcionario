<?php

require_once 'Funcionario.php';

class Gerente extends Funcionario {
    public function bonus(){
        
        $bonus = $this->getSalario() * 0.20;
        return "O bônus do gerente é: R$ " . $bonus;
    }
}