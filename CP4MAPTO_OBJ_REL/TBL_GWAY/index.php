<!DOCTYPE html>
<!--Exrcicio livro PHP-POO
Aluno: Guglielmo Targino
Data:20jul24
Versão: v3
pg246-253
-->
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="../../STYLE/estilo_avulso.css" media="screen" />
</head>



<?php

function testa1($x,$y){
    include_once 'table_gateway.class.php';    
    $gateway= new ProdutoGateway;

    if($x==1){//INSERT     
        $gateway->Insert($y,'vinho','dog',3);
    }
    if($x==2){//DELETE       
        $gateway->Delete($y);
    }
    if($x==3){//UPDATE    
        $gateway->Update($y,'amor','leo',74);
    }
    if($x==4){//SELECT BY ID       
        $gateway->getObject('gato');
    }
    if($x==5){//SELECT *        
        $gateway->getObjects();
    }
    else{
        echo"Operação só até 5";
    }


}

function testa2($X,$Y){
   //Aqui passa um objeto como parametro.
   include_once 'data_transf.class.php';
   include_once 'produto.class.php';

   $gateway= new ProdutoGateway;
   $objeto= new Produto;

   $objeto->id=$X;
   $objeto->nome='kaka';
   $objeto->tipo='ave';
   $objeto->peso=$Y;
   $gateway->Insert($objeto);

}
/*
(operação,valor) 1-INSERT, 2-DELETE, 3-UPDATE, 4-SELECT BY ID, 5-SELECT*
*/

testa1(5,5);
    

?>

</html>

