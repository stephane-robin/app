<?php
session_start();
$nomClasse = $_SESSION['nomClasse'];
$chapitre = $_SESSION['chapitre'];
$nomPage = NULL;
$typePage = "quizz";

// TIMER SESSION
$_SESSION['tempsEcoule_session'] = "";
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

<!-- TABLE DES MATIERES -->
<?php include("tableMatieres.php"); ?>

<!-- GRAND CONTENU -->
<section id="grandContenu">

  <h2>Quizz</h2>

<p style='color:#666633;'>Choisis un chapitre, mesure toi aux questions du test, et monte au niveau supérieur avec plus de 66 % de réponses justes... Tu pourras essayer autant de fois que tu le souhaites.</p>

<?php
// checking the answers
if (isset($_POST['q1']) and isset($_POST['q2']) and isset($_POST['q3'])){
  $nbrePoints = 0;
  if ($_POST['q1'] == "True"){
    $nbrePoints += 1;
  }
  if ($_POST['q2'] == "True"){
    $nbrePoints += 1;
  }
  if ($_POST['q3'] == "True"){
  $nbrePoints += 1;
  }
  $pourcentage = round(100 * $nbrePoints / 3);
  echo "<p style='margin-left:3%; color:green;'>".$pourcentage." % de réponses justes.</p>"; 
}

if (isset($_GET['chapitre'])){
  $chapitre = $_GET['chapitre'];
  echo "<h3>".$chapitre."</h3>";

  echo "<form style='margin-left:3%; margin-top:1%; margin-bottom:1%;' action='' method='post'>";

    $compteurQuestion = 0;

    for ($i=1; $i<5; $i++){
      include("../".$nomClasse."/starter/".$chapitre."/competence".$i.".php");
    }
  
    echo "<button class='bouton' style='margin-left:1%; margin-top:4%;' type='submit'>Valider</button>";

  echo "</form>";
}
?>

</section> <!-- END GRAND CONTENU -->
</section> <!-- END PRINCIPAL -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>