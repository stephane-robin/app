<?php
session_start();
$nomClasse = $_SESSION['nomClasse'];
$chapitre = $_SESSION['chapitre'];
$nomPage = NULL;
$typePage = "nummath";
?>

<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include("head.php"); ?>

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

<p>En construction</p>

</section> <!-- END GRAND CONTENU -->
</section> <!-- END PRINCIPAL -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>