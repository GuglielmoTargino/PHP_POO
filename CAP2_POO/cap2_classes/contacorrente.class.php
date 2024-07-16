<?php

/**
 * Revisão do exercício do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data: 04jul24
 * Versão: v2
 * pgn 100.
 */

class ContaCorrente extends Conta{

    var $limite;

    function __construct($agencia,$codigo,$datacriacao ,$titular ,$senha ,$saldo ,$cancelada,$limite){
        parent::__construct($agencia,$codigo,$datacriacao,$titular,$senha,$saldo,$cancelada);

        $this->limite=$limite;
    }

    function Retirar($quantia){

        $cpmf=0.05;
        if(($this->saldo+$this->limite) >=$quantia){

            parent:: Retirar($quantia);
            parent:: Retirar($quantia*$cpmf);
        } else{

            echo" retirada na permitida";
            return false;
        }

        return true;

    }
    function Transferir($conta, $valor){
        
    }
}
?>