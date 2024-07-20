<?php

/**
 * 
 * Revisão do exercício do livrpo PHP-POO
 * Aluno: Guglielmo Targino
 * Data: 03jul24
 * Versão:v2
 * pgn 91
 */

class Pessoa{

    public $id;
    public $nome;
    public $altura;
    public $idade;
    public $nasc;
    public $escolaridade;
    public $salario;

    
    function __construct($id,$nome,$altura,$idade,$nasc,$escolaridade,$salario){
        $this->id=$id;
        $this->nome=$nome;
        $this->altura=$altura;
        $this->idade=$idade;
        $this->nasc=$nasc;
        $this->escolaridade=$escolaridade;
        $this->salario=$salario;

    }
    
    function Crescer_($centimetro){

        if($centimetro>0){
            $this -> altura+=$centimetro;
        }
    }

    function Formar_($titulacao){
        $this->escolaridade=$titulacao;

    }

    function Envelhecer_($anos){
        if($anos>0){
            $this->idade+=$anos;
        }
    }  

}

?>