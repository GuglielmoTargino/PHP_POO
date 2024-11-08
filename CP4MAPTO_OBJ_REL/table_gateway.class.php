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
         $sql="INSERT INTO pets (id, nome, tipo, peso) VALUES ('$id','$nome', '$tipo', '$peso')";
         //instancia objeto PDO.

         //$conn=new PDO('sqlte:produtos.db');
         //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

         //executa instrucao SQL
         $conn->exec($sql);
         unset($conn);
    }   

    function Update($id, $descricao, $estoque, $preco_custo){
      $conn=ConexaoBd();
      //cria instrução SQL
      $sql="UPDATE Produto set descricao='$descricao'".
      "estoque='$estoque', preco_custo='$preco_custo'".
      "WHERE id='$id'";
       //instancia objeto PDO.
       $conn=new PDO('sqlte:produtos.db');
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
       //executa instrucao SQL
       $conn->exec($sql);
       unset($conn);
    } 

    function Delete($id){
      $conn=ConexaoBd();
      //cria instrução SQL
      $sql="DELETE FROM Produto WHERE id='$id'";
       //instancia objeto PDO.
       $conn=new PDO('sqlte:produtos.db');
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
       //executa instrucao SQL
       $conn->exec($sql);
       unset($conn);
    }

    function getObject($id){
      $conn=ConexaoBd();
      //cria instrução SQL
      $sql="SELECT* FROM Produto WHERE id='$id'";
       //instancia objeto PDO.
       $conn=new PDO('sqlte:produtos.db');
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
       //executa instrucao SQL
       $resu=$conn->query($sql);
       $data=$resu->fetch(PDO::FETCH_ASSOC);
       unset($conn);
       return $data;
    }

    function getObjects(){
      $conn=ConexaoBd();
      //cria instrução SQL
      $sql="SELECT* FROM Produt";
       //instancia objeto PDO.
       $conn=new PDO('sqlte:produtos.db');
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
       //executa instrucao SQL
       $resu=$conn->query($sql);
       $data=$resu->fetchAll (PDO::FETCH_ASSOC);
       unset($conn);
       return $data;
    }
}

?>
</body>

</html>
