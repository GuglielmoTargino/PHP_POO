<!DOCTYPE html>
<!--Exrcicio modelo de formulario
Aluno: Guglielmo Targino
Data:20jul24
Versão: v3
pg254-257
-->
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="../../STYLE/estilo_avulso.css" media="screen" />
</head>



<?php



function testa2(){
    include_once 'row_gateway.class.php';
    $objeto= new ProdutoGateway2;


    $objeto->id=55;
    $objeto->nome='lila';
    $objeto->tipo='ave';
    $objeto->peso=50; 
    $objeto->Update();    

}


function testa1(){
    include_once 'row_gateway.class.php';

    $objeto= new ProdutoGateway2;

    $objeto->id=55;
    $objeto->nome='kaka';
    $objeto->tipo='ave';
    $objeto->peso=50;
    $objeto->Insert();

}   
    


testa2();


   
    
?>

</html>

