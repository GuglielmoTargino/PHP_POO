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
Data:19set24
Parte 2/2.
Versão:v0
-->
<?php

$alt_pa = $_GET["nam_alt_pa"];
$larg_pa = $_GET["nam_larg_pa"];
$alt_az = ($_GET["nam_alt_az"])/100;
$larg_az = ($_GET["nam_larg_az"])/100;
$tipo_az = $_GET["name_tipo"];

echo $alt_az;
echo"</br>";
echo $larg_az;


$area_pa = ceil($alt_pa * $larg_pa);//pega altura e multiplica por largura e joga na variavel area
$area_az =($alt_az * $larg_az);//pega altura e multiplica por largura e joga na variavel area

$azulejos = ceil($area_pa / $area_az);
$cx_az=ceil($azulejos);

echo $area_az;



echo "Quantidade necessária de azulejos é $alt_az";
echo"<br>";
echo "Quantidade necessária de azulejos é $area_az";
echo"<br>";


?>
</br>
<a href="atv2_form_calc_azulejo.php">Voltar</a>
</html>