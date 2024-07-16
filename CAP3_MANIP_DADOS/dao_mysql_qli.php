<?php
/*
Exercício do livro Criar conexao com o bd mysql

Aluno: Guglielmo TARGINO.
Data: 16fev24
versão: v0.

*/

$local_server= 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'mysql';

//Variáveis para uso de query

$ref_usuario=3025;


// Create connection mysql
$conn =new  mysqli($local_server,$user_name,$password, $db_name);

// executa as queries
/*
$resultado=$conn->query("INSERT INTO login (senha,usuario) values(5856,'GIGA')");
*/

/*
$resultado=$conn->query("UPDATE `login` SET `senha`='3025' WHERE usuario='andrea'");
*/



/*
$resultado=$conn->query("DELETE FROM `login` WHERE usuario='cic'");
*/


$resultado=$conn->query("SELECT* FROM login WHERE senha='$ref_usuario'");


//Exibe resultado na tela

while($qry=mysqli_fetch_assoc($resultado)){
    echo "usuario BD".$qry['usuario']."senha usuario é".$qry['senha']."<br>";
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