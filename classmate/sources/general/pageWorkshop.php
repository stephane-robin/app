<?php 
session_start();
$typeUtilisateur = $_SESSION['utilisateur'];
$niveau = $_SESSION['niveau'];
$nomClasse = $_SESSION['nomClasse'];
$chapitre = NULL;
$typePage = "pageWorkshop";
$nomPage = NULL;

// Define $_POST['objectif'] coming from the page starter.php as a session variable
if (isset($_POST["objectif"])){
    $_SESSION['objectif'] = $_POST['objectif'];
    $objectif = $_SESSION['objectif'];
}
else if (isset($_SESSION['objectif'])){
    $objectif = $_SESSION['objectif'];
}
else{
    $objectif = Null;
}

// TIMER SESSION
$_SESSION['tempsEcoule_session'] = ""; 
?>

<!-- HTML -->
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
<?php include("header.php"); ?>


<!-- PRINCIPAL -->
<section id="principal">

<!-- TABLE MATIERES -->
<?php include("tableMatieres.php"); ?>

<!-- GRAND CONTENU -->
<section id='grandContenu'>

    

<h2 style='margin-left: 35%;'>Travail de groupe</h2>

<p style="margin-left:5%;">Objectif du jour : <?php echo $objectif; ?></p>


<fieldset style="margin-top:0%; margin-left:1%; width:90%;">

<h3>Session</h3>

<div class="bloc_colonne"> 
    
    <!-- GOAL -->
    <form style="margin-left:3%; margin-top:1%; margin-bottom:1%;" action="pageWorkshop.php" method="post">
        <input type="text" id="objectif" name="objectif" style="width:50%;">
        <button class='bouton' style="margin-left:1%;" type='submit'> &#9201; Objectif</button>
    </form>

    <!-- SESSION -->
    <form style="margin-left:3%; margin-top:1%; margin-bottom:1%;">
        <button class='bouton' style="margin-top:1%;" type='button' onclick='var $mavar = start_session(45);'> &#9201; Début session</button>
        <button class='bouton' style="margin-top:1%; margin-left:5%;" type='button'> &#10062; Fin session</button>
    </form>

</div>
</fieldset>



<fieldset style="margin-left:1%; width:90%;">
<!-- TABLEAU DE BORD -->
<h3>Tableau de bord</h3>

<?php $eleveChoisi = choisir_eleve($nomClasse); ?>

<div class='bloc_colonne'>

    <!-- Choose a student -->
    <form style='margin-left:3%; margin-top:1%; margin-bottom:3%;' method='post' action='tirageEleve.php'>
        <input type="text" id="eleve_choisi" name="eleve_choisi">
        <button class="bouton" type="submit" name="choisir_eleve" value="choisir_eleve" style="margin-left:1%;">&#128191; Choisir élève</button>
    </form>

    <div class="bloc_ligne">

        <!-- White page -->
        <form method='post' action='pageBlanche.php' style="margin-left:3%;">
            <button class='bouton' type='submit'>&#9898; Tableau blanc</button>
        </form>

        <!-- Timer button -->
        <form method='post' action='timer.php' target='_blank' style='margin-left:5%;'>
            <button class='bouton' type='submit'>&#9749; Timer</button>
        </form>

        <!-- Pick up a student randomly -->
        <form method='post' action='tirageEleve.php' style='margin-left:5%; margin-bottom:1%;'>
            <button class='bouton' type='submit' name='eleveChoisi' value='<?php echo $eleveChoisi; ?>'>&#127922; Tirer au sort</button>
        </form>

    </div>
 
</div>   

</fieldset>


<!-- EQUIPES -->
<fieldset style="margin-left:1%; width:90%;">

<h3>Equipes</h3>
<p>Consulter résultats</p>

<div class="bloc_ligne">
    <div style="width:90%;">
        <p>Equipe 1 : <?php echo renvoyer_membres_groupe($nomClasse, 1); ?> </p>
        <p>Equipe 2 : <?php echo renvoyer_membres_groupe($nomClasse, 2); ?> </p>
        <p>Equipe 3 : <?php echo renvoyer_membres_groupe($nomClasse, 3); ?> </p>
        <p>Equipe 4 : <?php echo renvoyer_membres_groupe($nomClasse, 4); ?> </p>
        <p>Equipe 5 : <?php echo renvoyer_membres_groupe($nomClasse, 5); ?> </p>
        <p>Equipe 6 : <?php echo renvoyer_membres_groupe($nomClasse, 6); ?> </p>
    </div>

    <div style="width:90%;">
        <p>Equipe 7 : <?php echo renvoyer_membres_groupe($nomClasse, 7); ?> </p>
        <p>Equipe 8 : <?php echo renvoyer_membres_groupe($nomClasse, 8); ?> </p>
        <p>Equipe 9 : <?php echo renvoyer_membres_groupe($nomClasse, 9); ?> </p>
        <p>Equipe 10 : <?php echo renvoyer_membres_groupe($nomClasse, 10); ?> </p>
        <p>Equipe 11 : <?php echo renvoyer_membres_groupe($nomClasse, 11); ?> </p>
        <p>Equipe 12 : <?php echo renvoyer_membres_groupe($nomClasse, 12); ?> </p>
    </div>
</div>

</fieldset>



<!-- PENALTY -->
<div id="penalite" style="margin-left:1%; width:90%;"> 

    <h3>Pénalité</h3>

    <!-- Penalty button -->
    <form method='post' action='pageWorkshop.php'>
        <input type="text" id="nom_penalite" name="nom_penalite" style="margin-left:10%;">
        <button class="bouton" type="submit" name="record_penalite" value="record_penalite" style="margin-left:3%;">&#128191; Enregistrer</button>
        <button class="bouton" type="submit" name="withdraw_penalite" value="withdraw_penalite" style="margin-left:2%;">&#10060; Retirer</button>
    </form>

    <?php 
    if (isset($_POST["record_penalite"])){
        changer_penalite_eleve($nomClasse, $_POST["nom_penalite"], 1);
    }
    if (isset($_POST["withdraw_penalite"])){
        changer_penalite_eleve($nomClasse, $_POST["nom_penalite"], -1);
    }
    ?>

    <!-- Display members having penalties -->
    <p>&#128213; <?php echo renvoyer_membres_penalite2($nomClasse) ?></p> 
    <p>&#128217; <?php echo renvoyer_membres_penalite1($nomClasse) ?></p>

</div>

</section> <!-- end GRAND CONTENU -->
</section> <!-- end PRINCIPAL -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>
