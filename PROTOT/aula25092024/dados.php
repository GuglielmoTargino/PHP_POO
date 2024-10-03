<?php
    //$leitura = $_GET['ler'];
    $escrita = $_GET['escrita'];
    $operacao = $_GET['op'];
    echo $operacao;

    if ($operacao == 'Escrita'){
        $myfile = fopen("C:/Users/WS-Edson/Desktop/carta.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $escrita);
        fclose($myfile);
    }
    if ($operacao == 'Ler'){
       $myfile = fopen("C:/Users/WS-Edson/Desktop/carta.txt", "r") or die("Unable to open file!");
       echo fgets($myfile);
       //echo $leitura;
        fclose($myfile);
    }
?>