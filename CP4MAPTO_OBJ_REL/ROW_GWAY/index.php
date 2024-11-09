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

   /* Aqui passa um bicho como parametro.

   include_once 'data_transf.class.php';
   include_once 'produto.class.php';

   $bicho= new Produto;

   $bicho->id=123;
   $bicho->nome='kaka';
   $bicho->tipo='ave';
   $bicho->peso=50;
   $gateway->Insert($bicho);

   */

   include_once 'row_gateway.class.php';


   
    
    $bicho= new ProdutoGateway;

    $bicho->id=75;
    $bicho->nome='mana';
    $bicho->tipo='onca';
    $bicho->peso=50;
    $bicho->Insert();
    
?>

</html>

