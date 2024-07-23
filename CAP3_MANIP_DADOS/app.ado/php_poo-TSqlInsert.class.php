<?PHP
/**
 * Exercício do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data: 23jul24.
 * Versão: v2.
 * pgn 186
 */

//classe para inseri dados no banco de dados
//final class TSqlInsert extends TSqlInstruction{
 final class TSqlInsert extends TSqlInstruction{
    public $columnvalueS;
    public $entity;
    
    public function setRowData($column,$value){
        if(is_string($value)){
            $value=addslashes($value);
            $this->columnvalueS[$column]="'$value'";

        }else if(is_bool($value)){
            $this->columnvalueS[$column]=$value?'TRUE':'FALSE';

        }else if(isset($value)){
            $this->columnvalueS[$column]=$value;

        }else{
            $this->columnvalueS[$column]="NULL";
        }

    }

    // metodo criteria
    public function setCriteria($criteria){
        //avisa erro
        throw new Exception("CAnnot call setCriteria".__CLASS__);
    }

    public function getInstruction(){
        $this->sql="INSERT INTO {$this->entity}(";
        $columns=implode(',', array_keys($this->columnvalueS));
        $values=implode(',', array_values($this->columnvalueS));
        $this->sql.=$columns.')';
        $this->sql.="values({$values})";

        return $this->sql;

    }

}


?>