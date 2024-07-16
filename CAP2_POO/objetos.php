<?php
/**
 * Revisão dos exercícios do livro PHP-POO
 * Aluno: Guglielmo Targino
 * Data: 03jul24
 * Versão:v0
 * pgn 94
 */

 include_once 'cap2_classes/conta.class.php';
 include_once 'cap2_classes/pessoa.class.php';


 # criação de objetos
 $carlos= new Pessoa; // precisa instaciar o objeto já enviando os atributos.
 $carlos->id=30;
 $carlos->nome='Carlos';

 #objeto conta do carlos
 $conta_carlos= new Conta;
 $conta_carlos->agencia=56;
 $conta_carlos->titular='Carlos';




 
 echo "{$carlos->nome} tem codigo {$carlos->id}_ \n";
 echo " A agencia do Carlos é {$conta_carlos->agencia}";








?>