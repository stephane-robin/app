<?php
if ($page == "index"){
  $prefixeImages = "./images/general/";
  $prefixeSources = "./sources/general/";
}
else{
  $prefixeImages = "../../images/general/";
  $prefixeSources = "";
}
?>

<footer>

    <div class="bloc_ligne">

        <div class="bloc_colonne" style="margin-left:10%;">
            <p>LIENS UTILES</p>           
                <a href="https://realpython.com/" target="_blank">Real Python</a>
                <a href="https://docs.python.org/3/" target="_blank">Doc python</a>
                <a href="https://www.w3schools.com/" target="_blank">W3school</a>
                <a href="https://www.php.net/docs.php" target="_blank">Doc PHP</a>
                <a href="https://www.w3schools.com/charsets/ref_emoji.asp" target="_blank">Emoji unicode</a>
                <a href="https://tice.univ-irem.fr/lexique/res/Annexe_E_-_Liste_des_symboles_mathematiques_usuels__LaTeX_.pdf" target="_blank">Symboles LaTeX</a>
        </div>

        <?php
        echo "
        <div class='bloc_colonne' style='margin-left:20%;'>
            <p>NOUS RETROUVER</p>
            <div class='bloc_ligne'>
                <a href='mailto: contact@mytoketa.eu' target='_blank'><img src='".$prefixeImages."email4.png' alt='email' width=30px style='margin-bottom:15%;'></a>
                <a href='mailto: contact@mytoketa.eu' target='_blank' style='margin-left:7%;'>e-mail</a>
            </div>
            <div class='bloc_ligne'>
                <a href='' target='_blank'><img src='".$prefixeImages."linkedin1.png' alt='linkedin' width=30px style='margin-bottom:15%;'></a>
                <a href='' target='_blank' style='margin-left:7%;'>LinkedIn</a>
            </div>
            <div class='bloc_ligne'>
                <a href='' target='_blank'><img src='".$prefixeImages."facebook1.png' alt='facebook' width=30px style='margin-bottom:15%;'></a>
                <a href='' target='_blank' style='margin-left:7%;'>Facebook</a>
            </div>
            <div class='bloc_ligne'>
                <a href='https://www.youtube.com/channel/UCgCl1cAuhEa5RxCsV87cG4A/featured' target='_blank'><img src='".$prefixeImages."youtube1.png'; alt='youtube' width=30px></a>
                <a href='https://www.youtube.com/channel/UCgCl1cAuhEa5RxCsV87cG4A/featured' target='_blank' style='margin-left:7%;'>YouTube</a>
            </div>
        </div>

        <div class='bloc_colonne' style='margin-left:20%;'>
            <p>ToKeTa &copy 2021</p>
            <div class='bloc_ligne'>
                <img src='".$prefixeImages."symbole.png' alt='stephane robin' width=30px height=30px>
                <p style='margin-left:7%;margin-top:0%;font-size:1.1em;'>Stephane R.</p>
            </div>
            <a href='".$prefixeSources."modelePage.php?niveau=general&chapitre=cours&page=conditionsUtilisation' target='_blank'>Conditions d'utilisation</a>
        </div>
        ";
        ?>
    </div>

</footer>