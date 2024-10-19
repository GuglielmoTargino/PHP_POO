<!DOCTYPE html>
<meta charset="utf-8">
<meta lang="pt-br">

<?php

/**
 * Exercicio do livro PHP-POO
 * Aluno: Guglielmo Targino
 * Data: 20jul24
 * Versão: v0
 * pgn 158
 */

$local_server= 'localhost:3306';
$user_name = 'pmaght';
$password = '4004';
$db_name = 'test';

// Create connection mysql
$conn =new  mysqli($local_server,$user_name,$password, $db_name);

// execução de queries
$resultado=$conn->query("SELECT nome_prod FROM produto where id_prod=2");
while($qry=mysqli_fetch_assoc($resultado)){
    echo "Código do produto é:".$qry['nome_prod'];
    //echo "Código do produto é:".$qry['id_prod']." Tipo do produto é:".$qry['tipo']."<br>";
}


/*
$resultado=$conn->query("INSERT INTO login (senha,usuario) values(5856,'GIGA')");
*/

/*
$resultado=$conn->query("UPDATE `login` SET `senha`='3025' WHERE usuario='andrea'");
*/

/*
$resultado=$conn->query("SELECT* FROM login WHERE senha='$ref_usuario'");
$resultado=$conn->query("DELETE FROM `login` WHERE usuario='cic'");
*/

//Exibe resultado na tela


/*
//Testa operação se foi bem sucedida
if($resultado){

    echo "Operação concluida";
}else{
    echo "Falha Operação";
}
*/

/*
// Check connection
if ($conn->connect_errno) {

    echo "Falha conexao BD";
}
echo "BD Connected successfully";
*/
?>


</html>