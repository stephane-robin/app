<header>
    <h1> ToKeTa - <em style="font-size:0.8em;">Classmate</em> </h1>
    <nav id="bandeau">

    <?php
    if ($typePage == "index"){
        $prefixeAccueil = "";
        $prefixeModelePage = "./sources/general/";
    }
    else if($typeUtilisateur == "libre"){
        $prefixeAccueil = "../../";
        $prefixeModelePage = "";
    }
    ?>

    <div class="contour_a">
        <a class="element" href="<?php echo $prefixeAccueil; ?>index.php">ACCUEIL</a>
    </div>
    <div class="contour_a">
        <a class="element" href="<?php echo $prefixeModelePage; ?>modelePage.php?niveau=quatrieme&nomClasse=quatrieme_0&chapitre=fonctions&nomPage=competence1">MATH QUATRIEME</a>
    </div>
    <div class="contour_a">
        <a class="element" href="<?php echo $prefixeModelePage; ?>modelePage.php?niveau=seconde&nomClasse=seconde_0&chapitre=python&nomPage=competence1">MATH SECONDE</a>
    </div>
    <div class="contour_a">
        <a class="element" href="<?php echo $prefixeModelePage; ?>modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence1">SNT SECONDE</a>
    </div>
    <div class="contour_a">
        <a class="element" href="<?php echo $prefixeModelePage; ?>modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence1">NSI TERMINALE</a>
    </div>

<!--
    
        else {
            echo '<div class="contour_a">';
                echo '<a class="element" href="../../index.php">ACCUEIL</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="pageWorkshop.php?nomClasse='.$nomClasse.'">TRAVAIL DE GROUPE</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="modelePage.php?nomClasse='.$nomClasse.'&nomPage=competence1&chapitre=fonctions">COURS</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo "<a class='element' href='quizz.php?nomClasse=".$nomClasse."&chapitre=fonctions'>QUIZZ</a>";
            echo '</div>';
            echo '<div class="contour_a">';
                echo "<a class='element' href='nummath.php?nomClasse=".$nomClasse."&chapitre=".$chapitre."'>NUM.MATH</a>";
            echo '</div>';
        }
        ?>-->
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
    'fonctions' => 'Fonctions'
)
?>

<div class="sousHeader">
    
    <?php
    if ($typePage == "index"){
        echo "<p class='sp' style='margin-left:2%;'></p>";
    } 
    else{
        echo "<p class='sp' style='margin-left:2%;'>".strtoupper($niveau)." - ".$dico[$chapitre]."</p>";
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