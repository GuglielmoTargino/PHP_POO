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
   include_once 'table_gateway.class.php'; 
    
    echo "PHP LEGAL!";  
    
    $gateway= new ProdutoGateway;
    $gateway->Insert(14,'vinho','dog',3);
    
?>

</html>

