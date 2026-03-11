<?php

require_once "Funcionario.php";
require_once "Gerente.php";


$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];


if($cargo == "gerente"){

    $funcionario = new Gerente();
    
} else {

    $funcionario = new Funcionario();

}


$funcionario->nome = $nome;
$funcionario->setCargo($cargo);
$funcionario->setSalario($salario);


echo "<h2>Dados do Funcionário</h2>";

echo $funcionario->mostrarDados();


if($cargo == "gerente"){
    $valor_total = $funcionario->getSalario() + $funcionario->bonus();
    echo "<br>Bônus: " . number_format($funcionario->bonus(), 2, ',', '.');
    echo "<br>Valor total (salário + bônus): " . number_format($valor_total, 2, ',', '.');

}