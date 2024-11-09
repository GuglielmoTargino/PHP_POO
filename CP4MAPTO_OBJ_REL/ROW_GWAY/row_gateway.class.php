<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
</head>

<body>
<?php

  /**
   * Exercício do livro PHP-POO
   * Aluno: Guglielmo Targino
   * Data: 14ago24
   * Versão: v0
   * pgn 247
   */
include_once '../DAO_CP4/dao_cp4.php';


class ProdutoGateway2{ 
   private $data;

   function __get($prop)

      {
         return $this->data[$prop];
      }

      function __set($prop, $value)
      {
         $this->data[$prop]=$value;
      }

      function Insert(){
         $conn=ConexaoBd();
         //cria instrução SQL
         $sql="INSERT INTO pets (id, nome, tipo, peso)".
         "VALUES ('{$this->id}','{$this->nome}','{$this->tipo}','{$this->peso}')";

         //executa instrucao SQL
         $conn->exec($sql);
         unset($conn);
    }



    function Update(){
      $conn=ConexaoBd();
      //cria instrução SQL
      $sql="UPDATE pets set nome='{$this->nome}', tipo='{$this->tipo}', peso='{$this->peso}' where id={$this->id}";
       //executa instrucao SQL
       $conn->exec($sql);
       unset($conn);
    } 

    function Delete($id){
      $conn=ConexaoBd();
      //cria instrução SQL
      $sql="DELETE FROM pets WHERE id=$id";

       //executa instrucao SQL
       $conn->exec($sql);
       unset($conn);
    }

    function getObject($id){
      $conn=ConexaoBd();
      //cria instrução SQL
      $sql="SELECT* FROM pets WHERE tipo='$id'";

       //executa instrucao SQL
       $resu=$conn->query($sql);
       $data=$resu->fetch(PDO::FETCH_ASSOC);
       unset($conn);
       echo "Nome: " . $data['tipo'] . "<br>";
       //print_r($data). "<br>";
       return $data;
    }

    function getObjects(){
      $conn=ConexaoBd();
      //cria instrução SQL
      $sql="SELECT* FROM pets";

       //executa instrucao SQL
       $resu=$conn->query($sql);
       $data=$resu->fetchAll (PDO::FETCH_ASSOC);
       foreach ($data as $row) {
         print_r($row);
         echo "<br>"; // Pula uma linha entre cada array para maior clareza
         }
       

      
      /*

       
       

          foreach ($data as $row) {
         echo "<div>";
         foreach ($row as $key => $value) {
             echo "<strong>$key:</strong> $value<br>";
         }
         echo "</div><hr>"; // Linha horizontal entre cada array
     }

     */

    }
    
}
   
?>
</body>

</html>
