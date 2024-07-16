<?php

 function abrirArquivo($file=null){

    if(!$file){
        throw new ParameterException('Arquivo sem parametro');
    }

    if(!file_exists($file)){
        throw new FileNotFoundException('Arquivo não eiste');
    }

    if(!$retorno=@file_get_contents($file)){

        throw new FilePermissionException('Arquivo não abre');

    }
    return $retorno;
}


// declaração das classes filhas da classe primitiva Exception

class ParameterException extends Exception{}
class FileNotFoundException extends Exception{}
class FilePermissionException extends Exception{}

//rotina de tratamento das exceções

try{
    $arquivo=abrirArquivo('rascunho.txt');
    echo $arquivo;

}

catch( ParameterException $excecao){
    //não faz nada
}

catch(FileNotFoundException $excecao){
    var_dump($excecao->getTrace());
    echo "finalizando a aplicação";
    die;
}

catch(FilePermissionException $excecao){
    echo $excecao->getFile().':'.$excecao->getLine().'#'.$excecao->getMessage();
}

?>