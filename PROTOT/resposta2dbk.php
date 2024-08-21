<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="../STYLE/estilo_avulso2.css" media="screen" />
</head>

<body>
    <div id="top">
    <h1>FORMULÁRIO</h1>
        <h1>PHP-Programando com Orientação a Objetos</h1>
        <h2>| Operação com números</h2>
<?php

/**
 * Exercicio de aula prog.web
 * Aluno: Guglielmo Targino
 * Data:14ago24,
 * Versão: v0,
 */
     $n1=isset($_POST['name_number1']) ? $_POST['name_number1']:0;
     $n2=isset($_POST['name_number2'])?$_POST['name_number2']:0;

     if($n1 and $n2){

        if ($_POST['name_submit'] == 'Somar') {
            // Código para salvar os dados
            echo "{$n1} + {$n2} é igual a:".$n1+$n2;
        } elseif ($_POST['name_submit'] == 'Subtrair') {
            // Código para enviar os dados
            echo "{$n1} - {$n2} é igual a:".$n1-$n2;
        } elseif ($_POST['name_submit'] == 'Multiplicar') {
            // Código para excluir os dados
            echo"{$n1} X {$n2} é igual a:".$n1*$n2;    

        }
    }else{
        echo 'Informe todos os valores por favor';
    }

  
?>
</br>
<a href="formulario_modelo.php">Voltar</a>

</div>
</body>

</html>
