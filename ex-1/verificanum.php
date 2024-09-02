<?php
    $num = intval($_POST['num']);
        if ($num < 0) {
        echo "<h1>Número detectado</h1>";
        echo "O número: " . $num . " é negativo";
        } if ($num > 0) {
            echo "<h1>Número detectado</h1>";
            echo "O número: " . $num . " é positivo";
        } if ($num === 0) {
            echo "<h1>Número detectado</h1>";
            echo "O número: " . $num . " é igual a zero";
        }

?>