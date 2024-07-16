<?php
//interpreta o doc xml
$xml=simplexml_load_file('classes/paises.xml');

//exibe as informações do doc xml 
///var_dump($xml);

//echo 'Pais é:'.$xml->nome;

foreach($xml->children() as $elemento=>$valor){

    echo "$elemento->$valor";
}


?>