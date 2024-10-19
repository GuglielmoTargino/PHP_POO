<?php

/**
 * Revisão do exercício do livro PHP-POO
 * Aluno: Guglielmo Targino
 * Data: 03jul24
 * Versão: v2
 * pgn 92
 * 
 */


    abstract class Conta{
        public $agencia;
        public $codigo;
        public $datacriacao;
        public $titular;
        public $senha;
        public $saldo;
        public $cancelada;

    
    function __construct($agencia,$codigo,$datacriacao,$titular,$senha,$saldo,$cancelada){
        $this->agencia=$agencia;
        $this->codigo=$codigo;
        $this->datacriacao=$datacriacao;
        $this->titular=$titular;
        $this->senha=$senha;
        $this->saldo=$saldo;
        $this->cancelada=$cancelada;

    }
    
    
    // Funções sempre são escritas com verbos.
    function Retirar($quantia){
        if($quantia>0){
            $this->saldo-=$quantia;
        }               
    }   

    function Depositar($quantia){
        if($quantia>0){
            $this->saldo+=$quantia;
        }
    }

        function Obtersaldo(){
            return $this->saldo;
        }

    abstract function Transferir($conta,$valor);
    
}
?>