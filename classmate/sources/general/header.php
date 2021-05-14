<header>
    <h1> ToKeTa - <em>Classmate</em> </h1>
    <nav id="bandeau">

        <?php
        if ($typePage == "index"){
            echo '<div class="contour_a">';
                echo '<a class="element" href="">ACCUEIL</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="./sources/general/modelePage.php?nomClasse=Sixieme&nomPage=sixieme_generalites_fonctions.html">SIXIEME</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="./sources/general/modelePage.php?nomClasse=Quatrieme&nomPage=competence1&chapitre=fonctions">QUATRIEME</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="./sources/general/modelePage.php?nomClasse=Seconde">SECONDE</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="./sources/general/modelePage.php?nomClasse=SNT">SNT</a>';
            echo '</div>';
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
    <p class='sp' style='margin-left:2%;'><?php echo date('F j, Y')."   &#9201;    " ?><span id='txt'></span></p>
</div>