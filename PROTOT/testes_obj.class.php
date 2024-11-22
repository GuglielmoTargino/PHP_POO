<?php

class Pai{
   private $nome;
   private $idade;

    function __construct()    {
        $this->nome="Guga";
        $this->idade=48;
    
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

    function __construct()    {
        
        parent:: __construct();
        $this->sobre_nome="targino";

    }

    function Mostrar(){

        print($this->getAtrib());
        print($this->sobre_nome);
        //return "$this->nome $this->idade"; Assim em modo protected
        }


}



$filho= new Filho('Guga','Targino',45);
echo"<br>";
echo $filho->Mostrar();





?>