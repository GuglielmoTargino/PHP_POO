<?php
/**
 * Revisão exercício do livro PHP-POO
 * Aluno: Guglielmo Targino
 * Data:03jul24
 * Versão:v2
 * pgn 88
 */

class Produto{
public $codigo;
public $descricao;
public $preco;
public $qtdade;

function ImprimeEtiqueta(){

    print('CODIGO:'.$this->codigo."\n");
    print('DESCRICAO:'.$this->descricao."\n");   
}

}   

?>