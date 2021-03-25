<?php 
session_start();

// DEVELOPMENT MODE
include "developmentMode.php";

// DEFINE NOMCLASSE 
if (isset($_GET['nomClasse'])){
    $_SESSION['nomClasse'] = $_GET['nomClasse'];
}

if ($_SESSION['nomClasse'] == '4F1') {
    $_SESSION['niveau'] = 'quatrieme';
}
elseif ($_SESSION['nomClasse'] == '6B4'){
    $_SESSION['niveau'] = 'sixieme';
}
// TIMER SESSION
$_SESSION['tempsEcoule_session'] = "";
?>

<!-- FONCTIONS PHP -->
<?php include "fonctions.php"; ?>

<!-- HTML -->
<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include "head.html"; ?>
  
<!-- FONCTIONS JS -->
<?php include "fonctionsJS.html";  ?>


<!--
<script type="text/javascript">
// return a random number between min included and max not included
function getRndInteger(min, max) {
	return Math.floor(Math.random() * (max - min) ) + min;
}

function choisirEleve(){
    document.getElementById("resultat_tirage").innerHTML = "hello";
}

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
<body onload='startTime()'>

<!-- HEADER -->
<?php include "header.html"; ?>

<!-- MODE DEVELOPMENT OR PRODUCTION -->
<p><?php echo $_SESSION['commentaire']; ?></p>

<!-- PRINCIPAL -->
<section id="principal">
    
<!-- TABLE MATIERES -->
<?php include "tableMatieres.php"; ?>

<!-- GRAND CONTENU -->
<section id='grandContenu'>

<!-- CLASS NAME -->
<h2>Class of <?php echo $_SESSION['nomClasse']; ?></h2>

<!-- BANDEAU -->
<?php include "bandeau.php"; ?>

<!-- CONTENU -->
<section id="contenu">

<!-- WORKSHOP -->
<h3 style='margin-left:35%;'>Workshops</h3>

<div class="bloc_ligne" style="margin:2%; width:90%;">

    <!-- STARTER BUTTON -->
    <form method='post' action='starter.php' style='margin-left:8%;'>
        <button class='bouton' type='submit'>&#127922; Draw starter</button>
    </form>

    <!-- CHALLENGE BUTTON -->
    <form method='post' action='' style='margin-left:2%;'>
        <button class='bouton' type='submit'>&#127941; Challenge</button>
    </form>

    <!-- EXERCISE GENERATOR BUTTON -->
    <form method='post' action='' style='margin-left:2%;'>
        <button class='bouton' type='submit'>&#127744; Generator</button>
    </form>

    <!-- PROJECT BUTTON -->
    <form method='post' action='' style='margin-left:2%;'>
        <button class='bouton' type='submit'>&#9749; Project</button>
    </form>

</div>

<!-- PICK A NAME -->
<h3 style='margin-left:35%;'>Pick a name</h3>

<!-- TIRAGE ELEVE -->
<form method='post' action='tirageEleve.php'>
    <button class='bouton' style='margin-left:40%;' type='submit'>&#127922; Draw player</button>
</form>

<div class="bloc_colonne">
    <div style="width:50%;">
<p>Team 1 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe1'); ?> </p>
<p>Team 2 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe2'); ?> </p>
<p>Team 3 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe3'); ?> </p>
<p>Team 4 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe4'); ?> </p>
<p>Team 5 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe5'); ?> </p>
<p>Team 6 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe6'); ?> </p>
</div>
<div style="width:50%;">
<p>Team 7 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe7'); ?> </p>
<p>Team 8 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe8'); ?> </p>
<p>Team 9 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe9'); ?> </p>
<p>Team 10 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe10'); ?> </p>
<p>Team 11 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe11'); ?> </p>
<p>Team 12 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe12'); ?> </p>
</div>
</div>

<!-- END CONTENU -->
</section> 

<!-- PENALTY -->
<div id="penalite"> 

<h3>Penalty</h3>

<!--
<script type="text/javascript">
    import * as data from 'bdd.json';
    var mydata = JSON.parse(data);
    alert(mydata.groupes[1]);
</script>
-->

<!-- PENALTY BUTTON -->
<form method='post' action='pageWorkshop.php'>
    <input type="text" id="nom_penalite" name="nom_penalite" style="margin-left:10%;">
    <button class="bouton" type="submit" name="record_penalite" value="record_penalite" style="margin-left:3%;">&#128191; Record</button>
    <button class="bouton" type="submit" name="withdraw_penalite" value="withdraw_penalite" style="margin-left:2%;">&#10060; Withdraw</button>
</form>

<?php 
if (isset($_POST["record_penalite"])){
    augmenter_penalite($_SESSION['niveau'], $_POST["nom_penalite"]);
}
if (isset($_POST["withdraw_penalite"])){
    diminuer_penalite($_SESSION['niveau'], $_POST["nom_penalite"]);
}
?>

<p>&#128213; <?php afficherMembresPenalite2($_SESSION['niveau']) ?></p> 
<p>&#128217; <?php afficherMembresPenalite1($_SESSION['niveau']) ?></p>

</div>

<!-- END GRAND CONTENU -->
</section> 
<!-- END PRINCIPAL -->
</section>

<!-- FOOTER -->
<?php include "footer.html"; ?>

</body>
</html>
