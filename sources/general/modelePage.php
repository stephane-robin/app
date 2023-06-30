<?php
// model page for all course related pages
session_start();

$utilisateur = $_SESSION['utilisateur'];

$niveau = $_GET['niveau'];
$chapitre = $_GET['chapitre'];
$page = $_GET['page'];

if (empty($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = NULL;
}
$pseudo = $_SESSION['pseudo'];

if (empty($_SESSION['pw'])){
    $_SESSION['pw'] = NULL;
}
$pw = $_SESSION['pw'];

include("fonctionsPHP.php");
include("fonctionsJS.html");
include("head.php"); 
include("header.php");
include("titres.php");

// contenu de la page
echo "
<section class='principal'>

<h1 style='visibility:hidden;' id='hautPage'>Toketa</h1>

<h2>".$titres[$niveau][$chapitre][$page][0]."<br/>
<a href='https://www.youtube.com/channel/UCgCl1cAuhEa5RxCsV87cG4A/featured' target='_blank'>
<img src='../../images/general/youtubetoketa.png' alt='youtube' width='15%' style='margin-top:1%;border-radius:5px;'></a></h2>";

include("../".$niveau."/".$chapitre."/".$page.".html");

// gestion des pages precedentes et suivantes
$pagePrecedente = (string)((int)substr($page, 10) - 1);
$pageSuivante = (string)((int)substr($page, 10) + 1);
$textePrecedent = "&#9194; page précédente";
$texteSuivant = "page suivante &#9193;";

if ($page == "competence1"){
    $logoPrecedent = "";
    $textePrecedent = "........................................";
    $pagePrecedente = (string)((int)substr($page, 10));
}
if ($page == "competence".sizeof($titres[$niveau][$chapitre])){
    $logoSuivant = "";
    $texteSuivant = "........................................";
    $pageSuivante = (string)((int)substr($page, 10));
}

if (sizeof($titres[$niveau][$chapitre]) != 0){
    
    echo "
    <div class='bloc_ligne' style='margin-top:5%;display:grid;grid-template-columns:33%33%33%;'>
        <div class='bloc_colonne' style='margin-left:5%;'>
            <a href='modelePage.php?niveau=".$niveau."&chapitre=".$chapitre."&page=competence".
            $pagePrecedente."'>".$textePrecedent."</a>
        </div>
        <div class='bloc_colonne'>
            <a href='#hautPage'>Haut de page</a>
        </div>
        <div class='bloc_colonne'>
            <a href='modelePage.php?niveau=".$niveau."&chapitre=".$chapitre."&page=competence".
            $pageSuivante."'>".$texteSuivant."</a>
        </div>
    </div>
    ";
}

// fin de page
echo "</section>";
include("footer.php");
?>

</body>
</html>

