<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include("../general/head.html"); ?>

<!-- JavaScript de gestion des couleurs de code -->
<script defer src="../../styles/prism.js"></script>

<?php include "fonctionsJS.html"; ?>

<!-- script de gestion de l'apparition du contenu d'une section
     utile comme exemple dans le paragraphe traitant ce sujet -->
<script type="text/javascript">
function affichageConditionnel(bouton, id) {
    var div = document.getElementById(id);
    if(div.style.display=="none") { // si le div est masqué, on l'affiche et on change le contenu du bouton
        div.style.display = "block";
        bouton.innerHTML = "-";
    } else { // s'il est visible, on le masque et on change le contenu du bouton
        div.style.display = "none";
        bouton.innerHTML = "+";
    }
}</script>

<!-- BODY -->
<body>

<!-- DEFINE PAGE NAME -->
<?php 
if (isset($_GET['nomPage'])){
  $nomPage = $_GET['nomPage'];
  $nomGroupe = $_GET['nomGroupe'];
}
?>

<!-- HEADER -->
<?php include("../".$nomGroupe."/header.html"); ?>

<!-- PRINCIPAL -->
<section id="principal">

<?php include("../".$nomGroupe."/".$nomPage); ?>

</section> <!-- END PRINCIPAL -->

<!--
<aside id="chapitres">
  <nav>
    <fieldset2>
        <a title="accueil du site" href="../index.html"><img class="logo" src="../../images/general/logoAccueil.png" alt="Accueil" /></a>
        <a title="accueil de la partie Web" href="web.html"><img class="logo" src="../../images/general/logoWeb.png" alt="Web" /></a>
        <a title="accueil de la partie Appli" href="../appli/appli.html"><img class="logo" src="../../images/general/logoAppli.png" alt="Appli" /></a>
    </fieldset2>
  </nav>
</aside>
-->

<!-- FOOTER -->
<?php include("footer.html"); ?>

</body>
</html>
