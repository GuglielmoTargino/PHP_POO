<?php
/**
 * Exercício do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data: 29jul24
 * Versão: v0
 * pgn 213.
 */

abstract class TLogger{
    protected $filenamE; //local do arquivo de log.
    //instancia um logger.
    public function __construct($filenam)
    {
        $this->filenamE=$filenam;
        //reseta o conteudo do arquivo
        file_put_contents($filenam,'');

    }
    // define o metodo write como obrigatorio
    abstract function write($message);
}


?>