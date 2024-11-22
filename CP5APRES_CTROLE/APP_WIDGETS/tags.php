<?php

/**
 * Exercício livro php_poo
 * Aluno: Guglielmo Targino
 * Versão: v1
 * pg 317
 */

include_once 't_element.class.php';

$html=new TElement('html');

$head=new TElement('head');
$html->add($head);
$title= new TElement('titulo');
$title->add('Titulo Pagina');
$head->add($title);



$body= new TElement('body');
$body->bgcolor='#ffffdd';
$html->add($body);

$center=new TElement('$center');
$body->add($center);

$p=new TElement('p');
//$p->align=='center';
$p->add('Rua da concordância');
$center->add($p);

$html->show();



?>