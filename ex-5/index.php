<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex-05</title>
</head>
<body>
    <h1>Jokenpo</h1>
    <h2> Selecione sua opção</h2>
    <form action="jokenpo.php" method="POST">
        <label for="jogo">Selecione a sua jogada</label>
        <select name="jokenpo" id="jokenpo">
            <option value="1">Papel</option>
            <option value="2">Pedra</option>
            <option value="3">Tesoura</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
