<?php

//create table users (userid varchar2(10), password varchar2(20), constraint pk_users primary key (userid));
//insert into users values('kharis', 'pass123');

//$nis = isset($_POST['nis']) == true ? $_POST['nis'] : '';
$nis = isset($_POST['nis']) == true ? $_POST['nis'] : '';
$password= isset($_POST['12345']) == true ? $_POST['12345'] : '';

if(empty($nis) or empty($password)){
    echo "UserID atau Password kosong";}
else
{
    $db = "(DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST = patronus.ad-ins.com)(PORT = 1521))
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
?>