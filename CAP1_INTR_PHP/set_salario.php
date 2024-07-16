<?php


include_once 'classes/funcionario.php';

$dara=new Funcionario;

$dara->SetSalario(1000);

echo 'salario de dara é ='.$dara->GetSalario();

?>