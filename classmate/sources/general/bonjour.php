<?php 
session_start();
$_SESSION['utilisateur'] = "enseignant";
$typeUtilisateur = $_SESSION['utilisateur'];
$niveau = $_SESSION['niveau'];
$nomClasse = $_SESSION['nomClasse'];
$chapitre = $_SESSION['chapitre'];
$typePage = "bonjour";
$nomPage = Null;
$_SESSION['pseudo'] = $_POST['pseudo'];
?>

<!DOCTYPE HTML>
<html>

<?php 
// HEAD
include("head.php");

// FUNCTIONS 
include("fonctionsPHP.php");
include("fonctionsJS.html");
?>

<!-- BODY -->
<body>

<!-- HEADER -->
<?php include("header.php"); ?>

<!-- PRINCIPAL -->
<section id="principal">

<!-- TABLE MATIERES -->
<?php include("tableMatieres.php"); ?>

<!-- GRAND CONTENU -->
<section id="grandContenu">

<p>Bienvenue <?php echo $_SESSION['pseudo']; ?></p>

</section> <!-- END GRAND CONTENU -->
</section> <!-- END PRINCIPAL -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>
