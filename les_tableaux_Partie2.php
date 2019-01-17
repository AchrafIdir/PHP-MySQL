<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>les tableaux </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
    //tab multidimension
    $membres = array(

        array('prenom',24,'email@email.fr'),
        array('prenom2',25,'email@email.com'),
        array('prenom3',29,'email@email.em')

    );
    echo'<pre>';
   print_r($membres);
   echo'</pre>';
  for ($ligne=0; $ligne <3; $ligne++) { 
      $pas=$ligne+1;
      echo'Membre numéro :'.$pas.'</br>';
      echo'<ul>';
      for ($colone=0; $colone < 3; $colone++) { 
          echo'<li>'.$membres[$ligne][$colone].'</li>';

      }
      echo'</ul>';

  }
    ?>
</body>
</html>