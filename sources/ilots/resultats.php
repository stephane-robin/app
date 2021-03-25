<?php 
session_start();

// DEVELOPMENT MODE
include "developmentMode.php";
?>

<!-- FONCTIONS -->
<?php include "fonctions.php"; ?>

<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include "head.html"; ?>

<!-- FONCTIONS JS -->
<?php include "fonctionsJS.html"; ?>

<!-- BODY -->
<body onload="startTime()">

<!-- HEADER -->
<?php include "header.html"; ?>

<!-- MODE DEVELOPMENT OR PRODUCTION -->
<p><?php echo $_SESSION['commentaire']; ?></p>

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

<!-- RESULTS -->
<h3>Results</h3>

<?php
$eleveChoisi = $_POST['eleveChoisi'];

if (isset($_POST['valider'])){
	augmenter_note($_SESSION['niveau'], $eleveChoisi);
	echo "<p>&#128165;Félicitation...</p>";
}
elseif (isset($_POST['bonus'])){
	augmenter_note($_SESSION['niveau'], $eleveChoisi);
	augmenter_note($_SESSION['niveau'], $eleveChoisi);
	echo "<p>&#128165;Félicitation... bonus + 2 points</p>";
}
elseif (isset($_POST["erreur"])){
	echo "<p>&#128163; Dommage...</p>";
}
?>

<table>
	<tr><th>Team</th><th>Grade / 20</th><th>Team</th><th>Grade / 20</th></tr>
	<tr><td>Team 1</td><td><?php echo afficher_note($_SESSION['niveau'], 'groupe1'); ?></td><td>Team 7</td><td><?php echo afficher_note($_SESSION['niveau'], 'groupe7'); ?></td></tr>
	<tr><td>Team 2</td><td><?php echo afficher_note($_SESSION['niveau'], 'groupe2'); ?></td><td>Team 8</td><td><?php echo afficher_note($_SESSION['niveau'], 'groupe8'); ?></td></tr>
	<tr><td>Team 3</td><td><?php echo afficher_note($_SESSION['niveau'], 'groupe3'); ?></td><td>Team 9</td><td><?php echo afficher_note($_SESSION['niveau'], 'groupe9'); ?></td></tr>
	<tr><td>Team 4</td><td><?php echo afficher_note($_SESSION['niveau'], 'groupe4'); ?></td><td>Team 10</td><td><?php echo afficher_note($_SESSION['niveau'], 'groupe10'); ?></td></tr>
	<tr><td>Team 5</td><td><?php echo afficher_note($_SESSION['niveau'], 'groupe5'); ?></td><td>Team 11</td><td><?php echo afficher_note($_SESSION['niveau'], 'groupe11'); ?></td></tr>
	<tr><td>Team 6</td><td><?php echo afficher_note($_SESSION['niveau'], 'groupe6'); ?></td><td>Team 12</td><td><?php echo afficher_note($_SESSION['niveau'], 'groupe12'); ?></td></tr>
</table>

<!-- BUTTON BACK -->
<form action="pageWorkshop.php" method="post">
	<button class="bouton" style='margin-bottom: 5%; margin-top: 5%; margin-left:40%;' type="submit">&#128218; Back</button>
</form>

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
