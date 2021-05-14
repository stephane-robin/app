<?php

$typePage = "index";
?>

<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include("./sources/general/head.php"); ?>

<?php
// FUNCTIONS 
include("./sources/general/fonctionsPHP.php");
include("./sources/general/fonctionsJS.html");
?>

<!-- BODY -->
<body onload='startTime()'>

<!-- HEADER -->
<?php include("./sources/general/header.php"); ?>

<!-- PRINCIPAL -->
<section id="principal">

<!-- TABLE MATIERES -->
<?php include("./sources/general/tableMatieres.php"); ?>

<!-- GRAND CONTENU -->
<section id="grandContenu">

<!-- BANDEAU -->
<h2>Mon classeur de travail</h2>

<div class="bloc_ligne" style="margin-left:15%;">

    <!-- BLOC 00 -->
    <a class="choix" href="./sources/general/modelePage.php?nomClasse=Sixieme">

    <div class="bloc_colonne" style="width:250px;">
        <div class="bloc_choix_titre" style="background-color:#669999;">
            <p style="text-align:center;">Espace Enseignant</p>
        </div>
        <div class="bloc_choix_contenu">
            <p style="text-align:left;">L'essentiel à retenir au sujet ...</p>
        </div>
    </div>

    </a>

    <!-- BLOC 0 -->
    <a class="choix" href="./sources/general/modelePage.php?nomClasse=Sixieme">

    <div class="bloc_colonne" style="width:250px; margin-left:15%;">
        <div class="bloc_choix_titre" style="background-color:#ffff99;">
            <p style="text-align:center;">Espace Etudiant</p>
        </div>
        <div class="bloc_choix_contenu">
            <p style="text-align:left;">L'essentiel à retenir au sujet ...</p>
        </div>
    </div>

    </a>

</div>

<div class="bloc_ligne" style="margin-left:15%; margin-top:5%;">

    <!-- BLOC 1 -->
    <a class="choix" href="./sources/general/modelePage.php?nomClasse=Sixieme&nomPage=sixieme_generalitesFonctions.html">

    <div class="bloc_colonne" style="width:250px;">
        <div class="bloc_choix_titre" style="background-color:#ff6666;">
            <p style="text-align:center;">Classe de Sixième</p>
        </div>
        <div class="bloc_choix_contenu">
            <p style="text-align:left;">L'essentiel à retenir au sujet ...</p>
        </div>
    </div>

    </a>

    <!-- BLOC 2 -->
    <a class="choix" href="./sources/general/modelePage.php?nomClasse=Quatrieme&nomPage=competence1&chapitre=fonctions">

    <div class="bloc_colonne" style="width:250px; margin-left:15%;">
        <div class="bloc_choix_titre" style="background-color: #ffccff;">
            <p style="text-align:center;">Classe de Quatrième</p>
        </div>
        <div class="bloc_choix_contenu">
            <p style="text-align:left;">L'essentiel à retenu au sujet de...</p>
        </div>
    </div>

    </a>

</div>

<div class="bloc_ligne" style="margin-left:15%; margin-top:5%;">

    <!-- BLOC 3 -->
    <a class="choix" href="./sources/general/modelePage.php?nomClasse=Seconde">
    <div class="bloc_colonne" style="width:250px;">
        <div class="bloc_choix_titre" style="background-color: #ff9966;">
            <p style="text-align:center;">Classe de Seconde</p>
        </div>
        <div class="bloc_choix_contenu">
            <p style="text-align:left;">L'essentiel à retenir au sujet de...</p>
        </div>
    </div>
    </a>

    <!-- BLOC 4 -->
    <a class="choix" href="./sources/general/modelePage.php?nomClasse=SNT">

    <div class="bloc_colonne" style="width:250px; margin-left:15%;">
        <div class="bloc_choix_titre" style="background-color: #99ffbb;">
            <p style="text-align:center;">Classe de SNT</p>
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
<?php include("./sources/general/footer.php"); ?>

</body>
</html>