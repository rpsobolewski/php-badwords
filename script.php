<?php

$paragrafo = $_POST["paragrafo"];
$parola = $_POST["parola"];
$censura = '***';
$paragrafoCensurato = str_replace(strtolower($parola), $censura, strtolower($paragrafo));


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>

<body>




    <h2>Paragrafo:</h2>

    <?php echo $paragrafo; ?>

    <h2>Lunghezza paragrafo:</h2>

    <?php echo  strlen($paragrafo)  ?>

    <h3>Parola da censurare:</h3>

    <?php echo $parola; ?>

    <h3>Paragrafo censurato:</h3>

    <?php echo $paragrafoCensurato; ?>

    <h2>Lunghezza paragrafo censuraato:</h2>

    <?php echo  strlen($paragrafoCensurato)  ?>



</body>

</html>