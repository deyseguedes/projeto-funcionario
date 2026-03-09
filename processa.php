<?php
require_once "Funcionario.php";
require_once "Gerente.php";

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];

if($cargo == "Gerente"){
    $funcionario = new Gerente();

}else{
    $funcionario = new Funcionario();
}

$funcionario->nome = $nome;
$funcionario->setCargo($cargo);
$funcionario->setSalario($salario);

echo "<h2> Dados do Funcionário</h2>";
echo $funcionario->mostrarDados();

if($cargo == "gerente"){
    echo "<h3> Bônus do Gerente</h3>";
    echo "<br> Bônus: R$ " . number_format($funcionario->bonus(), 2, ',', '.');
}