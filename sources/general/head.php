<?php
if ($page == "index"){
  $prefixe = "";
}
else{
  $prefixe = "../../";
}
?>

<!DOCTYPE HTML>
<html>
  
<head>
  <title> ToKeTa </title>

  <?php 
  /* feuille de style principale
     feuille de style relative aux codes colores
     favicon dans l'onglet du navigateur */
  echo "
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
  <link rel='stylesheet' href='".$prefixe."styles/style27.css'>  
  <link rel='stylesheet' href='".$prefixe."styles/prism.css'>  
  <link rel='icon'
        type='image/png'
        href='".$prefixe."images/general/symbole_circulaire.png'>
  ";
  ?>
        
  <!-- utilisation des accents francais -->
  <meta charset='utf-8'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
