<?php
session_start();
$_SESSION['utilisateur'] = "libre";
$_SESSION['niveau'] = NULL;
$_SESSION['nomClasse'] = NULL;
$_SESSION['chapitre'] = NULL;
$nomPage = NULL;
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
<body>

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
    <a class="choix" href="./sources/general/enseignant.php?typeUtilisateur=enseignant">

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
    <a class="choix" href="./sources/general/modelePage.php?nomClasse=Quatrieme&chapitre=fonctions&nomPage=competence1&typeUtilisateur=eleve">

    <div class="bloc_colonne" style="width:250px; margin-left:15%;">
        <div class="bloc_choix_titre" style="background-color:#ffff99;">
            <p style="text-align:center;">Espace Elève</p>
        </div>
        <div class="bloc_choix_contenu">
            <p style="text-align:left;">L'essentiel à retenir au sujet ...</p>
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