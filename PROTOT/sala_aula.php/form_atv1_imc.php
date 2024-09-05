<!DOCTYPE html>
<!--
Exercício de aula prog_web
Aluno: Guglielmo Henriques Targino
RA: 2222104623
Data:05set24
Versão:v0

	
Atividade I - Calculo de IMC ( Índice de Massa Corporal)
Desenvolver um programa em PHP que calcula o índice IMC ( massa corpórea) com as carcteristicas abaixo
formula:
IMC = peso / (altura)2
classificação
Valores de IMC abaixo de 18,5: adulto com baixo peso.
Valores de IMC maior ou igual a 18,5 e menor que 25,0: adulto com peso adequado.
Valores de IMC maior ou igual a 25,0 e menor que 30,0: adulto com sobrepeso.
Valores de IMC maior ou igual a 30,0: adulto com obesidade.
-->

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Programação WEB.</title>
</head>

<body>
    <div id="top">
    <h1>FORMULÁRIO PARA CALCULAR O IMC-Índice de massa corpórea.</h1>       

  <form name="form1" method="get" action="validacao_imc.php"> </br>
      <label>Digite sua altura em centímetros</label>
      <input type="number" name="name_altura"></br>
      <label>Digite seu peso em kilos</label>
      <input type="number" name="name_peso"></br>

      <input type="submit" value="verificar">

  </form> 




</html>