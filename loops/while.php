<?php
    $title = 'While Loop';

    $guitars = ['Vela', 'Explorer', 'Start', 'Aver'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals: <?= $title; ?></title>
</head>
<body>
    <h1>Mis guitarras favoritas</h1>
    <?php

    $i = 0;

        while ($i < count($guitars)){
            $guitar = $guitars[$i];
            echo $guitar;

            $i++;

        }
    
    ?>
</body>
</html>