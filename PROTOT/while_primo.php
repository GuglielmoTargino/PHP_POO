<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="../STYLE/estilo_avulso2.css" media="screen" />
</head>

<body>
    <div id="top">
    <h1>CAPÍTULO 3</h1>
        <h1>PHP-Programando com While</h1>
        <h2>| Verificação de um número primo</h2>
<?php
  /**
   * Programa para encontrar os números primos
   * em uma sequência de números.
   * Aluno: Guglielmo Targino
   * Data: 17ago24
   * Versão:v0
   * OBS_1: 2 e 3, são números primos,
   * OBS_2: 1, só tem um divisor(não é número primo),logo, é
   * desnecessário implementar lógica para testá-los. 
   */

   $a=1; //variável para valor de início da sequência. Não iniciar com 1,2 e 3.
   $lim=25;//variável para valor de limite da sequência. Sempre maior que início.

   while($a<=$lim){
    //lógica para testar se o número tem algum outro divisor além
    // dele mesmo e 1.
    if( ($a%3==0 )){
        echo "{$a} é Número primo. </br>";
    }
    $a++;// incremento da sequência.
   }
?>

</div>
</body>

</html>
