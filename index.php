<?php
session_start();

if(isset($_GET['deconnexion'])){
    if ($_GET['deconnexion'] == "ok"){
        $_SESSION['utilisateur'] = "libre";
    }
}

if (!isset($_SESSION['utilisateur'])){
    $_SESSION['utilisateur'] = "libre";
}
$typeUtilisateur = $_SESSION['utilisateur'];

if (empty($_SESSION['niveau'])){
    $_SESSION['niveau'] = NULL;
}
$niveau = $_SESSION['niveau'];

if (empty($_SESSION['nomClasse'])){
   $_SESSION['nomClasse'] = NULL; 
}
$nomClasse = $_SESSION['nomClasse'];

if (empty($_SESSION['chapitre'])){
    $_SESSION['chapitre'] = NULL;
}
$chapitre = $_SESSION['chapitre'];

$nomPage = NULL;
$typePage = "index";

if (empty($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = NULL;
}
$pseudo = $_SESSION['pseudo'];

if (empty($_SESSION['pw'])){
    $_SESSION['pw'] = NULL;
}
$pw = $_SESSION['pw'];
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

<div class="bloc_ligne">

    <!-- BLOC ENSEIGNANT -->
    <a class="choix" href="sources/general/enseignant.php" style="width:45%;">
    <div class="bloc_colonne">
        <div class="bloc_choix_titre" style="background-image: url('images/general/enseignant.png'); height:200px;">
        </div>
        <div class="bloc_choix_contenu" style="height:100px;">
            <p style="text-align:center;">Espace Enseignant ...</p>
        </div>
    </div>
    </a>

    <!-- BLOC ELEVE -->
    <a class="choix" href="" style="width:45%; margin-left:5%;">
    <div class="bloc_colonne">
        <div class="bloc_choix_titre" style="background-image: url('images/general/newEleve2.jpeg'); height:200px;">
        </div>
        <div class="bloc_choix_contenu" style="height:100px;">
            <p style="text-align:center;">Espace Elève ...<br>(en construction)</p>
        </div>
    </div>
    </a>

</div>


<?php
//$output = shell_exec('python scriptPY.py');
//echo $output;
?>

</section> <!-- END GRAND CONTENU -->
</section> <!-- END PRINCIPAL -->

<!-- FOOTER -->
<?php include("./sources/general/footer.php"); ?>

</body>
</html>