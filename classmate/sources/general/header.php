<header>
    <h1> ToKeTa - <em>Classmate</em> </h1>
    <nav id="bandeau">

        <?php
        if ($typePage == "index"){
    
            echo '<div class="contour_a">';
                echo '<a class="element" href="">ACCUEIL</a>';
            echo '</div>';
            //echo '<div class="contour_a">';
                //echo '<a class="element" href="./sources/general/modelePage.php?niveau=sixieme&nomClasse=sixieme_0&chapitre=neamt%nomPage=competence1">MATH SIXIEME</a>';
            //echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="./sources/general/modelePage.php?niveau=quatrieme&nomClasse=quatrieme_0&chapitre=fonctions&nomPage=competence1">MATH QUATRIEME</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="./sources/general/modelePage.php?niveau=seconde&nomClasse=seconde_0&chapitre=python&nomPage=competence1">MATH SECONDE</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="./sources/general/modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=variables">SNT</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="./sources/general/modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=variables">NSI</a>';
            echo '</div>';
        }
        else if($typeUtilisateur == "libre"){
            echo '<div class="contour_a">';
                echo '<a class="element" href="../../index.php">ACCUEIL</a>';
            echo '</div>';
            //echo '<div class="contour_a">';
                //echo '<a class="element" href="./sources/general/modelePage.php?niveau=sixieme&nomClasse=sixieme_0&chapitre=neamt%nomPage=competence1">MATH SIXIEME</a>';
            //echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="modelePage.php?niveau=quatrieme&nomClasse=quatrieme_0&chapitre=fonctions&nomPage=competence1">MATH QUATRIEME</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="modelePage.php?niveau=seconde&nomClasse=seconde_0&chapitre=python&nomPage=competence1">MATH SECONDE</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence1">SNT</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="./sources/general/modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=variables">NSI</a>';
            echo '</div>';
        }
        else if ($typePage == "bonjour"){
            
            echo '<div class="contour_a">';
                echo '<a class="element" href="../../index.php">ACCUEIL</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="pageWorkshop.php?niveau=sixieme&nomClasse=sixieme_B4">6B4</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fonctions&nomPage=competence1">4F1</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="modelePage.php?niveau=seconde&nomClasse=seconde_B2&chapitre=python&nomPage=competence1">2B2</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="modelePage.php?niveau=snt&nomClasse=snt_3&chapitre=python&nomPage=variables">SNT</a>';
            echo '</div>';
        }
        else if ($typePage == "enseignant" OR $typePage == "eleve") {

        }
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
        ?>
    </nav>
</header>


<div class="sousHeader">
    <?php 
    if ($typePage == "index" or $typePage == "enseignant" or $typePage == "eleve"){
        echo "<p class='sp' style='margin-left:2%;'>Bienvenue. Vous pouvez accéder aux cours sans connexion.</p>";
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
</div>