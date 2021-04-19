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

<h2>Class of <?php echo $_SESSION['nomClasse']; ?></h2>

<!-- BANDEAU -->
<?php include "bandeau.php"; ?>

<!-- CONTENU -->
<section id="contenu">

<!-- STARTER -->
<h3>Starter</h3>

<!-- pick up an image for starter -->
<img src="../../images/starters/<?php echo $_SESSION['niveau'].'/'.choisirStarter($_SESSION['niveau']);?>" alt='starter'/>

<!-- BACK BUTTON -->
<form action="pageWorkshop.php" method="post">
	<button class="bouton" style='margin-bottom: 5%; margin-top: 5%; margin-left:42%;' type="submit">&#128218; Back</button>
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
