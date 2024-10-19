
<!DOCTYPE html>
<?php
/*
Exercício do livro Criar conexao com o bd mysql
Aluno: Guglielmo TARGINO.
Data: 19jul24
versão: v2
*/

//Variáveis para uso de query
$local_server= 'localhost:3306';
$user_name = 'pmaght';
$password = '4004';
$db_name = 'test';

// Create connection mysql
$conn =new  mysqli($local_server,$user_name,$password, $db_name);

// executa as queries
//$resultado=$conn->query("INSERT INTO login (senha,usuario) values(5856,'GIGA')");


//$resultado=$conn->query("UPDATE `login` SET `senha`='3025' WHERE usuario='andrea'");

//$resultado=$conn->query("SELECT* FROM login WHERE senha='$ref_usuario'");
//$resultado=$conn->query("DELETE FROM `login` WHERE usuario='cic'");

$resultado=$conn->query("SELECT* FROM produto");

//Exibe resultado na tela
while($qry=mysqli_fetch_assoc($resultado)){
    echo "usuario BD".$qry['id_prod']."senha usuario é".$qry['tipo']."<br>";
}

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