<?php

#interface aluno

interface IAluno{
    function setNOME($x);
    function getNOME();
    function setRESPONSAVEL($xb);
}

class Aluno implements IAluno{

    #atribui nome ao aluno
    function setNOME($x){
        $this->nome=$x;
    }

    function getNOME(){
        return $this->$x;
    }

    function setRESPONSAVEL($xb){

    }

}


#criar um objeto.


$guga=new Aluno;





?>