<DOCTYPE! html>
    <meta charset="UTF-8">
    <meta lang="pt-br">

    <?php

    include_once 'cap2_classes/funcionario.class.php';

    $func = new Funcionario;
    $func->SetSalario(8989);
    

    echo "Funcionario <br> é {$func->GetSalario()}";    
    ?>
</DOCTYPE>