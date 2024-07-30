<?php
/**
 * Exercício do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data: 25jul24
 * Versão:v0
 * pgn 208
 */

 final class TTransaction{
    private static $conN;

    //metodo construtor como privado para impedir novas instancias
    private function __construct()
    {}

    public static function open($dbase){
        //abre uma conexão na propriedade static
        if(empty(self::$conN)){
            self::$conN=TConnection::open($dbase);
                //inicia transação
                self::$conN->beginTransaction();

        }
    }

    //retorna a conexão ativa
    public static function get()
    {
        return self::$conN;
    }
    //desfaz todas as conexões
    public static function rollback(){
        if(self::$conN){
            self::$conN->rollback();
            self::$conN=NULL;
        }
    }

        //aplica todas as operações ultilizadas e fecha a transação.
    public static function close(){

        if(self::$conN){
            self::$conN->commit();
            self::$conN=NULL;
        }

    }

 }


?>