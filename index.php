
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini projeto - QUIZ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Quiz de Conhecimentos Gerais</h1>

    <form action="resultado.php" method="POST">
        <h3>1) Qual é a capital do Brasil?</h3>
        <input type="radio" name="q1" value="a"> São Paulo <br>
        <input type="radio" name="q1" value="b"> Rio de janeiro <br>
        <input type="radio" name="q1" value="c"> Brasília <br>
        <input type="radio" name="q1" value="d"> Belo Horizonte <br>

        <h3>2) Quem pintou a monalisa?</h3>
        <input type="radio" name="q2" value="a"> Michelangelo <br>
        <input type="radio" name="q2" value="b"> Leonardo Da Vinci <br>
        <input type="radio" name="q2" value="c"> Picasso <br>
        <input type="radio" name="q2" value="d"> Van Gogh <br>

        <h3>3) Qual o maior planeta do sistema solar?</h3>
        <input type="radio" name="q3" value="a"> Marte <br>
        <input type="radio" name="q3" value="b"> Jupiter <br>
        <input type="radio" name="q3" value="c"> Saturno <br>
        <input type="radio" name="q3" value="d"> Sol <br>
        
        <h3>4) Em qual continente fica o Egito?</h3>
        <input type="radio" name="q4" value="a"> Europa <br>
        <input type="radio" name="q4" value="b"> Ásia <br>
        <input type="radio" name="q4" value="c"> África <br>
        <input type="radio" name="q4" value="d"> América <br>

        <h3>5) Qual a linguagem de programação usada no servidor?</h3>
        <input type="radio" name="q5" value="a"> HTML <br>
        <input type="radio" name="q5" value="b"> CSS <br>
        <input type="radio" name="q5" value="c"> PHP <br>
        <input type="radio" name="q5" value="d"> Javascript <br>
        
        <br>
        <button type="submit">Enviar Respostas </button>
        </form>
    
</body>
</html>
