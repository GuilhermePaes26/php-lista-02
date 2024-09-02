<?php
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
    $c = intval($_POST['c']);
        if (($a + $b < $c) || ($a + $c < $b) || ($b + $c < $a)) {
            echo "<h1>Não é um triângulo/h1>";
        } elseif (($a == $b) and ($a == $c)) {
            echo "<h1>O triângulo é Equilátero</h1>";
        } elseif (($a==$b) || ($a==$c) || ($b==$c)){
            echo "<h1>O triângulo é de Isósceles</h1>";
        } else {
            echo "<h1>O triângulo é Escaleno</h1>";
        }

?>