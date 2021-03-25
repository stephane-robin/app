<!DOCTYPE HTML>
<html>
<body>

<?php 
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

$_SESSION['mode'] = "development";
$_SESSION['nomClasse'] = '4F1';
$_SESSION['niveau'] = 'quatrieme';
$_SESSION['bdd'] = "bddtest.json";
include "fonctions.php";
?>

<!-- DEBUT TRAITEMENTS -->
<?php

initialiser_participation('quatrieme')
?>

</body>
</html>
