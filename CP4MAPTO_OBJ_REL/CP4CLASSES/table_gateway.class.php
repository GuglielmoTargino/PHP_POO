<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="../STYLE/estilo_avulso.css" media="screen" />
</head>

<body>
    <div id="top">
    <h1>CAPÍTULO 4</h1>
        <h1>PHP-Programando com Orientação a Objetos</h1>
        <h2>| Mapeamento Objeto Relacional: 4.4.1 Table Data Gateway</h2>
<?php

  /**
   * Exercício do livro PHP-POO
   * Aluno: Guglielmo Targino
   * Data: 14ago24
   * Versão: v0
   * pgn 247
   */

   class ProdutoGateway{   

    function Insert($id, $descricao, $estoque, $preco_custo){
      //cria instrução SQL
      $sql="INSERT INTO Produto (id, descricao, estoque, preco_custo)"."VALUES ($id,$descricao, $estoque, $preco_custo)";
       //instancia objeto PDO.
       $conn=new PDO('sqlte:produtos.db');
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
       //executa instrucao SQL
       $conn->exec($sql);
       unset($conn);
    }   

    function Update($id, $descricao, $estoque, $preco_custo){
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

   //Instancia objeto Gateway e testa inserte
   $gateway=new ProdutoGateway;
   $gateway->Insert(1,'vinho',10,10); 

?>

</div>
</body>

</html>
