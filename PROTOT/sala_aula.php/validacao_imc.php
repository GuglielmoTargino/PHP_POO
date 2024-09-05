<!DOCTYPE html>


<?php

$altura=isset($_GET['name_altura']) ? $_GET['name_altura']:0;
$peso=isset($_GET['name_peso']) ? $_GET['name_peso']:0;

$IMC = $peso / (($altura/100)^2);

if($IMC<18.5){
    echo'adulto com baixo peso.';
}elseif($IMC>=18.5 and $IMC<=25){
    echo'adulto com peso adequado.';
}elseif($IMC>=18.5 and $IMC<=25){
    echo 'adulto com sobrepeso.';
}else{
    echo 'adulto com obesidade.';
}

?>
<a href="form_atv1_imc.php">Voltar</a>
</html>