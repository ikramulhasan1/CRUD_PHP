<?php
session_start();

$_SESSION['color'] = 'Green';

session_unset();

session_destroy();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_SESSION['color'])) {
        echo 'Favurite colo: ' . $_SESSION['color'];
    }


    ?>
</body>

</html>