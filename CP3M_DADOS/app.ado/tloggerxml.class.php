<?php

/**
 * Exrcício do livro PHP-POO_
 * Aluno: Guglielmo Targino_
 * Data:30jul24_
 * Versão:v0_
 * pgn 214_
 *  
 */

 class TLoggerXml extends TLogger{
    //escreve mensagem no arquivo
    public function write($message)
    {
        $time=date("Y-m-d H:i:s");
        //monta a string
        $text="<log>\n";
        $text.=" <time>$time</time>\n";
        $text.="<message>$message</message>\n";
        $text.="</log>\n";
        //adiciona ao final do arquivo
        $handler=fopen($this->filenamE,'a');
        fwrite($handler,$text);
        fclose($handler);

    }
 }
?>