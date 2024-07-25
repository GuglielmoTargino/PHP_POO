<?php

/**
 * Exercícios do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data:24jul24
 * Versão: v0.
 * pgn202
 */

 final class TConnection{
    private function __construct(){
    }
    //método open
    public static function _open($xx){
        //teste se existe arquivo de conexão.
        if(file_exists("APP.CONFIG/{$xx}.ini")){
            //lê arquivo ini
            $db=parse_ini_file("APP.CONFIG/{$xx}.ini");
        }else{
            //se falta dispara erro.
            throw new Exception("Arquivo não existe");
        }

        //lê as informações contidas no arquivo
        $user=$db['user'];
        $pass=$db['pass'];
        $name=$db['name'];
        $host=$db['host'];
        $type=$db['type'];

        //verifica qual drive do banco de dados a ser utilizado
        switch($type){
            case 'pgsq':
                echo "Banco de dados Postgre!";
                break;
            case 'mysql':
                $conn= new PDO("mysql:host={$host};port=3306;dbname={$name}", $user, $pass);
                break;
        }
        //define o disparo de execessões
       
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
 }
?>