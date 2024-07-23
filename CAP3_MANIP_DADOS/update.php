<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
</head>


<?php

/**
 * Exercício d livro PHP-POO.
 * Aluno: Guglielmo Targino.
 * Data: 23jul24.
 * Versão:v0
 * pgn 191.
 */

 //carrega função autoload();

 function __autoload($cla){
    if(file_exists("app.ado/{$cla}.class.php")){
        include_once "app.ado/{$cla}.class.php";
    }

 }

?>
</html>
