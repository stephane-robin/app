<?php
$_SESSION['mode'] = "production";

if ($_SESSION['mode'] == "production"){
    $_SESSION['commentaire'] = "";
    $_SESSION['bdd'] = "bdd.json";
}
else {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $_SESSION['commentaire'] = "mode développement";
    $_SESSION['bdd'] = "bddtest.json";
}
?>