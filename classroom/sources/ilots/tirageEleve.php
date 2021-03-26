<?php 
session_start();

// DEVELOPMENT MODE
include "developmentMode.php";
?>

<!-- FONCTIONS PHP -->
<?php include "fonctions.php"; ?>

<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include "head.html"; ?>
  
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
<?php include "header.html"; ?>

<!-- MODE DEVELOPMENT OR PRODUCTION -->
<?php echo "<p>".$_SESSION['commentaire']."</p>" ?>

<!-- PRINCIPAL -->
<section id="principal">
    
<!-- TABLE MATIERES -->
<?php include "tableMatieres.php"; ?>

<!-- GRAND CONTENU -->
<section id="grandContenu">

<!-- CLASS NAME -->
<h2>Class of <?php echo $_SESSION['nomClasse']; ?></h2>

<!-- BANDEAU -->
<?php include "bandeau.php"; ?>

<section id="contenu">

<?php $eleveChoisi = choisirEleve($_SESSION['niveau']); 

if (tester_penalite1($_SESSION['niveau'], $eleveChoisi)) {
    annuler_penalite($_SESSION['niveau'], $eleveChoisi);
    echo "<p>&#128683; Sorry <strong>" . $eleveChoisi . "</strong>, penalty ! You can't play... but your penalty is over.</p>";
}
else {
    echo "<p>The winner is ... <strong>" . $eleveChoisi . "</strong></p>";
}

?>

<!-- print the selected student -->

<div class="bloc_ligne">
<!-- RESULTS BUTTON -->
<form method='post' action='resultats.php' style='margin-top: 5%; margin-left: 20%;'>
    <input type='hidden' name='eleveChoisi' value='<?php echo "".$eleveChoisi.""?>'></input>
    <button class='bouton' type='submit' name='valider' value='valider'>&#128526; Valid</button>
    <button class='bouton' type='submit' name='bonus' value='bonus'>&#127894; Bonus</button>
    <button class='bouton' type='submit' name='erreur' value='erreur'>&#128561; Mistake</button>
    <button class='bouton' type='submit' name='consulter' value='consulter'>&#127891; Results</button>
</form>

<!-- BACK BUTTON -->
<form action="pageWorkshop.php" method="post" style="margin-top: 5%; margin-left:10%;">
    <button class="bouton" type="submit">&#128218; Back</button>
</form>
</div>

<img src="../../images/general/blanc.png"/>


<!-- END CONTENU -->
</section>
<!-- END GRAND CONTENU -->
</section> 
<!-- END PRINCIPAL -->
</section> 

<!-- FOOTER -->
<?php include "footer.html"; ?>

</body>

</html>
