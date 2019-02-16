<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fonctions relatives a la date</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php   
    //temps ecoulé depuis 1er janiver 1970 a minuit gmt
    echo time()."</br>";
    //date obtenir date locale en format souhaité
    /*
    d -Représente le jour du mois(de 01 à 31)
    m -Représente un mois(de 01 à 12)
    n -Représente un mois (de 1 à 12)
    Y -Représente l'année(par exemple 2015)
    l -Représente le jour de la semaine(ex: lundi)
    N -Represente un jour de la semaine en chiffre(Lundi=1,Dimanche=7)
    H -Représente les heureus (de 00 à 23)
    i -Représente les minutes (de 00 à 59)
    s -Représente les secondes(de 00 à 59)
    */
    echo 'Nous Somme Le:'.date("d/M/Y"). '</br>';
    echo 'Aoujourd\'hui c\'est: '.date("l").'</br>';

    echo 'L\'heure est: '.date("h").' Les minutes sont :'.date("i").' Les secondes sont: '.date("s").'</br>';
    echo date("d-m-Y",11000000000).'</br>';
    echo date("d-m-Y",time()).'</br>';
    //* les jours en français
    $Jours = array(
        "",
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
    "Dimanche"
    );

    $Mois = array(
        "",
        "Janvier",
        "Février",
        "Mars",
        "Avril",
        "Mai",
        "Juin",
        "Juillet",
        "Aôut",
        "Septembre",
        "Octobre",
        "Novembre",
        "Décembre");

        $datefrançais=$Jours[date("N")]." ".date("d")." ".$Mois[date("n")]." ".date("Y");
        echo ($datefrançais).'</br>';
//Methode Simple
setlocale(LC_TIME,'fr-FR');
//date
echo strftime("%A %d %B %Y").'</br>';
//heure
echo strftime("%H:%M:%S").'</br>';

//Vérifier la validité d'une date
$dateav1=checkdate(12,20,2016);
$dateav2=checkdate(31,16,2014);
$dateav3=checkdate(04,01,-1500);
 if($dateav1)
 {
     echo"Valide</br>";
 }
 else
 echo"Date Non valide</br>";

 if($dateav2)
 {
     echo"Valide</br>";
 }
 else
 echo"Date Non valide</br>"; 
    
 if($dateav3)
 {
     echo"Valide</br>";
 }
 else
 echo"Date Non valide</br>";
    
    //heure locale retoune un tableau contenant tout les informations
 echo'<pre>';
 print_r(getdate());
 echo'</pre>';
 echo'</br></br>';

 echo'<pre>';
 print_r(getdate(1));
 echo'</pre>';

    ?>
</body>
</html>