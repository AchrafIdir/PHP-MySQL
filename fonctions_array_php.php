<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fonctions en relation avec les array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
    //rechercher dans un tableau
     $voitures = array('ford' =>'mustung',
     'ferrari' => 'italia',
     'renault' => 'clio',
     'ferrari2' => 425,
         );


   echo '<pre>';
   print_r($voitures);
   echo'</pre>';
   echo'</br>';
   print_r (array_keys($voitures,425,true));
   echo'</br></br></br>';
   
//retourne valeurs d'un tableau sans les clé
echo'<pre>';
 print_r(array_values($voitures));
 echo'</pre>';
  
 //verifier si une clé existe
 echo'</br></br></br>';
 if (array_key_exists('ferrari',$voitures)) {
    echo'la clé existe';
 }
 else
 {
     echo'la clé n\'existe pas';
 }
 
    
 //rechercher la valeur et retourner la clé de cette dernière
 echo'</br></br></br>';
 echo(array_search(425,$voitures));

 //recherche dans un tableau une valeur
 echo'</br></br></br>';
 $prenoms = array('achraf','khaled','imad');
if(in_array("achraf",$prenoms))
{
echo"Il existe";
}
else{
echo"non trouvé";
}
 //fonctions qui comptent et comparent les tableau 
 echo'</br></br></br>';
 $noms=array("amari","idrissi","abdkari");
 echo count($noms);
 //renvoie un tableau d'occurence  
 echo'</br></br></br>';
 $compter=array("sport","musique","danse","sport","natation","musique","abdkari");
 echo'<pre>';
 print_r(array_count_values($compter));
 echo'</pre> ';
 //comparer les clés  et les valeurs de deux tableau et renvoie les difference(sensible à la casse)
 echo'</br></br></br>';
 $compare=array("nom"=>"mhrat","prenom"=>"aziz","age"=>24);
 $comparant=array("nom"=>"mhrat","prenom"=>"aziz");
 print_r(array_diff_assoc($compare,$comparant)); 
 //a la place de assoc on peux mettre _key pour comparer les clés ou bien array_diff pour seulement les valeurs

//Pour les Similitude
echo'</br></br></br>';
$compare1=array("nom"=>"alaoui","prenom"=>"islam","age"=>24);
$comparant1=array("nom"=>"alaoui","prenom"=>"islam");
echo "<pre>";
print_r( array_intersect_assoc($compare1,$comparant1));
echo"</pre>";
 //a la place de assoc on peux mettre _key pour comparer les clés ou bien array_intersect pour seulement les valeurs 
 



    ?>
</body>
</html>