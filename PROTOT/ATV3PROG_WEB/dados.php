<?php
        $nome = $_GET['nome'];
        $end = $_GET['end'];
        $tel = $_GET['tel'];
        $data = $_GET['data'];
        $sexo = $_GET['sexo'];
        $escolaridade = $_GET['escolaridade'];
        $operacao = $_GET['ler'];

        //echo"$nome, $end, $tel, $data, $sexo";

        if ($operacao == 'Gravar'){
            $myfile = fopen("C:/Users/Guglielmo H T/Desktoplogue.txt", "w") or die("Unable to open file!");
            fwrite($myfile, $nome);
            fwrite($myfile, "<br>");
            fwrite($myfile, $end);
            fwrite($myfile, "<br>");
            fwrite($myfile, $tel);
            fwrite($myfile, "<br>");
            fwrite($myfile, $data);
            fwrite($myfile, "<br>");
            fwrite($myfile, $sexo);
            fwrite($myfile, "<br>");
            fwrite($myfile, $escolaridade);
            fwrite($myfile, "<br>");
            fclose($myfile);

   
            //$myfile = fopen("C:/Users/WS-Edson/Desktop/carta.txt", "r") or die("Unable to open file!");
            //echo fgets($myfile);
            //echo $leitura;
            //fclose($myfile);
            
            include('agradecimento.html');
           // < href="agradecimento.html">;

    }




