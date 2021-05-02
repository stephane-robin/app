<?php
session_start();
$_SESSION['nomClasse'] = $_GET['nomClasse'];
$nomClasse = $_SESSION['nomClasse'];
?>

<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<head>
  <title> ToKeTa-Classroom </title>
  <link rel="stylesheet" href="../../styles/style_classroom3.css">
  <link rel="stylesheet" href="../../styles/prism.css">
    <link rel="icon"
          type="image/png"
          href="../../images/general/symbole.png">
  <meta charset="utf-8">
</head>

<!-- BODY -->
<body>

<!-- HEADER -->
<?php include("header.php"); ?>

<!-- PRINCIPAL -->
<section id="principal">

<!-- TABLE MATIERES -->
<aside id="table_matieres">
    <div id="fieldsetTableMatieres">
    <p>Actualités : </p>
</div>
</aside>

<!-- GRAND CONTENU -->
<section id="grandContenu">

<!-- BANDEAU -->
<!-- print the name of the class without classe_ -->
<h2>Classe de <?php echo substr($nomClasse, 6)?></h2>

<div class="bloc_ligne" style="margin-left:15%;">

    <!-- BLOC 1 -->
    <a class="choix" href="pageWorkshop.php?nomClasse=<?php echo $nomClasse ?>">
    <div class="bloc_colonne" style="width:250px;">
        <div class="bloc_choix_titre" style="background-color:#ff6666;">
            <p style="text-align:center;">Travail de groupe</p>
        </div>
        <div class="bloc_choix_contenu">
            <p style="text-align:left;">L'essentiel à retenir au sujet ...</p>
        </div>
    </div>
    </a>

    <!-- BLOC 2 -->
    <a class="choix" href="modelePage.php?nomClasse=<?php echo $nomClasse ?>">

    <div class="bloc_colonne" style="width:250px; margin-left:15%;">
        <div class="bloc_choix_titre" style="background-color: #ffccff;">
            <p style="text-align:center;">Cours</p>
        </div>
        <div class="bloc_choix_contenu">
            <p style="text-align:left;">L'essentiel à retenu au sujet de...</p>
        </div>
    </div>
    </a>
</div>

<div class="bloc_ligne" style="margin-left:15%; margin-top:5%;">

    <!-- BLOC 3 -->
    <a class="choix" href="quizz.php?nomClasse=<?php echo $nomClasse ?>">
    <div class="bloc_colonne" style="width:250px;">
        <div class="bloc_choix_titre" style="background-color: #ff9966;">
            <p style="text-align:center;">Quizz</p>
        </div>
        <div class="bloc_choix_contenu">
            <p style="text-align:left;">L'essentiel à retenir au sujet de...</p>
        </div>
    </div>
    </a>

    <!-- BLOC 4 -->
    <a class="choix" href="mathnum.php?nomClasse=<?php echo $nomClasse ?>">
    <div class="bloc_colonne" style="width:250px; margin-left:15%;">
        <div class="bloc_choix_titre" style="background-color: #99ffbb;">
            <p style="text-align:center;">Math.num</p>
        </div>
        <div class="bloc_choix_contenu">
            <p style="text-align:left;">L'essentiel à retenu au sujet de...</p>
        </div>
    </div>
    </a>

</div>

</section> <!-- END GRAND CONTENU -->
</section> <!-- END PRINCIPAL -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>