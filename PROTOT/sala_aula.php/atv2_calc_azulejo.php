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
$alt_az = $_GET["nam_alt_az"];
$larg_az = $_GET["nam_larg_az"];
$tipo_az = $_GET["name_tipo"];


$area_pa = ceil($alt_pa * $larg_pa);//pega altura e multiplica por largura e joga na variavel area
$area_az = ceil($alt_az * $larg_az);//pega altura e multiplica por largura e joga na variavel area

echo $area_pa;
echo $tipo_az;


$lata = ceil($litros / 18);
$precolata = ceil($lata * 80);

$galao = ceil($litros / 3.6);
$precoGalao = ceil($galao * 25);

echo "A área  para base de cálculo é $areaSobra m²";
echo"<br>";
echo "Tintas disponíveis em latas de 18 litros e galões de 3,6 litros";
echo"<br>";
echo"<br>";
echo "Quantidade necessária de tinta em litros: $litros";
echo"<br>";
echo "Quantidade de latas de 18 litros: $lata.";
echo"<br>";
echo "Quantidade de galões de 3,6 litros: $galao.";
echo "<br>";
echo "Valor total se usar latas de 18 litros R$:$precolata";
echo"<br>";
echo "Valor total se usar galões de 3,6 litros R$: $precoGalao";

?>
</br>
<a href="atv2_form_calc_azulejo.php">Voltar</a>
</html>