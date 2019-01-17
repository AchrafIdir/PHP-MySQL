<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>les tableaux en Php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php

   $prenoms = array('Pack','jackie','Paul','Pierre');
    //ou bien
 /*   $prenoms[0]="Pack";
    $prenoms[1]="jackie";
    $prenoms[2]="Paul";
    $prenoms[3]="Pierre";
*/
    $age = array(
        'Pack' =>24 ,
        'jackie'=>22,
        'Paul'=>18,
        'Pierre'=>'non renseigné'
    
    );

/*
les noms sont les clés 
   $age['Pack']=24;
    $age['jackie']=22;
    $age['Paul']=18;
    $age['Pierre']='non renseigné'; n  
*/
    //Affichage
echo $prenoms[0].'</br>';
echo $age['Pack'].'</br>';

//avec boucle
for ($x=0; $x <4 ; $x++) { 
    
    echo $prenoms[$x].'</br>';
}
//lire le tableaux ligne par ligne et stocker les valeurs dans $information
foreach ($prenoms as $information) {
    echo $information.'</br>';
    }
foreach ($age as $valeur) {
    echo $valeur.'</br>';
}
foreach ($age as $cle => $valeurs) {
   echo $cle.' a '.$valeurs. 'ans </br></br>';
}

echo"<pre>";
print_r($prenoms);
echo"</pre>";

    ?>
</body>
</html>