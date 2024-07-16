<?php

/**
 * Revisão do exercício do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data:28jun24.
 * Versão:v1
 * pag 44
 */

function area_($l,$h){
$area=$l*$h;
return $area;
}

$espaco=area_(20,40);

echo "Area igual a $espaco";


function velo_($x,$y){
    $velo=$x/$y;
    return $velo;
}

if(($vel=velo_($espaco,2))>100){
    echo "Alta velocidade";
}else{
echo "Baixa velocidade";
}
?>