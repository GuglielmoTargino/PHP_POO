

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CONNECT BD ORACLE</title>
<link rel="stylesheet" type="text/css" href="estilo/estilo_avulso.css" media="screen" />
</head>

<body>
    <div id="top">
    <h1>CONEXÃO BD ORACLE-XE</h1>
        <h1>PHP-Programando com Orientação a Objetos</h1>
        <h2>| Conexão utilizando a classe OCI</h2>
<?php

//create table users (userid varchar2(10), password varchar2(20), constraint pk_users primary key (userid));
//insert into users values('kharis', 'pass123');


$conn = '127.0.0.1/1521';
$user = 'ght';
$senha = 4004;

$conn = oci_connect($user, $senha, $conn);

if (!$conn) {
    $erro = oci_error();
    echo "Falha na conexão: " . $erro['message'];
} else {
    echo "Conexão bem-sucedida!";
}

oci_close($conn);



/*
$nis ='ght'; //  isset($_POST['ght']) == true ? $_POST['ght'] : '';
$password=4004; // isset($_POST['4004']) == true ? $_POST['4004'] : '';

if(empty($nis) or empty($password)){
    echo "UserID atau Password kosong";}
else
{
    $db = "(DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST ='127.0.0.1')(PORT = 1521))
        (CONNECT_DATA =
          (SERVER = DEDICATED)
          (SERVICE_NAME = XE)
        )
      )" ;
    $connect = oci_connect("HR", "hr", "XE");
    $query = "SELECT * from users WHERE userid='".$nis."' and password='".$password."'";
    $result = oci_parse($connect, $query);
    oci_execute($result);
    $tmpcount = oci_fetch($result);
    if ($tmpcount==1) {
        echo "Login Success";}
    else
    {
        echo "Login Failed";
    }
}
*/
?>

</div>
</body>

</html>
