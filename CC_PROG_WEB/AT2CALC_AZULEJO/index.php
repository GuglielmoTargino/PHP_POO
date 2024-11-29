<!DOCTYPE html>
<!--
Atividade II - Exercícios

Calcule o numero de caixas de revestimento para uma loja de material de construção.

Solicitar a altura e largura da parede
Solicitar o tamanho do revestimento (azulejos) em centímetros ( 20 x 20, 30 x 30, 30 x 40, 40x 40)
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
    <h1>Formulário para calcular a quantidade de azulejo para revestimento.</h1>       

    <form name="form1" method="get" action="atv2_calc_azulejo.php"> </br>
<!--

 <label>Informe a largura da parede em metro</label>
      <input type="number" name="nam_alt_pa" id="id_alt_pa" min="0" max="300" step="0.1"></br>
      <label>Informe a altura da parede em metro.</label>
      <input type="number" name="nam_larg_pa" id="id_larg_pa" min="0" max="300" step="0.1"></br>
      <label>Informe a largura do azulejo em centímetro</label>
      <input type="number" name="nam_alt_az" id="id_alt_az" min="0" max="300" step="0.1"></br>
      <label>Informe a altura do azulejo em centímetro.</label>
      <input type="number" name="nam_larg_az" id="id_larg_az" min="0" max="300" step="0.1"></br>
    
-->

    <label>Informe a largura da parede em metro</label>
      <input type="number" name="nam_alt_pa" id="id_alt_pa" min="0" max="300" step="0.1"></br>
      <label>Informe a altura da parede em metro.</label>
      <input type="number" name="nam_larg_pa" id="id_larg_pa" min="0" max="300" step="0.1"></br>
      <fieldset>
        <legend>Selecione o tipo de azulejo:</legend>
        <input type="radio" name="name_tipo" id="id_liso" value="lis" checked><label for="id_liso">Liso</label>
        <input type="radio" name="name_tipo" id="id_deco" value="dec"><label for="id_deco">Decorado</label>
      </fieldset> 
      <fieldset>
        <legend>Selecione o tamanho do azulejo:</legend>
        <input type="radio" name="name_tam" id="id_2020" value="20x20" checked><label for="id_liso">20X20 cm</label>
        <input type="radio" name="name_tam" id="id_3030" value="30x30"><label for="id_deco">30x30 cm</label>
        <input type="radio" name="name_tam" id="id_3040" value="30x40"><label for="id_liso">30x40 cm</label>
        <input type="radio" name="name_tam" id="id_4040" value="40x40"><label for="id_deco">40x40 cm</label>
      </fieldset> 

      

      <input type="submit" value="Calcular" id="id_verificar">
    </form> 
</body>

</html>