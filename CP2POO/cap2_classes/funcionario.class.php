<?php
/**
 * Revisão de exercício do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data:04jul24
 * Versão: v2
 * pgn 109
 */

class Funcionario{
    private $codigo;
    public $nome;
    private $nascimento;
    private $salario;

    function SetSalario($sal){

        if (is_numeric($sal) and ($sal>=0)){
            $this->salario=$sal;
        }    
    }
    function GetSalario(){
    return $this->salario;
    }

    function SetNome($x){
        $this->nome=$x;
    }
}

?>