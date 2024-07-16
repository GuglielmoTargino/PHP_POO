
<DOCTYPE html>
   <html lang="PT-BR">
   <meta charset="UTF-8">
<?php
/**
 * Revisão de exercício do livro PHP-POO
 * Aluno: Guglielmo Targino
 * Data: 04jul24
 * Versão:v0
 * pgn 102
 */
 include_once 'cap2_classes/pessoa.class.php';
 include_once 'cap2_classes/conta.class.php';
 include_once 'cap2_classes/contacorrente.class.php';
 include_once 'cap2_classes/contapoupanca.class.php';

 $dara= new Pessoa(10,"Dara",1.85,25,"10abr79","tecnolog",5000);

 $dara_conta[1]= new ContaCorrente(889,"cc.5623","04jul24",$dara,5000,1000,5323,"n");
 $dara_conta[2]= new ContaCorrente(200,"cc.5632","04jul24",$dara,55,88,4242,"n");
 
   foreach($dara_conta as $xx => $conta){
      echo "Manipulação de $xx {$conta->titular->altura} <br>";
   }
?>
</DOCTYPE>