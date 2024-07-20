<!DOCTYPE html>
<?php

/*Revisão de exercicios do livro PHP-POO
Aluno: Guglielmo Targino.
Data:19jul24;
Vrsã<o:v2 
pgn 132 
 */

interface IAluno{
    private $nome;
    function setNome($x);
    function getNome();
    function setResponsavel(Pessoa $xb);
}

class Aluno implements IAluno{

    #atribui nome ao aluno
    function setNome($x){
        $this->nome=$x;
    }

    function getNome(){
        return $this->nome;
    }

    function setResponsavel($xb){

    }

}

#criar um objeto.
$guga=new Aluno;

?>

</html>