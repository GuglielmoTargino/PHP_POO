<?php
/**
 * Revisão do exercício do livro PHP-POO
 * Aluno: Guglielmo Targino
 * Data:04jul24
 * Versão: v2
 * pgn 100
 */

class ContaPoupanca extends Conta{
    var $aniversario;

    function __construct($agencia,$codigo ,$datacriacao ,$titular ,$senha ,$saldo
     ,$cancelada,$aniversario ){
        parent::__construct($agencia,$codigo,$datacriacao,$titular,$senha,$saldo,$cancelada);

        $this->aniversario=$aniversario;
    }

    function Retirar($quantia){

        if($this->saldo>=$quantia){

            parent::Retirar($quantia);

        }
        else{
            echo "retirada não permitida";
            return false;
        }
    }
    function Transferir($conta,$valor){
        if($this->Retirar($valor)){
            $conta->Depositar($valor);
        }

    }
}
?>