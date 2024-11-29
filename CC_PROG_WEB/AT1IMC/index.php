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
    <h1>Formulário para calcular o IMC-Índice de Massa Corpórea.</h1>       

    <form name="form1" method="get" action="validacao_imc.php"> </br>
      <label>Informe sua altura em centímetros</label>
      <input type="number" name="name_altura" id="id_altura"></br>
      <label>Informe seu peso em Kg.</label>
      <input type="number" name="name_peso" id="id_peso" min="0" max="300" step="0.1"></br>

      <input type="submit" value="verificar" id="id_verificar">
    </form> 
</body>

</html>