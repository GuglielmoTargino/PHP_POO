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
    
    
     function Insert(Produto $objeto){
         $conn=ConexaoBd();
         //cria instrução SQL
         $sql="INSERT INTO pets (id, nome, tipo, peso) VALUES ($objeto->id,'$objeto->nome', '$objeto->tipo', $objeto->peso)";

         //executa instrucao SQL
         $conn->exec($sql);
         unset($conn);
         }

   
}
   
?>
</body>

</html>
