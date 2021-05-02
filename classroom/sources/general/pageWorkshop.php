<?php 
session_start();
$nomClasse = $_SESSION['nomClasse'];

// DEVELOPMENT MODE
include("developmentMode.php");

// DEFINE NOMCLASSE 
if ($nomClasse == 'classe_4F1') {
    $_SESSION['niveau'] = 'quatrieme';
}
elseif ($nomClasse == 'classe_6B4'){
    $_SESSION['niveau'] = 'sixieme';
}

// Define $_POST['objectif'] coming from the page starter.php as a session variable
if (isset($_POST["objectif"])){
    $_SESSION['objectif'] = $_POST['objectif'];
}

// TIMER SESSION
$_SESSION['tempsEcoule_session'] = "";
?>

<!-- FONCTIONS PHP -->
<?php include("fonctionsPHP.php"); ?>

<!-- HEAD -->
<?php include("head.php"); ?>
  
<!-- FONCTIONS JS -->
<?php include("fonctionsJS.html");  ?>


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

<!-- HTML -->
<!DOCTYPE HTML>
<html>

<!-- BODY -->
<body onload='startTime()'>

<!-- HEADER -->
<?php include("header.php"); ?>

<!-- MODE DEVELOPMENT OR PRODUCTION -->
<p><?php echo $_SESSION['commentaire']; ?></p>

<!-- PRINCIPAL -->
<section id="principal">
    
<!-- TABLE MATIERES -->
<!-- Print the number of students in the class which is given by the global variable $_SESSION['classe'] -->
<aside id="table_matieres">

<div id="fieldsetTableMatieres">
    <?php echo "<h2 style='color:white;'>".$nomClasse."</h2>"; ?>
    <p>Travail de groupe</p>
    <p id="timer_session"></p>
</div>


</aside>

<!-- GRAND CONTENU -->
<section id='grandContenu'>


<!-- CLASS NAME -->
<h2>Travail de groupe</h2>

<!-- BANDEAU -->
<!-- BANDEAU SOUS TITRE -->

    <p>Objectif du jour : <?php echo "'".$_SESSION['objectif']."'"; ?></p>


<!-- BANDEAU CONTENU -->
<div id="bandeau_contenu">
    <p class="sp"><?php echo date('F j, Y')."   &#9201;    " ?><span id='txt'></span></p>    
</div>

<fieldset style="margin-top: 0%;">

<h3>Session</h3>
<!-- BANDEAU CONTROLE -->
<div class="bloc_colonne"> 
    <?php echo "<p>".calculTailleClasse($_SESSION['niveau'])." élèves</p>"; ?>
    
    <!-- GOAL -->
    <form style="margin-left:3%; margin-top:1%; margin-bottom:1%;" action="pageWorkshop.php" method="post">
        <input type="text" id="objectif" name="objectif" style="width:50%;">
        <button class='bouton' style="margin-left:1%;" type='submit'> &#9201; Objectif</button>
    </form>

    <!-- ABSENT STUDENTS -->
    <form style="margin-left:3%; margin-top:1%; margin-bottom:1%;" action="pageWorkshop.php" method="post">
        <input type="text" id="absent" name="absent">
        <button class="bouton" style='margin-left: 1%;' type="submit">&#128218; Absent</button>
    </form>

    <!-- Formules -->
    <form style="margin-left:3%; margin-top:1%; margin-bottom:1%;" action="pageWorkshop.php" method="post">
        <input type="text" id="formule" name="formule">
        <button class="bouton" style='margin-left: 1%;' type="submit">&#128218; Formule</button>
    </form>

    <!-- SESSION -->
    <form style="margin-left:3%; margin-top:1%; margin-bottom:1%;">
        <button class='bouton' style="margin-top:1%;" type='button' onclick='var $mavar = start_session(45);'> &#9201; Début session</button><br/>
        <button class='bouton' style="margin-top:2%;" type='button'> &#10062; Fin session</button>
    </form>

