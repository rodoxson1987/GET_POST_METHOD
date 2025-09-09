
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do QUIZ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado do Quiz</h1>

    <?PHP
        $respostas = [
            "q1" => "c", //A alternativa correta é Brasília
            "q2" => "b", //A alternativa correta é Leonardo da Vinci
            "q3" => "b", //A alternativa correta é Júpiter
            "q4" => "c", //A alternativa correta é África
            "q5" => "c"  //A alternativa correta é PHP
        ];

        $pontos = 0;
        

        foreach($respostas as $pergunta => $correta){
            if (isset($_POST[$pergunta]) && $_POST[$pergunta] === $correta ){
                $pontos++;
            }
        }

        echo "<p>Voce acertou <strong>$pontos</strong> de " .count($respostas) . " perguntas</p>";

        if ($pontos == 5){
            echo "<p>Excelente! Voce é um genio, foi muito bem!</p>";
        } elseif ($pontos >= 3){
            echo "<p>Bom trabalho! Mas ainda pode melhorar!</p>";
        } else {
            echo "<p>|Voce consegue, continue estudando!!</p>";
        }
    ?>
        <a href = "index.php">Tentar Novamente</a>
    
</body>
</html>
