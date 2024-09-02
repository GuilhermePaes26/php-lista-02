<?php
    $option = intval($_POST['jokenpo']); 
    $optionPc = random_int(1,3);
    $imagensPermitidas = ['1.avif', '2.jfif', '3.webp'];
    $result = '';

    if ($option === $optionPc) {
        $result = 'Deu empate'; 
    } elseif ($option === 1 and $optionPc === 2) {
        $result = 'Vitória do Jogador';
    } elseif ($option === 2 and $optionPc === 3) {
        $result = 'Vitória do Jogador';
    } elseif ($option === 3 and $optionPc === 1) {
        $result = 'Vitória do Jogador';
    } else {
        $result = 'Vitória do Computador';
    }


    if ($option > 0 && $option <= count($imagensPermitidas)) {
        $urlImagem = "./" . $imagensPermitidas[$option - 1]; 
    } 
    
    if ($optionPc > 0 && $optionPc <= count($imagensPermitidas)) {
        $urlImagemPC = "./" . $imagensPermitidas[$optionPc - 1]; 
    } 
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Imagem Selecionada</title>
</head>
<body>
    <h1><?php echo htmlspecialchars($result); ?></h1>
    <h1>Imagem Selecionada</h1>
    <h1>Sua jogada</h1>
    <img width='200px' src="<?php echo htmlspecialchars($urlImagem); ?>" alt ="Imagem Selecionada">
    <h1>Jogada do computador</h1>
    <img width='200px' src="<?php echo htmlspecialchars($urlImagemPC); ?>" alt ="Imagem Selecionada">
</body>
</html>