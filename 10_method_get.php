<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo GET</title>
</head>
<body>
    <h2>Formulario com GET</h2>
    <form action="10_method_get.php" method="GET">
        Nome: <input type= "text" name="nome" placeholder="Digite seu nome"><br><br>
        Idade: <input type= "number" name="idade"><br><br>
        Data de Nascimento <input type="date">
        <input type="submit" value= "Enviar com GET">
</form>
<?php
        if (isset($_GET['nome']) && isset ($_GET['idade'])){
            echo "<p><strong>Nome:</strong>".$_GET['nome']."<p>";
            echo "<p><strong>idade:</strong>".$_GET['idade']."<p>";
        }

?>
    
</body>
</html>