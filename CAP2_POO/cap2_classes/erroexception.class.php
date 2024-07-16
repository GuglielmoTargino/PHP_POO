<!DOCTYPE html>
<meta charset="utf-8">
<meta lang="pt-br">

<?php

function Abrir($file=null){
    if(!$file){
        throw new Exception('Arquivo OK');
    }
    if(!file_exists($file)){
        throw new Exception('arquivo não existe');
    }
    if (!$retorno=@file_get_contents($file)){
        throw new Exception ('impossible open file');
    }
        return $retorno;

}

try{
    $arquivo=Abrir('C:\Users\Guglielmo H T\Desktop\teste.txt');
    echo $arquivo;
}

catch (Exception $excecao){
    echo $excecao->getMessage();
}

?>



</doctype>