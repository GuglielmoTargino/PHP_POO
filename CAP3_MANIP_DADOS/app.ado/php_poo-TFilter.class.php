<?php
/**
 * Revisão do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data:22jul24
 * Versão:v2
 * pgn 173
 */

// classe criada para verificação de filtros de seleção de dados

class TFilter extends TExpression{

    private $variavel;//variave a ser inserida
    private $operador;// operador a ser utilizado
    private $valor;// valor a ser aplicado.


    public function __construct($variavel,$operador,$valor){

        $this->variavel=$variavel;
        $this->operador=$operador;
        //chama a função transforma o valor antes de atribuir
        $this->valor=$this->Transformar($valor);
    }

    private function Transformar($valor){
        //caso seja uma array
        if(is_array($valor)){
            //varre valores
            foreach($valor as $x){                
                if(is_integer($x)){
                    //se inteiro
                    $foo[]=$x;
                }
                elseif(is_string($x)){
                    //se string
                    $foo[]="'$x'";
                }
            }

            //converte  os elementos da array em string 
            //separada por virgula.
            $result='('.implode(',',$foo).')';
        }

        //caso seja string
        elseif(is_string($valor)){
            //insere aspas
            $result="'$valor'";
        }

        //caso nulo
        elseif(is_null($valor)){
            $result='NULL';

        }

        //caso booleano true/false
        elseif(is_bool($valor)){
            $result=$valor?'TRUE':'FALSE';
        }
        else{
            $result=$valor;
        }

    //se nada for achado retorna valor
    return $result;

    }

    public function Dump(){
        //concatena a expressão
        return "{$this->variavel} {$this->operador} {$this->valor}";
    }

    
    
}



?>