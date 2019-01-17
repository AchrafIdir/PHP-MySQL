<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>les conditions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php   /*les heures de connexions */
    $heure_connexion=17;
if ($heure_connexion<18) 
{
    echo'passer une bonne journée</br>';
    $journee="oui</br>";
}
else {
    echo'passer un bonnne soirée </br>';
    $journee="non</br>";
}
echo 'fait-il jour ? La réponse est: '.$journee;

    
    ?>
    <?php 
    /*moyenne */
    $moyenne=16;
   if ($moyenne<10) {
       echo'vous n\'avez pas eu la moyenne</br>';
   }
   elseif ($moyenne==10) {
    echo'vous avez eu juste la moyenne</br>';
   }
   else {
      echo'vous avez eu plus de la moyenne</br>';
   }
   
    
    ?>
    <?php
    /*ET=AND  OU=OR*/
    $note=14;
    $difficulte="difficile";

    if($note<=12 AND $difficulte=="facile")
    {
        echo'c\'est un travail nul</br>' ;
    }
    elseif ($note>12 AND $difficulte=="facile") {

        echo'pas mal mais c\'est facile</br>';
    }
    elseif ($note<=12 AND $difficulte=="difficile") {

        echo'Ne vous découragez pas,c\'était difficile</br>';
    }
    else{
        echo'Bravo!</br>';
    }

    if ($difficulte="facile" OR $difficulte="Moyen") {
        echo'c\'est un teste facile</br>';
    } else {
        echo'c\'est un teste difficile</br>';
    } 
    

    
    
    ?>
    <?php  //switch  elseif
    $noteswitch=12;
    if ($noteswitch==0) {
        echo"tu est nul!</br>";
    } elseif ($noteswitch==4) {
        echo"trés mauvais</br>";
    }
    elseif ($noteswitch==8) {
        echo"pas bon</br>";
    }
    elseif ($noteswitch==12) {
        echo"moyen</br>";
    }
    elseif ($noteswitch==16) {
        echo"bien joué</br>";
    }
    elseif ($noteswitch==20) {
        echo"Parfait</br>";
    }
    else {
       echo"Pas de commentaire</br>";
    }
     
    switch ($noteswitch) {
        case 0:
        echo"tu est nul!</br>";
            break;

        case 4:
        echo"trés mauvais</br>";
            break;
        case 8:
        echo"pas bon</br>";
            break;
        case 12:
        echo"moyen</br>";
            break; 
        case 16:
        echo"bien joué</br>";
            break;
        case 20:
        echo"Parfait</br>";
            break;           
        default:
        echo"Entrer une note valide svp</br>";
    
    }

    
    ?>
</body>
</html>