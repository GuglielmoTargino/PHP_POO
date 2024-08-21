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
   * pgn 258
   */

   class ProdutoGateway{   

    function Insert($id, $descricao, $estoque, $preco_custo){
      //cria instrução SQL
      $sql="INSERT INTO Produto (id, descricao, estoque, preco_custo)"."VALUES ($id,$descricao, $estoque, $preco_custo)";
       //instancia obejeto PDO.
       $conn=new PDO('sqlte:produtos.db');
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
       //executa instrucao SQL
       $conn->exec($sql);
       unset($conn);
    }   

}

   //Instancia objeto Gateway

   $gateway=new ProdutoGateway;

   $gateway->Insert(1,'vinho',10,10);

  


?>

</div>
</body>

</html>
