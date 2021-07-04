<?php
session_start();
$typeUtilisateur = $_SESSION['utilisateur'];
$_SESSION['niveau'] = $_GET['niveau'];
$niveau = $_SESSION['niveau'];
$_SESSION['nomClasse'] = $_GET['nomClasse'];
$nomClasse = $_SESSION['nomClasse'];
$_SESSION['chapitre'] = $_GET['chapitre'];
$chapitre = $_SESSION['chapitre'];
$typePage = "modelePage";
$nomPage = $_GET['nomPage'];


// TIMER SESSION
$_SESSION['tempsEcoule_session'] = ""; 
?>

<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include("head.php"); ?>

<!-- JavaScript de gestion des couleurs de code -->
<script defer src="../../styles/prism.js"></script>

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