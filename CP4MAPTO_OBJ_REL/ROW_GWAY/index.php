<!DOCTYPE html>
<!--Exrcicio modelo de formulario
Aluno: Guglielmo Targino
Data:09nov24
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
include_once 'row_gateway.class.php';






function testa1(ProdutoGateway2 $objeto){   
    $objeto->Insert();  
}   

function testa2(ProdutoGateway2 $objeto,$x){
    $objeto->Update($x);
}

function testa3(ProdutoGateway2 $objeto,$x){   
    $objeto->getObject($x); 

}
    
$objeto= new ProdutoGateway2;

$objeto->id=47;
$objeto->nome='mina';
$objeto->tipo='gata';
$objeto->peso=50;

testa3($objeto,$objeto->id);


   
    
?>

</html>

