<header>
    <nav id="bandeau" style="margin-left:20%;">

    <?php
    if ($typePage == "index"){
        $prefixeAccueil = "";
        $prefixeModelePage = "./sources/general/";
    }
    else if($typePage == "modelePage" or $typePage == "modeleQuizz" or $typePage == "eleve" or $typePage == "enseignant" or $typePage == "pageWorkshop"){
        $prefixeAccueil = "../../";
        $prefixeModelePage = "";
    }
    ?>

    <div class="contour_a">
        <a class="element" href="<?php echo $prefixeAccueil; ?>index.php">ACCUEIL</a>
    </div>
    <div class="contour_a">
        <a class="element" href="<?php echo $prefixeModelePage; ?>modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fractions&nomPage=competence1">MATH QUATRIEME</a>
    </div>
    <div class="contour_a">
        <a class="element" href="<?php echo $prefixeModelePage; ?>modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=nombresReels&nomPage=competence1">MATH SECONDE</a>
    </div>
    <div class="contour_a">
        <a class="element" href="<?php echo $prefixeModelePage; ?>modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence1">SNT SECONDE</a>
    </div>
    <div class="contour_a">
        <a class="element" href="<?php echo $prefixeModelePage; ?>modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence1">NSI TERMINALE</a>
    </div>
    <div class="contour_a">
        <a class="element" href="<?php echo $prefixeModelePage; ?>modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&nomPage=competence1">MEMENTO</a>
    </div>

    </nav>
</header>

<?php
$dico = array(
    'algorithmique' => 'Algorithmique',
    'base_donnees' => 'Bases de données',
    'programmation' => 'Programmation',
    'python' => 'Python',
    'reseaux' => 'Réseaux',
    'structures_donnees' => 'Structures de données',
    'internet' => 'Internet',
    'localisation' => 'Localisation',
    'reseaux_sociaux' => 'Réseaux sociaux',
    'fonctions' => 'Fonctions',
    'racinesCarrees' => 'Racines carréées',
    'calcul_numerique' => 'Calcul numérique',
    'calculLitteral' => 'Calcul littéral',
    'html' => 'HTML',
    'css' => 'CSS',
    'javascript' => 'Javascript',
    'java' => 'Java',
    'linux' => 'Linux',
    'git' => 'Git',
    'c' => 'C',
    'fractions' => 'Fractions',
    'equations' => 'Equations',
    'projets' => 'Projets',
    'php' => 'PHP',
    'statistiques' => 'Statistique descriptive',
    'puissances' => 'Puissances',
    'probabilites' => 'Probabilités',
    'valeurAbsolue' => 'Valeur absolue',
    'nombresReels' => 'Nombres réels',
    'multiple_diviseur' => 'Multiples diviseurs',
    'inéquations' => 'Inéquations',
    'courbes' => 'Courbes de fonctions',
    'variations' => 'Variations de fonctions',
    'droites' => 'Droites du plan'
);

?>

<div class="sousHeader">
    
    <?php
    if ($typePage == "index" or $typePage == "enseignant" or $typePage == "eleve"){
        echo "<p class='sp' style='margin-left:2%;'></p>";
    } 
    else{
        echo "<p class='sp' style='margin-left:2%;' title='déconexion'><a href='".$prefixeAccueil."index.php?deconnexion=ok'>&#128100;</a> | ".strtoupper($niveau)." - ".$dico[$chapitre]." - ".afficher_atelier($typeUtilisateur, $prefixeModelePage)."</p>";
    }
    ?>
    <!--
    
    if ($typePage == "index" or $typePage == "enseignant" or $typePage == "eleve"){
        echo "<p class='sp' style='margin-left:2%;'></p>";
    } 

    //else{
        //echo "<p class='sp' style='margin-left:2%;'>Bienvenue en ".transformer_nomClasseFormate_nomClasse($nomClasse)." | ".date('F j, Y')."   &#9201;    <span id='txt'></span></p>";
    
        //if ($typePage == "modelePage"){
            //echo "<form style='margin-left:60%; margin-top:1%; margin-bottom:1%;' action='starter.php?nomClasse=".$nomClasse."&chapitre=".$chapitre."&nomPage=".$nomPage."' method='post'>";
                //echo "<button class='bouton' style='margin-left:3%; margin-top:2%; margin-bottom:2%;' type='submit'>Starter</button>";
            //echo "</form>";
        //}
    //} 
    ?>
-->
</div>