<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>les fonctions string php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php 
//strlen :compte la longeur d'une chaine espace=1 caractère      avec accent =2

echo strlen("salut comment ça cv").'</br>';
//compte les mots
echo str_word_count("salut je suis un dev").'</br>';
//les paramètre pour que les caractères sont prisent comme un mot
echo str_word_count("salut à tous",0,'à').'</br>';
//répéter une chaine de caractères
echo str_repeat("salut</br>",10);
//remplacer un mot
echo $phrase="salut je suis un developpeur web".'</br>';
//web sera remplacer par mobile $cop compte le nombre de remplacement   
//str_ireplace   n'est pas sensible à la casse
echo str_replace('web','mobile',$phrase,$cop);
echo 'nombre de remplacement :'.$cop;
//maj et min
echo strtoupper('</br>'.$phrase);
echo strtolower($phrase);

//la position d'un caractère recherché ou mot
echo strpos("salut","u").'</br>';
echo strpos("bonsoir tous le monde","monde").'</br>';
echo strpos("bonsoir","i").'</br>';

//pour securiser notre site et que les utilisateurs n'injectent pas du code malvieillant à notre site
$str='j\'aime programmer en <strong> php </strong>';
echo htmlspecialchars($str).'</br>';
$ph='</br> <p>salut</p>'.'</br>';  
echo htmlspecialchars_decode($ph);
//saute de ligne
echo nl2br("salut!
ça va?" );

//string en table
$stringtotable="salut je suis bien";
print_r(explode(" ",$stringtotable)); 
echo"</br></br> ";

print_r(str_split("salut",2));
echo"</br></br>";
 //table en string
$tabletosting = array('php','mysql','code');
echo implode(" ",$tabletosting);



?>
    
</body>
</html>