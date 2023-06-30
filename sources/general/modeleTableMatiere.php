<?php
// model page for all course related pages
session_start();

$utilisateur = $_SESSION['utilisateur'];

$niveau = $_GET['niveau'];
$chapitre = NULL;
$page = NULL;

if (empty($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = NULL;
}
$pseudo = $_SESSION['pseudo'];

if (empty($_SESSION['pw'])){
    $_SESSION['pw'] = NULL;
}
$pw = $_SESSION['pw'];

////////////
// FUNCTIONS
////////////
include("fonctionsPHP.php");
include("fonctionsJS.html");

// dictionnaire des chapitres
/*
$dico = [
    'debuter' => 'Débuter en Python',
    'calcul_numerique' => 'Calcul numérique',
    'progresser' => 'Progresser en Python',
    'avance' => 'Python avancé',
    'calcul_litteral' => 'Calcul littéral',
    'calcul' => 'Notions de base',
    'fonctions'=> 'Fonctions',
    'statistiques' => 'Statistiques probabilités',
    'probabilites'=> 'Probabilités',
    'multiples' => 'Multiples, diviseurs',
    'nombres_reels' => 'Nombres réels',
    'debuter_web' => 'HTML-CSS',
    'internet' => 'Internet',
    'reseaux_sociaux' => 'Réseaux sociaux',
    'localisation' => 'Localisation',
    'programmation' => 'Langages et programmation',
    'donnees_structurees' => 'Données structurées',
    'structures_donnees' => 'Structures de données',
    'objets_connectes' => 'Objets connectés',
    'photographie' => 'Photographie numérique',
    'debuter_web' => 'Bien débuter en HTML',
    'base_donnees' => 'Les bases de données',
    'reseaux' => 'Réseaux',
    'python' => '',
    'architecture' => 'Architecture matérielle',
    'javascript' => 'JavaScript'
];*/
?>

<?php include("head.php"); ?>

<?php include("header.php"); ?>

<section class='principal'>

<?php 
include("titres.php");

function afficherTableMatieres($titres, $niveau, $chapitre){
    foreach($titres[$niveau][$chapitre] as $cle => $valeur){
        if($valeur[1] == "Activité"){
            $logo = "&#127922;";
        }
        elseif($valeur[1] == "Travail Pratique"){
            $logo = "&#128165;";
        }
        else{
            $logo = "&#128215;";
        }
        echo "
        <a href='modelePage.php?niveau=".$niveau."&chapitre=".$chapitre."&page=".$cle."'>".$logo." ".$valeur[0]."</a>";
    }
};

include("../".$niveau."/".$niveau.".php"); ?>

</section>

<?php include("footer.php"); ?>

</body>
</html>