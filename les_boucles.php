<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>les boucles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
     $nombre=1;
     while ($nombre <= 10) {
      echo'ceci est le nombre:'.$nombre.'</br>';
        $nombre++;
     }

     //il s'execute au moins une fois meme la conditions est jamais  vrais
    $nombre=1;
    do {
    
        echo'ceci est le nombre:'.$nombre.'</br>';
        $nombre++;
    } while ($nombre <=0);

   
    for ($nombre=0; $nombre <=10 ; $nombre++) { 
        echo'ceci est le nombre:'.$nombre.'</br>';
    }
    for ($nombre=0; $nombre >=1 ; $nombre--) { 
        echo'ceci est le nombre:'.$nombre.'</br>';
    }

    ?>
</body>
</html>