<?php 
session_start();
$nomClasse = $_SESSION['nomClasse'];
$chapitre = NULL;
$nomPage = NULL;
$typePage = "pageBlanche";
$typeUtilisateur = $_SESSION['utilisateur'];

// DEVELOPMENT MODE
include "developmentMode.php";
?>

<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include("head.php"); ?>

<?php
// FUNCTIONS 
include("fonctionsPHP.php");
include("fonctionsJS.html");
?>


<!--
<script type="text/javascript">
// return a random number between min included and max not included
function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
}
/*
function choisirEleve(){
    document.getElementById("resultat_tirage").innerHTML = "hello";
}*/

function choisirEleve(){
    var $choix_nbreHasard = getRndInteger(0,21);

    //var mydata = JSON.parse("bdd4eme.json");
        //console.log(mydata);
        document.getElementById("resultat_tirage").innerHTML = "hello";
        

    //alert($obj["4eme"][1].nom);
    //$nom_hasard = "nom";
    //document.getElementById("resultat_tirage").innerHTML = $choix_nbreHasard;
}

</script>
-->

<!-- BODY -->
<body onload="startTime()">

<!-- HEADER -->
<?php include("header.php"); ?>


<!-- PRINCIPAL -->
<section id="principal">
   
   <!-- BACK BUTTON 
<form action="pageWorkshop.php" method="post">
    <button class="bouton" style='margin-bottom: 5%; margin-top: 5%; margin-left:5%;' type="submit">&#128218; Back</button>
</form> -->

<!-- GRAND CONTENU -->
<section id="grandContenu" style="margin-top:60%;">




</section> <!-- end GRAND CONTENU -->
</section> <!-- end PRINCIPAL -->

<!-- FOOTER -->
<?php include "footer.php"; ?>

</body>
</html>
