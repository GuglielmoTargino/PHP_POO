<?php

include_once 'APP_WIDGETS/t_element.class.php';

$html=new TElement('html');

$head=new TElement('head');
$html->add($head);

$title= new TElement('titulo');
$title->add('Titulo Pagina');

$body= new TElement($body);
$body->bgcolor='#ffffdd';

$html->add($body);

$center=new TElement('$center');
$body->add($center);

$p=new TElement('p');
$p->align=='center';
$p->add('Rua da concordância');
$center->add($p);



?>