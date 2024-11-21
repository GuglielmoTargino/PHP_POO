<?php

class Pai{
    private $nome;
    private $idade;

    function __construct($a,$b)    {
        $this->nome=$a;
        $this->idade=$b;
    
    }

    function pegaAttr(){
        print($this->nome);
        echo"<br>";
  
    }
    function getAtrib(){
        return "$this->nome $this->idade";
    }


}

class Filho extends Pai{
    private $sobre_nome;

    function __construct($a,$b,$f)    {
        
        parent:: __construct($a,$b);
        $this->sobre_nome=$f;

    }

    function Mostrar(){

        print($this->getAtrib());
        print($this->sobre_nome);
        

    }


}



$filho= new Filho('Guga','Targino',45);
echo"<br>";
echo $filho->Mostrar();






?>