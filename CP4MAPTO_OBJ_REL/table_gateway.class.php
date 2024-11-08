<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="../STYLE/estilo_avulso.css" media="screen" />
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
include_once 'DAO_CP4/dao_cp4.php';

   class ProdutoGateway{     

      function Insert($id, $nome, $tipo, $peso){
         $conn=ConexaoBd();
         //cria instrução SQL
         $sql="INSERT INTO pets (id, nome, tipo, peso) VALUES ($id,'$nome', '$tipo', $peso)";

         //executa instrucao SQL
         $conn->exec($sql);
         unset($conn);
    }

    function Update($id, $nome, $tipo, $peso){
      $conn=ConexaoBd();
      //cria instrução SQL
      $sql="UPDATE pets set nome='$nome', tipo='$tipo', peso='$peso' where id=$id";
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
       //print_r($data). "<br>";

       foreach ($data as $row) {
         echo "<div>";
         foreach ($row as $key => $value) {
             echo "<strong>$key:</strong> $value<br>";
         }
         echo "</div><hr>"; // Linha horizontal entre cada array
     }


       //foreach ($data as $row) {
         //print_r($row);
         //echo "<br>"; // Pula uma linha entre cada array para maior clareza
     //}



    }
    
}
   
?>
</body>

</html>
