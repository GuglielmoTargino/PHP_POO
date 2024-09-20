<!DOCTYPE html>
<!--	
Atividade I - Calculo de IMC ( Índice de Massa Corporal)
Desenvolver um programa em PHP que calcula o índice IMC ( massa corpórea) com as carcteristicas abaixo.
formula:
IMC = peso / (altura)x(altura)
classificação
Valor de IMC abaixo de 18,5: adulto com baixo peso.
Valor de IMC maior ou igual a 18,5 e menor que 25,0: adulto com peso adequado.
Valor de IMC maior ou igual a 25,0 e menor que 30,0: adulto com sobrepeso.
Valor de IMC maior ou igual a 30,0: adulto com obesidade.

Prof: João Vagner Pereira.
Aluno: Guglielmo Henriques Targino
RA: 2222104623
Data:06set24
Parte 2/2.
Versão:v0
-->
<?php

$altura=isset($_GET['name_altura']) ? $_GET['name_altura']:0;
$peso=isset($_GET['name_peso']) ? $_GET['name_peso']:0;

$IMC = $peso / (($altura/100)^2); //($altura/100) transforma de centímetro para metro.

if($IMC<18.5){
    echo'adulto com baixo peso.';
}elseif($IMC>=18.5 and $IMC<25){
    echo'adulto com peso adequado.';
}elseif($IMC>=18.5 and $IMC<30){
    echo 'adulto com sobrepeso.';
}else{
    echo 'adulto com obesidade.';
}
?>
</br>
<a href="form_atv1_imc.php">Voltar</a>
</html>