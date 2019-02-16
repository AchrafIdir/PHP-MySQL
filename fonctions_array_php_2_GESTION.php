<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fonctions gestion des array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
//remplir un tableau
$remplir=array_fill(0,10,"salut mes amis");
 print_r($remplir);
 echo"</br></br></br>"; 

 //remplir un tabl mais en spécifier les clés des valeurs
 $tablcles=array("couleur1","couleur2","couleur3","couleur4");
 $remplissage=array_fill_keys($tablcles,"Vert");
 print_r($remplissage);
//  echo"</br></br></br>";

//inserer un élément a la fin d'un tableau 
$pcs=array("hp","lenovo");
array_push($pcs,"dell","mac");
print_r($pcs);
echo"</br></br></br>";
//supprimer le dernier élément d'un tableau
array_pop($pcs); 
print_r($pcs);
echo"</br></br></br>";
// ajouter des element en premier de tableau
array_unshift($pcs,"pb","sony");
print_r($pcs);
//supprimer premiere valeur d'un tableau
echo"</br></br></br>";
echo "l'element supprimer est : ".array_shift($pcs)." </br> ";
print_r($pcs);
//supprimer par position est retourner les elements supprimer
echo"</br></br></br>"; 
$marque=array("a"=>"ds","b"=>"530","c"=>"z1000");
$marque1=array("a"=>"z750","b"=>"600r");
(array_splice($marque,1,2,$marque1));
echo"</br>";
print_r($marque);
//combiner des tableaux
echo"</br></br></br>"; 
print_r(array_merge($pcs,$marque1));
//creation d'un tableau assosiatif les deux tableaux doivent avoir le meme nombre d'elements  (1er tab comme clés et 2eme tab comme valeurs)
echo"</br></br></br>"; 
$t1 = array("a","b");
$t2=array("c","d");
print_r(array_combine($t1,$t2));

//supprimer les double d'un tableau
echo"</br></br></br>"; 
$prn=array("atik","alaoui","atik","hassnaoui","atik");
print_r(array_unique($prn));

//trier en asc
echo"</br></br></br>"; 
sort($prn);
print_r($prn);
//trier en desc
echo"</br></br></br>"; 
rsort($prn);
print_r($prn);
//trier par clé en asc
ksort();
//trier par clé en desc
krsort();
//trier en asc selon les valeurs
asort();
//trier en desc selon les valeurs
arsort();


?>
 
 </body>
</html>