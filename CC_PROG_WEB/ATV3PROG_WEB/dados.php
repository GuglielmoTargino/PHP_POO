<?php
/*
Atividade III - salvando dados de formulário e agradecendo ( vale nota 0 a 10).
Crie um formulário completo com nome, endereço, telefone, nascimento, sexo, escolaridade com botão SUBMIT e RESET.
Ao enviar pelo SUBMIT o arquivo PHP salva em um arquivo loguer.txt e envia de volta uma pagina de agradecimento.
Esta pagina de agradecimento deverá estar salva em arquivo HTML.
O PHP lê este arquivo e envia ( echo) para o cliente que enviou o formulário.

Prof: João Vagner Pereira.
Aluno: Guglielmo Henriques Targino.
RA:2222104623.
Data: 03out24.
Versão: v2.
Parte 2/3.
 */
        $nome = $_GET['nome'];
        $end = $_GET['end'];
        $tel = $_GET['tel'];
        $data = $_GET['data'];
        $sexo = $_GET['sexo'];
        $escolaridade = $_GET['escolaridade'];
        $operacao = $_GET['cad'];

        if ($operacao == 'Gravar'){

            //cria o arquivo logue.txt em branco
            $myfile = fopen("C:/Users/Guglielmo H T/Desktop/logue.txt", "w") or die("Unable to open file!");

            //Escreve no arquivo logue.txt os dados informados no formulário pelo modo append. 
            $myfile = fopen("C:/Users/Guglielmo H T/Desktop/logue.txt", "a") or die("Unable to open file!");
                fwrite($myfile,"Nome: ".$nome."\n");
                fwrite($myfile,"Endereço: ".$end."\n");
                fwrite($myfile,"Telefone: ".$tel."\n");
                fwrite($myfile,"Data_nasc: ".$data."\n");
                fwrite($myfile,"Sexo: ".$sexo."\n");
                fwrite($myfile,"Escolaridade: ".$escolaridade."\n");
            }

    include('agradecimento.html'); // Requisita página agradecimento.html para nota de agradeciemento.
?>




