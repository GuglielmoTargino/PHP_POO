<?php
/**
 * Revisão do exercíci do livro php-poo
 * Aluno:Guglielmo targino
 * Data: 08jul24
 * Versão: v2.
 * pgn 119.
 */
class CestaDeProduto{

    private $itens;

    //método adicionar item à cesta
    function adicionarItem(Produto $item){
        $this->itens[]=$item;
    }

    //exibe a lista.
    function exibirLista(){
        foreach($this->itens as $item){
            $item->Imprime();
        }

    }

    //Calcula o valor do produto.
   
    function calcularTotal($total){
        foreach ($this->itens as $item){
            $total+=$item->preco;
        }
        return $total;
    }


}


?>