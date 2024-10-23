<?php
/**
 * Revisão do livro PHP-POO
 * Aluno:Guglielmo Targino
 * Data:03jul24
 * Versão:v2
 * pgn 97
 */

 include_once 'cap2_classes/conta.class.php';
 include_once 'cap2_classes/pessoa.class.php';

 $guga= new Pessoa(10,"Dara",1.85,25,"03/07/24","tec",10000);

 echo " o nome dele é \n {$guga->nome}";
?>