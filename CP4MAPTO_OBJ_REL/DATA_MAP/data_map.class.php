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
   private $itens;

   function __construct($id){
      $this->id=$id;
   }

   function getId(){
      return $this->id;
   }

   public function addItem($qtd, Produto2 $produto2){
      $this->itens[]=array($qtd, $produto2);

   }

   public function getItens(){
      return $this->itens;
   }
}
final class Mapper{

   function Insert(Venda $venda){
      $id=$venda->getId();
      $date=date("y-m-d");
      // insere a venda no banco de dados 
      $sql="INSERT INTO venda(id,data) value('id','$date')";
      echo $sql."<br>\n";

      //percorre os itens vendidos
      foreach($venda->getItens() as $item){
         $qtd=$item[0];
         $produto2=$item[1];
         $descricao=$produto2->getDescricao();

         // insere os itens da venda no banco de dados 
         $sql="INSERT INTO venda(id,data) value('id','$date')";
         echo $sql."<br>\n";

      }
   }
}

//instancia um objeto da classe Venda
$venda=new Venda(1000);

//adiciona um elemento 

$venda->addItem(3,new Produto2('vinho',10,20));
   
?>
</body>

</html>