</div>
</fieldset>



<fieldset>
<!-- TABLEAU DE BORD -->
<h3>Tableau de bord</h3>

<div class="bloc_ligne" style="margin:2%; width:90%;">

    <!-- STARTER BUTTON -->
    <form method='post' action='starter.php' style='margin-left:8%;'>
        <button class='bouton' type='submit'>&#127922; Starter</button>
    </form>

    <!-- White page -->
    <form method='post' action='pageBlanche.php' style="margin-left:8%;">
        <button class='bouton' type='submit'>&#9898; White board</button>
    </form>

    <!-- Timer button -->
    <form method='post' action='' style='margin-left:5%;'>
        <button class='bouton' type='submit'>&#9749; Timer</button>
    </form>

</div>


<div class="bloc_ligne" style="margin:2%; width:90%;">

    <!-- CHALLENGE BUTTON -->
    <form method='post' action='' style='margin-left:8%;'>
        <button class='bouton' type='submit'>&#127941; Challenge</button>
    </form>

    <!-- EXERCISE GENERATOR BUTTON -->
    <form method='post' action='' style='margin-left:5%;'>
        <button class='bouton' type='submit'>&#127744; Generateur</button>
    </form>

    <!-- PROJECT BUTTON -->
    <form method='post' action='' style='margin-left:5%;'>
        <button class='bouton' type='submit'>&#9749; Projet</button>
    </form>

</div>
</fieldset>





<fieldset>
<!-- PICK A NAME -->
<h3>Tirage au sort</h3>

<!-- TIRAGE ELEVE -->
<form method='post' action='tirageEleve.php'>
    <button class='bouton' style='margin-left:40%;' type='submit'>&#127922; Choisir joueur</button>
</form>

<p>Consulter résultats</p>

<!-- Résultats -->

<div class="bloc_colonne">
    <div style="width:50%;">
<p>Equipe 1 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe1'); ?> </p>
<p>Equipe 2 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe2'); ?> </p>
<p>Equipe 3 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe3'); ?> </p>
<p>Equipe 4 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe4'); ?> </p>
<p>Equipe 5 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe5'); ?> </p>
<p>Equipe 6 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe6'); ?> </p>
</div>
<div style="width:50%;">
<p>Equipe 7 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe7'); ?> </p>
<p>Equipe 8 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe8'); ?> </p>
<p>Equipe 9 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe9'); ?> </p>
<p>Equipe 10 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe10'); ?> </p>
<p>Equipe 11 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe11'); ?> </p>
<p>Equipe 12 : <?php echo lister_membres_groupe($_SESSION['niveau'], 'groupe12'); ?> </p>
</div>
</div>

</fieldset>



<!-- PENALTY -->
<div id="penalite"> 

<h3>Pénalité</h3>

<!-- Penalty button -->
<form method='post' action='pageWorkshop.php'>
    <input type="text" id="nom_penalite" name="nom_penalite" style="margin-left:10%;">
    <button class="bouton" type="submit" name="record_penalite" value="record_penalite" style="margin-left:3%;">&#128191; Enregistrer</button>
    <button class="bouton" type="submit" name="withdraw_penalite" value="withdraw_penalite" style="margin-left:2%;">&#10060; Retirer</button>
</form>

<?php 
if (isset($_POST["record_penalite"])){
    augmenter_penalite($_SESSION['niveau'], $_POST["nom_penalite"]);
}
if (isset($_POST["withdraw_penalite"])){
    diminuer_penalite($_SESSION['niveau'], $_POST["nom_penalite"]);
}
?>

<!-- Display members having penalties -->
<p>&#128213; <?php afficherMembresPenalite2($_SESSION['niveau']) ?></p> 
<p>&#128217; <?php afficherMembresPenalite1($_SESSION['niveau']) ?></p>

</div>

<!-- END GRAND CONTENU -->
</section> 
<!-- END PRINCIPAL -->
</section>

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>
