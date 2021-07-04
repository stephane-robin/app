<?php
// define the beginning of the path to the social media icons
if ($typePage == "index"){
    $preChemin = "./images/general/";  
}
else {
    $preChemin = "../../images/general/";
}
?>
<footer class="piedPage">

    <div class='bloc_ligne' style='margin-left: 45%;'>

        <a class="elt_socialMedia" href="https://ch.linkedin.com/in/stephane-robin" target="_blank" style="margin:.5%;"><img src='<?php echo $preChemin."linkedin.png"; ?>' alt="linkedin" width=30px></a>

        <a class="elt_socialMedia" href="https://www.facebook.com/" target="_blank" style="margin:.5%;"><img src="<?php echo $preChemin.'facebook.png'; ?>" alt="facebook" width=30px></a>

        <a class="elt_socialMedia" href="https://www.youtube.com/channel/UCgCl1cAuhEa5RxCsV87cG4A/featured" target="_blank" style="margin:.5%;"><img src="<?php echo $preChemin.'youtube.png'; ?>" alt="youtube" width=30px></a>

        <a class="elt_socialMedia" href="" target="_blank" style="margin:.5%;"><img src="<?php echo $preChemin.'share.png'; ?>" alt="partager" width=30px></a>

    </div>

    <div class="bloc_ligne">

        <div class="footerColumn">
            <p class="piedPageTitre">Liens utiles</p>
            <nav>
                <a class="footerNav" href="../../../memento/index.php" target="_blank">ToKeTa Memento</a>
                <a class="footerNav" href="" target="blank">ToKeTa Check</a>
                <a class="footerNav" href="https://realpython.com/" target="_blank">Real Python</a>
                <a class="footerNav" href="https://docs.python.org/3/" target="_blank">Doc python</a>
                <a class="footerNav" href="https://www.w3schools.com/" target="_blank">W3school</a>
            </nav>
        </div>
        <div class="footerColumn">
            <p class="piedPageTitre"></p>
            <nav>
                <a class="footerNav" href="https://www.php.net/docs.php" target="_blank">Doc PHP</a>
                <a class="footerNav" href="https://www.w3schools.com/colors/colors_picker.asp" target="_blank">Color picker</a>
                <a class="footerNav" href="https://www.w3schools.com/charsets/ref_emoji.asp" target="_blank">Emoji unicode</a>
            </nav>
        </div>

        <div class="footerColumn">
            <p class="piedPageTitre">Mentions légales</p>
            <nav>
                <a class="footerNav" href="" target="_blank">Politique de confidentialité</a>
                <a class="footerNav" href="" target="_blank">Conditions d'utilisation</a>
                <a class="footerNav" href="" target="_blank">Nous contacter</a>
                <a class="footerNav" href="administrateur.php">Administrateur</a>
                <p class="piedPageParagraphe">&copy 2021 ToKeTa</p>
            </nav>
        </div>

        <div class="footerColumn">
            <p class="piedPageTitre">Au sujet de l'auteur :</p>
            <div class="bloc_ligne">
                <?php
                // define path to the picture sr_square.png
                if ($typePage == "index"){
                    $chemin = "./images/general/sr_square.png";   
                }
                else {
                    $chemin = "../../images/general/sr_square.png";
                }
                ?>
                <img src='<?php echo $chemin; ?>' alt='stephane robin' width=30px height=30px>

                <p class="piedPageParagraphe" style="margin-left:2%;">Stephane Robin </p>
            </div>
        </div>

</div>

</footer>