<?php
// Define a string em PHP
$valor = "Texto gerado pelo PHP";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP + HTML</title>
</head>
<body>
    <!-- Formulário com campo preenchido pelo PHP -->
    <form action="processar.php" method="post">
        <label for="campo">Campo¬°ª¬ preenchido pelo PHP:</label>
        <input type="text" id="campo" name="campo" value="<?php echo htmlspecialchars($valor); ?>">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
