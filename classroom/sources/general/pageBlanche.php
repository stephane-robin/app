<?php 
session_start();
$nomClasse = $_SESSION['nomClasse'];

// DEVELOPMENT MODE
include "developmentMode.php";
?>

<!-- FONCTIONS PHP -->
<?php include("fonctionsPHP.php"); ?>

<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include("head.php"); ?>
  
<!-- FONCTIONS JS -->
<?php include "fonctionsJS.html"; ?>

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

<!-- MODE DEVELOPMENT OR PRODUCTION -->
<p><?php echo $_SESSION['commentaire']; ?></p>

<!-- PRINCIPAL -->
<section id="principal">
    
<!-- TABLE MATIERES -->
<?php include "tableMatieres.php"; ?>

<!-- GRAND CONTENU -->
<section id="grandContenu" style="margin-top:60%;">


<!-- BACK BUTTON -->
<form action="pageWorkshop.php" method="post">
	<button class="bouton" style='margin-bottom: 5%; margin-top: 5%; margin-left:42%;' type="submit">&#128218; Back</button>
</form>

</section> <!-- end GRAND CONTENU -->
</section> <!-- end PRINCIPAL -->

<!-- FOOTER -->
<?php include "footer.php"; ?>

</body>
</html>
