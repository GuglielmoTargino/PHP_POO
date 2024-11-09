<!DOCTYPE html>
<!--Exrcicio modelo de formulario
Aluno: Guglielmo Targino
Data:20jul24
Versão: v3
pg250
-->
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="../../STYLE/estilo_avulso.css" media="screen" />
</head>



<?php
   //include_once 'table_gateway.class.php';

   /* Aqui passa um objeto como parametro.

   include_once 'data_transf.class.php';
   include_once 'produto.class.php';

   $objeto= new Produto;

   $objeto->id=123;
   $objeto->nome='kaka';
   $objeto->tipo='ave';
   $objeto->peso=50;
   $gateway->Insert($objeto);

   */

function testa1(){
    include_once 'row_gateway.class.php';
    //include_once 'produto2.class.php';

    $objeto= new ProdutoGateway2;

    $objeto->id=51;
    $objeto->nome='kaka';
    $objeto->tipo='ave';
    $objeto->peso=50;
    $objeto->Insert();

}
testa1();


   
    
?>

</html>

