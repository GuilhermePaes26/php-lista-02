<?php
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
        if ($a > $b) {
            echo "<h1>A maior que B</h1>";
            return;
        } if ($a === $b) {
            echo "<h1>A é igual a B</h1>";
            return;
        } else {
            echo "<h1>A menor que B</h1>";
        }

?>