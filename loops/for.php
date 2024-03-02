<?php
    $title = 'For Loop';

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
       
       for($i = 0; $i < count($guitars); $i++){
        $guitar = $guitars[$i];
        echo $guitar;
       }
    
    ?>
</body>
</html>