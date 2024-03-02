<?php
    $title = 'Foreach Loop';

    $guitars = ['Vela', 'Explorer', 'Start', 'aver'];

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
        foreach($guitars as $guitar) {
            echo "<tr><td>$guitar</td></tr>";
        }
    
    ?>
</body>
</html>