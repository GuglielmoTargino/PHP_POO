<!DOCTYPE html>
<!--
Atividade II - Exercícios

Calcule o numero de caixas de revestimento para uma loja de material de construção.
Solicitar a altura e largura da parede
Solicitar o tamanho do revestimento (azulejos) ( 20 x 20, 30 x 30, 30 x 40, 40x 40)
Solicitar se o Azulejo é decorado ou uniforme-liso ( somente uma textura ou cor)

preceitos:
A venda é somente em caixas fechadas em 1 M2 arredondando para numero inteiros de azulejos
exemplo: 100 cm x 100 cm = 10000 cm2
20 x 20 = 400 cm2
1 cx = 10000 / 400 = 25 azulejos


Prof: João Vagner Pereira.
Aluno: Guglielmo Henriques Targino
RA: 2222104623
Data:23set24
Parte 2/2.
Versão:v2
-->
<?php

$alt_pa = $_GET["nam_alt_pa"];//pega o valor digitado em metro.
$larg_pa = $_GET["nam_larg_pa"];//pega o valor digitado em metro.
$tipo_az = $_GET["name_tipo"];
$tam_az = $_GET["name_tam"];

$area_pa = $alt_pa * $larg_pa;//pega altura e multiplica por largura e joga na variavel area_pa

if($tam_az=='20x20'){
    $area_az = 0.04;
}

if($tam_az=='30x30'){
    $area_az = 0.09;
}

if($tam_az=='30x40'){
    $area_az = 0.12;
}

if($tam_az=='40x40'){
    $area_az = 0.16;
}

$azulejos =ceil($area_pa / $area_az);//calcula quantidade necessária inteiras de azulejos.
$cx_az=ceil($area_az*$azulejos); //calcula a quantidade inteira de caixas de 1m2.
echo"</br>";

echo "A quantidade necessária de azulejos é $azulejos";
echo"<br>";

echo "A quantidade de caixas de 1m2 é $cx_az";
echo"<br>";

echo "O tamanho do azulejo selecionado foi $tam_az cm";
echo"<br>";

if ($tipo_az=='lis'){
    echo "O tipo de azulejo escolhido foi Liso.";
}else{
    echo "O tipo de azulejo escolhido foi Decorado.";
}

?>
</br>
<a href="atv2_form_calc_azulejo.php">Voltar</a>
</html>