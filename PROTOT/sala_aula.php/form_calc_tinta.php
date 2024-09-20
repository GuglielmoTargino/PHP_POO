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
Parte 1/2.
Versão:v0
-->

<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Programação WEB.</title>
</head>

<body>
    <div id="top">
    <h1>Formulário para calcular quantidade de tinta.</h1>       

    <form name="form1" method="get" action="calc_tinta.php"> </br>
      <label>Informe a largura da parede em metros</label>
      <input type="number" name="name_altura" id="id_altura"></br>
      <label>Informe a altura da parede em metros.</label>
      <input type="number" name="name_largura" id="id_largura" min="0" max="300" step="0.1"></br>

      <input type="submit" value="Calcular" id="id_verificar">
    </form> 
</body>

</html>