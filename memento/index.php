<!DOCTYPE HTML>
<html>

<?php
$nomPage = "index";
$nomGroupe = "index";
?>

<!-- HEAD -->
<head>
  <title> ToKeTa-Memento </title>
  <link rel="stylesheet" href="./styles/style_memento.css">
  <link rel="stylesheet" href="./styles/prism.css">
    <link rel="icon"
          type="image/png"
          href="./images/general/symbole.png">
  <meta charset="utf-8">
</head>

<!-- BODY -->
<body>

<!-- HEADER -->
<?php include("./sources/general/header.php"); ?>

<!-- PRINCIPAL -->
<section id="principal">

<!-- TABLE MATIERES -->
<aside id="table_matieres">
</aside>

<!-- GRAND CONTENU -->
<section id="grandContenu">

<!-- BANDEAU -->
<h2>Memento de programmation</h2>

<div class="bloc_ligne" style="margin-left:15%;">

	<!-- BLOC 1 -->
	<a class="choix" href="./sources/general/modelePage.php?nomGroupe=appli&nomPage=appli.html">

	<div class="bloc_colonne" style="width:250px;">
		<div class="bloc_choix_titre" style="background-color:#ff6666;">
			<p style="text-align:center;">Développement Soft</p>
		</div>
		<div class="bloc_choix_contenu">
			<p style="text-align:left;">L'essentiel à retenir au sujet des langages de création de logiciels et applications : Java, Kotlin, Android Studio, Python.</p>
		</div>
	</div>

	</a>

	<!-- BLOC 2 -->
	<a class="choix" href="./sources/general/modelePage.php?nomGroupe=web&nomPage=web.html">

	<div class="bloc_colonne" style="width:250px; margin-left:15%;">
		<div class="bloc_choix_titre" style="background-color: #ffccff;">
			<p style="text-align:center;">Développement Web</p>
		</div>
		<div class="bloc_choix_contenu">
			<p style="text-align:left;">L'essentiel à retenu au sujet des langages de création de pages Web : HTML, CSS, JavaScript, PHP.</p>
		</div>
	</div>

	</a>

</div>

<div class="bloc_ligne" style="margin-left:15%; margin-top:5%;">

	<!-- BLOC 3 -->
	<a class="choix" href="./sources/general/modelePage.php?nomGroupe=outilsDev&nomPage=outilsDev.html">
	<div class="bloc_colonne" style="width:250px;">
		<div class="bloc_choix_titre" style="background-color: #ff9966;">
			<p style="text-align:center;">Outils de développement</p>
		</div>
		<div class="bloc_choix_contenu">
			<p style="text-align:left;">L'essentiel à retenir au sujet des principaux outils de développement : Git, Docker, Jetbeans et le système d'exploitation Linux.</p>
		</div>
	</div>
	</a>

	<div class="bloc_colonne" style="width:250px; margin-left:15%;">
		<p></p>
	</div>

</div>

</section> <!-- END GRAND CONTENU -->
</section> <!-- END PRINCIPAL -->

<!-- FOOTER -->
<?php include("./sources/general/footer.php"); ?>

</body>
</html>