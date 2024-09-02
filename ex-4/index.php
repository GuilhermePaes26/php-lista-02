<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex-04</title>
</head>
<body>
    <h1>Vericiar qual o tipo de triângulo</h1>
    <h2> Aqui irei descobrir qual número é maior entre os dois informados</h2>
    <form action="verificatriangulo.php" method="POST">
        <label for="age">Insira o lado A do triângulo</label>
        <input type="number" id="a" name="a" required>
        <br><br>
        <label for="age">IInsira o lado B do triângulo</label>
        <input type="number" id="b" name="b" required>
        <br><br>
        <label for="age">IInsira o lado C do triângulo</label>
        <input type="number" id="c" name="c" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
