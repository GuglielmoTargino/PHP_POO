<!DOCTYPE html>
<!--
Atividade II - Exercícios
segue lista contendo dois exercícios:
Faça um script para uma loja de tintas. O script deverá pedir o tamanho em metros quadrados da área a ser pintada.
Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados e que a tinta é vendida em latas de 18 litros,
que custam R$ 80,00 ou em galões de 3,6 litros, que custam R$ 25,00.
Informe ao usuário as quantidades de tinta a serem compradas e os respectivos preços em 3 situações:
comprar apenas latas de 18 litros;
comprar apenas galões de 3,6 litros;
misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre arredonde os valores para cima,
isto é, considere latas cheias.

Prof: João Vagner Pereira.
Aluno: Guglielmo Henriques Targino
RA: 2222104623
Data:19set24
Parte 2/2.
Versão:v0
-->
<?php

$alt = $_GET["name_altura"];
$larg = $_GET["name_largura"];

$area = ceil($alt * $larg);//pega altura e multiplica por largura e joga na variavel area
$areaSobra = $area + ($area * 0.10);//pega o resultado de area e acrecenta 10% e joga na variavel com areaSobra
$litros = ceil($areaSobra / 6) ;//como com 1 litro e possivel pintar metros ele divide areaSobra por 6

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
<a href="atv2_form_calc_tinta.php">Voltar</a>
</html>