<!DOCTYPE html>

<?php
/*
Exercício prórpio para conexão BD MYSQL
utilizando o a função PDO.
Aluno: Guglielmo Targino.
Data: 27ago24
Versão: v2.
*/

$n1=isset($_POST['name_number1'])?$_POST['name_number1']:0; //nome pet
$n2=isset($_POST['name_number2'])?$_POST['name_number2']:0;//tipo pet
$n3=isset($_POST['name_number3'])?$_POST['name_number3']:0;//id pet
if($n1 and $n2){
    $dsn = 'mysql:dbname=test;host=localhost';
    $user = 'ght';
    $password = '4004';
    try{    
        $dbh = new PDO($dsn, $user, $password); //instacia classe para conexao com o BD.
        if ($_POST['name_submit'] == 'Alterar') {
            // Código para alterar dados
            $dbh->exec("UPDATE `pets` SET nome='$n1' , tipo='$n2' WHERE id='$n3'");
           
    
        } else if ($_POST['name_submit'] == 'Buscar'){            
            $sql= "SELECT nome, tipo, id FROM pets where id='$n3'";
            $stmt = $dbh->prepare($sql);
            $stmt->execute();  
            echo "<table border='1'>
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>id</th>
            </tr>"; 

            //foreach ($dbh->query($sql) as $row)        
            //print $row['nome']."<br>";//Comandos para exibir resultado na tela 
            //print $row['tipo']."<br>";//Comandos para exibir resultado na tela
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {//Executa o comando SQL.
        
            echo "<tr>
                    <td>" . $row["nome"] . "</td>
                    <td>" . $row["tipo"] . "</td>
                    <td>" . $row["id"] . "</td>
                    </tr>";

        }

        echo "</table>";
        } else if ($_POST['name_submit'] == 'Inserir') {
            // Código para salvar os dados
            $cmd="INSERT INTO pets (id,nome,tipo) VALUES($n3,'$n1','$n2')";
            //instacia classe para conexao com o BD.
            $dbh = new PDO($dsn, $user, $password);    
            //Executa o comando SQL
            $dbh->exec($cmd);
            echo "Sucesso.";

        } else if($_POST['name_submit'] == 'Excluir') {
            // Código para enviar os dados
            $cmd="DELETE FROM pets where id='$n3'"; 
             //instacia classe para conexao com o BD.
             $dbh = new PDO($dsn, $user, $password);    
             //Executa o comando SQL
             $dbh->exec($cmd);
             echo "Sucesso.";
        } else{
        echo "Operação com sucesso.";
        }
    }catch(PDOException $e){

        //$mens='SQLSTATE[42S22]: Column not found: 1054 Unknown column 'tipo2' in 'field list'';
        //SQLSTATE[HY000] [1045] Access denied for user 'ght'@'localhost' (using password: YES) 
        //SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '2' for key 'PRIMARY'
        print "Erro de conexao_".$e->getMessage()."\n";
            //encerra a conexão com o BD
        die();

        }
        
         
}else{
    echo 'Informe todos os valores por favor';
    }
?>
<a href="form_dados.php"><img id="voltar" src="../AV1PROG_W/images/botao_voltar.png"></a>
</html>
