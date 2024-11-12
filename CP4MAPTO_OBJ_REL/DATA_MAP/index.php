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
include_once 'data_map.class.php';

function testa1(ProdutoGateway2 $objeto){   
    $objeto->Insert(); //INSERIR 
}   

function testa2(ProdutoGateway2 $objeto,$x){
    $objeto->Update($x);//ATUALIZAR
}

function testa3(ProdutoGateway2 $objeto,$x){   
    $objeto->getObject($x); //SELECT
}
function testa4(ProdutoGateway2 $objeto,$x){   
    $objeto->getObjects(); //SELECT ALL
}
function testa5(ProdutoGateway2 $objeto,$x){   
    $objeto->Delete($x); //DELETE
}

$objeto= new ProdutoGateway2;

$objeto->id=99;
$objeto->nome='mina';
$objeto->tipo='gata';
$objeto->peso=50;

testa4($objeto,$objeto->id);   
    
?>

</html>

