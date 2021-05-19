<footer class="piedPage">

    <div class="footerColumn">
        <p class="piedPageTitre">Liens utiles</p>
        <nav>
            <a class="footerNav" href="https://www.w3schools.com/" target="_blank">W3school</a>
            <a class="footerNav" href="https://www.php.net/docs.php" target="blank">Doc PHP</a>
            <a class="footerNav" href="https://realpython.com/" target="_blank">Real python</a>
            <a class="footerNav" href="https://docs.python.org/3/" target="_blank">Doc python</a>
        </nav>
    </div>

    <div class="footerColumn">
        <p class="piedPageTitre">  </p>
        <nav>
            <a class="footerNav" href="https://www.w3schools.com/colors/colors_picker.asp" target="_blank">Color picker</a>
            <a class="footerNav" href="https://www.w3schools.com/charsets/ref_emoji.asp" target="_blank">Emoji unicode</a>
        </nav>
    </div>

    <div class="LargeFooterColumn">
        <p class="piedPageTitre">Mentions légales</p>

        <nav>
            <a class="footerNav" href="" target="_blank">Politique de confidentialité</a>
            <a class="footerNav" href="" target="_blank">Conditions d'utilisation</a>
            <a class="footerNav" href="" target="_blank">Nous contacter</a>
            <a class="footerNav" href="administrateur.php">Administrateur</a>
            <p class="piedPageParagraphe">&copy 2021 ToKeTa</p>
        </nav>
    </div>
    <div class="largeFooterColumn">
        <p class="piedPageTitre">Au sujet de l'auteur</p>
        <div class="bloc_ligne">

            <?php
            // define path to the picture sr_square.png
            if ($nomGroupe != "index"){
                $chemin = "../../images/general/sr_square.png";
            }
            else {
                $chemin = "./images/general/sr_square.png";
            }
            ?>
            <img src='<?php echo $chemin; ?>' alt='stephane robin' width=30px height=30px>

            <p class="piedPageParagraphe" style="margin-left:2%;">S. Robin</p>

        </div>
    </div>

</footer>