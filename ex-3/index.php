<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex-03</title>
</head>
<body>
    <h1>Formulário A ou B</h1>
    <h2> Aqui irei descobrir qual número é maior entre os dois informados</h2>
    <form action="verificamaior.php" method="POST">
        <label for="age">Insira um número: (A)</label>
        <input type="number" id="a" name="a" required>
        <br><br>
        <label for="age">Insira um número: (B)</label>
        <input type="number" id="b" name="b" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
