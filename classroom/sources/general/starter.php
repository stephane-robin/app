<?php 
session_start(); 
if (isset($_GET['nomClasse'])){
  $_SESSION['nomClasse'] = $_GET['nomClasse'];
}
$nomClasse = $_SESSION['nomClasse'];
$nomPage = $_GET['nomPage'];
?>

<!-- FONCTIONS -->
<?php include("fonctionsPHP.php"); ?>

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


<!-- FONCTIONS JS -->
<?php include "fonctionsJS.html"; ?>

<!-- HEADER -->
<?php include("header.php"); ?>

<!-- PRINCIPAL -->
<section id="principal">

<!-- GRAND CONTENU -->
<section id="grandContenu">

<?php include("../".$nomClasse."/Starter/".$nomPage.".php"); ?>


<!-- BACK BUTTON -->
<form action="pageWorkshop.php" method="post">
	<button class="bouton" style='margin-bottom: 5%; margin-top: 5%; margin-left:42%;' type="submit">&#128218; Back</button>
</form>


</section> <!-- end GRAND CONTENU -->
</section>  <!-- end PRINCIPAL -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>
