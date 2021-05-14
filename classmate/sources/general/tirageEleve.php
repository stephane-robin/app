<?php 
session_start();
$nomClasse = $_SESSION['nomClasse'];
$chapitre = NULL;
$nomPage = NULL;
$typePage = "tirageEleve";
?>


<!-- FONCTIONS PHP -->
<?php include("fonctionsPHP.php"); ?>

<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include("head.php"); ?>
  
<!-- FONCTIONS JS -->
<?php include("fonctionsJS.html"); ?>

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
    
<!-- TABLE MATIERES -->
<?php include("tableMatieres.php"); ?>

<!-- GRAND CONTENU -->
<section id="grandContenu">

<!-- CLASS NAME -->
<h2><?php echo $nomClasse; ?></h2>


<section id="contenu">

<?php 
if (!empty($_POST['eleveChoisi'])){
    $eleveChoisi = $_POST['eleveChoisi']; 

    if (renvoyer_penalite_eleve($nomClasse, $eleveChoisi) == 1) {
        changer_penalite_eleve($nomClasse, $eleveChoisi, -1);
        echo "<p>&#128683; Désolé <strong>" . $eleveChoisi . "</strong>, pénalité ! Tu ne peux pas jouer... mais ta pénalité est effacée.</p>";
    }
    else if (renvoyer_penalite_eleve($nomClasse, $eleveChoisi) == 2){
        echo "<p>&#128683; Désolé <strong>" . $eleveChoisi . "</strong>, pénalité ! Tu ne peux pas jouer...</p>";
    }
    else {
        echo "<p>Le(la) gagnant(e) est ... <strong>" . $eleveChoisi . "</strong></p>";
    }
}
?>

<!-- print the selected student -->

<div class="bloc_ligne">
<!-- RESULTS BUTTON -->
<form method='post' action='tirageEleve.php' style='margin-top: 5%; margin-bottom: 5%;margin-left: 20%;'>
    <input type='hidden' name='eleveChoisi' value='<?php echo $eleveChoisi ?>'></input>
    <button class='bouton' type='submit' name='valider' value='valider'>&#128526; Valid</button>  
    <button class='bouton' type='submit' name='erreur' value='erreur'>&#128561; Mistake</button>
    <button class='bouton' type='submit' name='bonus' value='bonus'>&#127894; Bonus</button>
</form>
</div>

<?php

if (isset($_POST['valider'])){
    changer_note_groupe($nomClasse, $eleveChoisi, 1);
    echo "<p>&#128165;Félicitation...</p>";
}
elseif (isset($_POST['bonus'])){
    changer_note_groupe($nomClasse, $eleveChoisi, 2);
    echo "<p>&#128165;Félicitation... bonus + 2 points</p>";
}
elseif (isset($_POST["erreur"])){
    echo "<p>&#128163; Dommage...</p>";
}
?>

<table>
    <tr><th>Team</th><th>Grade / 20</th><th>Team</th><th>Grade / 20</th></tr>
    <tr><td>Team 1</td><td><?php echo renvoyer_note_groupe($nomClasse, 1); ?></td><td>Team 7</td><td><?php echo renvoyer_note_groupe($nomClasse, 7); ?></td></tr>
    <tr><td>Team 2</td><td><?php echo renvoyer_note_groupe($nomClasse, 2); ?></td><td>Team 8</td><td><?php echo renvoyer_note_groupe($nomClasse, 8); ?></td></tr>
    <tr><td>Team 3</td><td><?php echo renvoyer_note_groupe($nomClasse, 3); ?></td><td>Team 9</td><td><?php echo renvoyer_note_groupe($nomClasse, 9); ?></td></tr>
    <tr><td>Team 4</td><td><?php echo renvoyer_note_groupe($nomClasse, 4); ?></td><td>Team 10</td><td><?php echo renvoyer_note_groupe($nomClasse, 10); ?></td></tr>
    <tr><td>Team 5</td><td><?php echo renvoyer_note_groupe($nomClasse, 5); ?></td><td>Team 11</td><td><?php echo renvoyer_note_groupe($nomClasse, 11); ?></td></tr>
    <tr><td>Team 6</td><td><?php echo renvoyer_note_groupe($nomClasse, 6); ?></td><td>Team 12</td><td><?php echo renvoyer_note_groupe($nomClasse, 12); ?></td></tr>
</table>


</section> <!-- end CONTENU -->
</section> <!-- end GRAND CONTENU -->
</section> <!-- end PRINCIPAL -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>
