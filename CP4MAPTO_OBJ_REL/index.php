<!DOCTYPE html>
<!--Exrcicio modelo de formulario
Aluno: Guglielmo Targino
Data:20jul24
Versão: v3
-->
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="../STYLE/estilo_avulso.css" media="screen" />
</head>



<?php
   //include_once 'table_gateway.class.php';
   include_once 'objto_gateway.class.php';
   include_once 'produto.class.php';

   $objeto= new Produto;

   $objeto->id=123;
   $objeto->nome='kaka';
   $objeto->tipo='ave';
   $objeto->peso=50;
    
    $gateway= new ProdutoGateway;
    //$gateway->Insert(184,'vinho','dog',3);
    //$gateway->Delete(14);
    //$gateway->Update(5,'guga','leo',74)
    //$gateway->getObject('dog');
    //$gateway->getObjects();
    $gateway->Insert($objeto);
   
    
?>

</html>

