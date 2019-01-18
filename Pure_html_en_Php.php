<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pure html</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php  
    /*il est utilisé pour des texte pleins des ' et " */
$teste=true;
if ($teste) {
    ?>
    <p> texte sans utliser \ avant ' ou "   "' "'''"''"'''''"''"''</p>
    
    <?php
}


    ?>
</body>
</html>