<?php
// model page for all course related pages
session_start();

$utilisateur = $_SESSION['utilisateur'];

$niveau = $_GET['niveau'];
$chapitre = $_GET['chapitre'];
$page = $_GET['page'];

if (empty($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = NULL;
}
$pseudo = $_SESSION['pseudo'];

if (empty($_SESSION['pw'])){
    $_SESSION['pw'] = NULL;
}
$pw = $_SESSION['pw'];

include("fonctionsJS.html");
include("head.php"); 
include("header.php");

// contenu de la page
echo "
<section class='principal'>";
?>

<!-- mathjax -->
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    extensions: ["tex2jax.js"],
    jax: ["input/TeX", "output/HTML-CSS"],
    tex2jax: {
      inlineMath: [ ["\\(","\\)"] ],
      displayMath: [ ["\\[","\\]"] ],
      processEscapes: true
    },
    "HTML-CSS": { availableFonts: ["TeX"] }
  });
</script>
<script type="text/javascript"
src="http://cdn.mathjax.org/mathjax/latest/MathJax.js"></script>

<h2 id="titre"></h2>

<!-- Affichage du quizz -->
<div id="quizz"></div>

<!-- Declenchement du calcul de score et commentaires a la soumission des reponses -->
<input class="bouton" type="button" id="soumettre" value="Soumettre les réponses" style="margin-top:5%;width:20%;">

<!-- Affichage du score -->
<p id="score"></p>

<!-- Chargement du quizz -->
<?php echo "<script src='../".$niveau."/".$chapitre."/".$page.".js'></script>";?>

<!-- Code de gestion du quizz -->
<script src="fonctionsQuizz.js"></script>

<!-- fin de page -->
<?php echo "</section>";
include("footer.php"); ?>

</body>
</html>