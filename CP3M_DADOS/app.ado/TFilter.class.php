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


    //construtor
    public function __construct($variavel,$operador,$valor){

        $this->variavel=$variavel;
        $this->operador=$operador;
        //chama a função transforma o valor antes de atribuir
        $this->valor=$this->Transformar($valor);
    }
    //método privado só pode ser convocado de dentro dessa classe.
    private function Transformar($valor){
        //caso seja uma array
        if(is_array($valor)){
            //varredura de valores
            foreach($valor as $x){
                //se for um inteiro
                if(is_integer($x)){                    
                    $foo[]=$x;
                }
                //se um elemento da array for uma string
                elseif(is_string($x)){                    
                    $foo[]="'$x'";
                }
            }

            //converte  os elementos da array em string 
            //separada por virgula.
            $result='('.implode('_',$foo).')';
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

