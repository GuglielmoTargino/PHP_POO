<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Testes PHP.</title>
<link rel="stylesheet" type="text/css" href="estilo/estilo_avulso.css" media="screen" />
</head>

<body>
    <div id="top">
    <h1>CAPÍTULO 3</h1>
        <h1>PHP-Programando com Orientação a Objetos</h1>
        <h2>| Manipulação de dados: 3.3.14-registro de log</h2>
<?php

/**
 * Exercício do livro PHP-POO
 * Aluno:Guglielmo Targino
 * Data: 30jul24
 * Versão:v0
 * pgn 218
 */
  //carrega as classes necessárias automaticamente 
    //no momento em que são instaciadas pelos objetos.
    function my_autoloader($cla) {
        include_once 'app.ado/' . $cla . '.class.php';
     }     
     spl_autoload_register('my_autoloader');

     try{
        //abre conexão
        TTransaction::open('config_conn');
        //define estratergia de log
        TTransaction::setLogger(new TLoggerXml('/tmp/arquivo/.xml'));
        //escreve mensagem de log
        TTransaction::log("INSERINDO GUGA NA TABELA");
        //cria instrução inserte
        $sql=new TSqlInsert;
        //define o nome da entidade
        $sql->setEntity('entrada');
        //atribui valor da coluna
        $sql->setRowData('codigo',9);

        //obtem conexão
        $conn= TTransaction::get();
        //executa conexão
        $result=$conn->Query($sql->getInstruction());
        //escreve mensagem de log
        TTransaction::log($sql->getInstruction());
        //fecha conexão
        TTransaction::close();


     }catch(Exception $e){
        //exibe mensagem de erro
        echo $e->getMessage();
        //desfaz operações realizadas
        TTransaction::rollback();

     }




?>

</div>
</body>

</html>
