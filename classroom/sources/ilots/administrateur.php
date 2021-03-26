<?php session_start(); ?>

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

<!-- PRINCIPAL -->
<section id="principal">

<!-- TABLE MATIERES -->
<?php include "tableMatieres.html"; ?>

	<section id="grandContenu">

  <h2>Class of 4F1</h2>

  <!-- BANDEAU -->
  <?php include "bandeau.php"; ?>

  <section id="contenu">


<h3>Administrator</h3>






<form action="page4eme.php" method="post">
	<label for="goal" style="margin-left:35%;">Absent:</label>
  <input type="text" id="absent" name="absent" style="margin-left:3%;">
	<button class="bouton" style='margin-bottom: 5%; margin-top: 5%; margin-left:3%;' type="submit">&#128218; Record</button>

	<label for="goal" style="margin-left:35%;">Goal:</label>
  <input type="text" id="objectif" name="objectif" style="margin-left:3%;">
	<button class="bouton" style='margin-bottom: 5%; margin-top: 5%; margin-left:3%;' type="submit" value="record_objectif">&#128218; Record</button>
</form>



</section> <!-- end "contenu" -->
</section> <!-- end "grand_contenu" -->
</section> <!-- end "principal" -->

<!-- FOOTER -->
<?php include "footer.html"; ?>

</body>

</html>
