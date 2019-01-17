<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simple calcule ne PhP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>  
    <?php
    /*declaration des variables*/
    $nombre1=10;
    $nombre2=13;
    $addition;
    $multiplication;
    $soustraction;
    $division;
    $modulo;

    /*opérations*/
    $addition=$nombre1 + $nombre2;
    $multiplication=$nombre1 * $nombre2;
    $soustraction=$nombre1 - $nombre2;
    $division=$nombre1 / $nombre2;
    $modulo=$nombre1 % $nombre2;
    /*affichage*/
    echo'l\'addition de '.$nombre1.' et ' .$nombre2.' est : '.$addition. '</br>';
    echo'la multiplication de '.$nombre1.' et ' .$nombre2.' est : '.$multiplication. '</br>';
    echo'la soustraction de '.$nombre1.' et ' .$nombre2.' est : '.$soustraction. '</br>';
    echo'la division de '.$nombre1.' et ' .$nombre2.' est : '.$division. '</br>';
    echo'le modulo de '.$nombre1.' et ' .$nombre2.' est : '.$modulo;

    
    ?>
</body>
</html>