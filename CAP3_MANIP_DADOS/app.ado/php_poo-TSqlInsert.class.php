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
    
    public function setRowData($column,$value){
        if(is_string($value)){
            $value=addslashes($value);
            $this->columnValues[$column]="'$value'";

        }else if(is_bool($value)){
            $this->columnValues[$column]=$value?'TRUE':'FALSE';

        }else if(isset($value)){
            $this->columnValues[$column]=$value;

        }else{
            $this->columnValues[$column]="NULL";
        }

    }

    // metodo criteria
    public function setCriteria($criteria){
        //avisa erro
        throw new Exception("CAnnot call setCriteria".__CLASS__);
    }

    public function getInstruction(){
        $this->sql="INSERT INTO {$this->entity}(";
        $columns=implode(',', array_keys($this->columnValues));
        $values=implode(',', array_values($this->columnValues));
        $this->sql.=$columns.')';
        $this->sql.="values({$values})";

        return $this->sql;

    }

}


?>