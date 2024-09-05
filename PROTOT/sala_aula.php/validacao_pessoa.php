<!DOCTYPE html>


<?php

$n1=isset($_POST['name_nome']) ? $_POST['name_nome']:0;
$n2=isset($_POST['name_idade']) ? $_POST['name_idade']:0;
$n3=isset($_POST['name_sexo']) ? $_POST['name_sexo']:0;

if ($n3=='fem'){
    if($n2>19){
        echo "{$n1},  vc pode se candidatar a vaga </br>";
    } else{
        echo "{$n1}, vc nao pode se candidatar a vaga</br>";
    }

}else{
    if($n2>17){
        echo "{$n1} vc pode se candidatar a vaga </br>";

    }else{
        echo "{$n1} vc nao pode se candidatar a vaga </br>";
    }
}


?>
<a href="form_pessoa.php">Voltar</a>
</html>