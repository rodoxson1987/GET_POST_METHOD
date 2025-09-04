<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo POST</title>
</head>
<body>
    <h2>Formulario com POST</h2>
    <form action="11_method_post.php" method="POST">
        Nome: <input type= "text" name="nome" placeholder="Digite seu nome"><br><br>
        Idade: <input type= "number" name="idade" placeholder="Digite sua idade"><br><br>
        Data de Nascimento <input type="date" name="date"><br><br>
        <input type="submit" value= "Enviar com POST">
</form>
<?php
        if (isset($_POST['nome']) && isset ($_POST['idade']) && isset($_POST['date'])){
            echo "<p><strong>Nome: </strong>".$_POST['nome']."<p>";
            echo "<p><strong>Idade: </strong>".$_POST['idade']."<p>";
            echo "<p><strong>Data de Nascimento: </strong>".$_POST['date']."<p>";
        }

?>
    
</body>
</html>