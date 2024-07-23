<!DOCTYPE html>


<?php
/**
 * programa para inserção de dados no bd 
 * Aluno: Guglielmo Targino.
 * Data: 23jul24.
 * Versão: v2.
 * pgn 188.
 */

 
/* include_once "app.ado/php_poo-TSqlInsert.php";
 include_once 'app.ado/php_poo-TSqlInstruction.php'; */

 function __spl_autoload_register($TSqlInsert){

    if(file_exists("app.ado/{}.php")){
        include_once "app.ado/{$classe}.class.php";
    }

}

    //setlocale(LC_NUMERIC, "english");

    //criação da instrução  insert
    $sql=new TSqlInsert;
    $sql->getEntity('aluno');

    $sql->setRowData('id', 3);
    $sql->setRowData('nome', 'pedro');
    $sql->setRowData('fone', '5698');
    $sql->setRowData('nasc', '4556');
    $sql->setRowData('sexo', 'm');
    $sql->setRowData('seria', '4');
    $sql->setRowData('mensal', 56.56);

    echo $sql->getInstruction();
    echo"<br>\n";


 
?>

</html>