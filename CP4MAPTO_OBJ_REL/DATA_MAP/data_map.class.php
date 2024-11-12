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
   * pg261-265
   */
include_once '../DAO_CP4/dao_cp4.php';


final class Produto2{ 
   private $descricao;
   private $estoque;
   private $preco_custo;


   public function __construct($descricao,$estoque,$preco_custo)
   {
      $this->descricao=$descricao;
      $this->estoque=$$estoque;
      $this->preco_custo=$preco_custo;      
   }

   public function getDescricao()
   {     
         $this->descricao;
   }
}

final class Venda{
   private $id;
   private $Itens;
}
final class Mapper{


}



//==============================================


   function Insert(){
         $conn=ConexaoBd();
         //cria instrução SQL
         $sql="INSERT INTO pets (id, nome, tipo, peso)".
         "VALUES ('{$this->id}','{$this->nome}','{$this->tipo}','{$this->peso}')";

         //executa instrucao SQL
         $conn->exec($sql);
         unset($conn);
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
         /*  foreach ($data as $row) {
         echo "<div>";
         foreach ($row as $key => $value) {
             echo "<strong>$key:</strong> $value<br>";
         }
         echo "</div><hr>"; // Linha horizontal entre cada array
         }  
         */  

    }
    
   
?>
</body>

</html>
