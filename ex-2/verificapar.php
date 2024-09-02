<?php
    $num = intval($_POST['num']);
        if ($num % 2 === 0) {
        echo "<h1>Número detectado</h1>";
        echo "O número: " . $num . " é par";
        } else {
            echo "<h1>Número detectado</h1>";
            echo "O número: " . $num . " é impar"; 
        }

?>