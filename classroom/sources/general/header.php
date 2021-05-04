<header>
    <h1> ToKeTa - <em>Classroom</em> </h1>
    <nav id="bandeau">

        <?php
        if ($nomPage == "index"){
            echo '<div class="contour_a">';
                echo '<a class="element" href="">ACCUEIL</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="./sources/general/modelePage.php?nomClasse=Sixieme&nomPage=sixieme_generalites_fonctions.html">SIXIEME</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="./sources/general/modelePage.php?nomClasse=Quatrieme&nomPage=fonction_competence1">QUATRIEME</a>';
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
                echo '<a class="element" href="modelePage.php?nomClasse='.$nomClasse.'&nomPage=fonction_competence1">COURS</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="quizz.php?nomClasse='.$nomClasse.'">QUIZZ</a>';
            echo '</div>';
            echo '<div class="contour_a">';
                echo '<a class="element" href="nummath.php?nomClasse='.$nomClasse.'">NUM.MATH</a>';
            echo '</div>';
            echo '<div class="contour_a">';
            echo '<a class="element" href="starter.php?nomClasse='.$nomClasse.'&nomPage='.$nomPage.'">STARTER</a>';
            echo '</div>';
        }
        ?>
    </nav>
</header>

<?php
// define the beginning of the path to the social media icons
if ($nomPage == "index"){
    $preChemin = "./images/general/";  
}
else {
    $preChemin = "../../images/general/";
}
?>
<div class="sousHeader">
    <a class="elt_socialMedia" href="https://www.linkedin.com/" target="_blank" style="margin:.5%;"><img src='<?php echo $preChemin."linkedin.png"; ?>' alt="linkedin" width=30px></a>

    <a class="elt_socialMedia" href="https://twitter.com/" target="_blank" style="margin:0.5%;"><img src="<?php echo $preChemin.'twitter.png'; ?>" alt="twitter" width=30px></a>

    <a class="elt_socialMedia" href="https://www.facebook.com/" target="_blank" style="margin:.5%;"><img src="<?php echo $preChemin.'facebook.png'; ?>" alt="facebook" width=30px></a>

    <a class="elt_socialMedia" href="https://www.youtube.com/" target="_blank" style="margin:.5%;"><img src="<?php echo $preChemin.'youtube.png'; ?>" alt="youtube" width=30px></a>

    <a class="elt_socialMedia" href="https://www.instagram.com/" target="_blank" style="margin:.5%;"><img src="<?php echo $preChemin.'instagram.png'; ?>" alt="instagram" width=30px></a>

    <a class="elt_socialMedia" href="https://www.pinterest.com/" target="_blank" style="margin:.5%;"><img src="<?php echo $preChemin.'pinterest.png'; ?>" alt="pinterest" width=30px></a>

    <a class="elt_socialMedia" href="https://www.whatsapp.com/" target="_blank" style="margin:.5%;"><img src="<?php echo $preChemin.'whatsapp.png'; ?>" alt="whatsapp" width=30px></a>

    <a class="elt_socialMedia" href="https://www.tiktok.com/" target="_blank" style="margin:0.5%;"><img src="<?php echo $preChemin.'tiktok.png'; ?>" alt="tiktok" width=30px></a>

    <a class="elt_socialMedia" href="https://www.snapchat.com/" target="_blank" style="margin:.5%;"><img src="<?php echo $preChemin.'snapchat.png'; ?>" alt="snapchat" width=30px></a>

    <a class="elt_socialMedia" href="" target="_blank" style="margin:.5%;"><img src="<?php echo $preChemin.'share.png'; ?>" alt="partager" width=30px></a>
</div>