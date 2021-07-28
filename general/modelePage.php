<?php
session_start();

$typeUtilisateur = $_SESSION['utilisateur'];

$_SESSION['niveau'] = $_GET['niveau'];
$niveau = $_SESSION['niveau'];

$_SESSION['nomClasse'] = $_GET['nomClasse'];
$nomClasse = $_SESSION['nomClasse'];

$_SESSION['chapitre'] = $_GET['chapitre'];
$chapitre = $_SESSION['chapitre'];

$nomPage = $_GET['nomPage'];
$typePage = "modelePage";

if (empty($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = NULL;
}
$pseudo = $_SESSION['pseudo'];

if (empty($_SESSION['pw'])){
    $_SESSION['pw'] = NULL;
}
$pw = $_SESSION['pw'];

// TIMER SESSION
//$_SESSION['tempsEcoule_session'] = ""; 
?>

<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include("head.php"); ?>

<!-- JavaScript de gestion des couleurs de code -->
<script defer src="../../styles/prism.js"></script>

<!-- script de gestion de l'apparition du contenu d'une section
     utile comme exemple dans le paragraphe traitant ce sujet -->
<script type="text/javascript">
function affichageConditionnel(bouton, id) {
    var div = document.getElementById(id);
    if(div.style.display=="none") { // si le div est masqué, on l'affiche et on change le contenu du bouton
        div.style.display = "block";
        bouton.innerHTML = "-";
    } else { // s'il est visible, on le masque et on change le contenu du bouton
        div.style.display = "none";
        bouton.innerHTML = "+";
    }
}</script>

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
src="https://cdn.mathjax.org/mathjax/latest/MathJax.js"></script>

<?php
// FUNCTIONS 
include("fonctionsPHP.php");
include("fonctionsJS.html");
?>

<!-- BODY -->
<body onload='startTime()'>

<!-- HEADER -->
<?php include("header.php"); ?>

<!-- PRINCIPAL -->
<section id="principal">

<!-- TABLE MATIERES -->
<?php include("tableMatieres.php"); ?>

<!-- GRAND CONTENU -->
<section id="grandContenu">

<?php include("../".$niveau."/cours/".$chapitre."/".$nomPage.".html"); ?>

</section> <!-- END GRAND CONTENU -->
</section> <!-- END PRINCIPAL -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>