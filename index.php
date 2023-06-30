<?php
session_start();

/*if(isset($_GET['deconnexion'])){
    if ($_GET['deconnexion'] == "ok"){
        $_SESSION['utilisateur'] = "libre";
    }
}*/
if (!isset($_SESSION['utilisateur'])){
    $_SESSION['utilisateur'] = "libre";
}
$utilisateur = $_SESSION['utilisateur'];

$niveau = NULL;
$classe = NULL;
$chapitre = NULL;
$page = "index";

if (!isset($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = NULL;
}
$pseudo = $_SESSION['pseudo'];
if (!isset($_SESSION['pw'])){
    $_SESSION['pw'] = NULL;
}
$pw = $_SESSION['pw'];

include("./sources/general/fonctionsPHP.php");
include("./sources/general/head.php"); 
include("./sources/general/header.php"); 
?>



<!--
<header>
<img src="images/general/symbole_circulaire.png" alt="symbole toketa" width=2% height=2% style="margin-top:0.5%;">
<h1>ToKeTa</h1>
           
 menu de navigation pour ecran smartphone/tablette 
 menu des niveaux 
<ul class='navig_smartphone'> 
    <li class='dropdown'><a class='dropbtn' href='javascript:void(0)' style='font-size:1.5em;'>&#9776;</a>
        <div class='dropdown-content'>  
            <a href=''>ACCUEIL</a>
            <a href='sources/general/modelePage.php?niveau=maths&chapitre=calcul&page=competence1'>OUTILS MATHEMATIQUES</a>        
            <a href='sources/general/modelePage.php?niveau=nsi&chapitre=internet&page=competence1'>SCIENCES NUMERIQUES</a>        
            <a href='sources/general/modelePage.php?niveau=python&chapitre=debuter&page=competence1'>PYTHON</a>
            <a href='sources/general/modelePage.php?niveau=web&chapitre=debuter_web&page=competence1'>HTML CSS JS</a>
        </div>
    </li>
</ul>

 menu de navigation pour ecran laptop/dektop 
<ul id='navig_laptop'>
    <li><a href='../../index.php'><br/>Accueil</a></li>

    <li><a href='sources/general/modeleTableMatiere.php?niveau=maths'>Outils<br/>mathématiques</a></li>
    
    <li><a href='sources/general/modeleTableMatiere.php?niveau=nsi'>Sciences<br/>numériques</a></li>
    
    <li><a href='sources/general/modeleTableMatiere.php?niveau=python'><br/>Python</a></li>
    
    <li><a href='sources/general/modeleTableMatiere.php?niveau=web'>HTML/CSS<br/>JavaScript</a></li>

    <li><div class='bouton' style='margin-top:10%;'>Connexion</div></li>
</ul>  
</header> 
-->

<style>
* {
    box-sizing: border-box;
}

.mySlides {
    display: none;
}

img {
    vertical-align: middle;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 2s;
}

@keyframes fade {
  from {opacity: .2;} 
  to {opacity: 1;}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {
    font-size: 11px;
}
}
</style>

<section class='principal'>

<h1 style='visibility:hidden;'>Toketa</h1>



<!--
    TOURNIQUET PHOTOS
<div class="bloc_ligne" style="margin-top:5%;">
    <div class="slideshow-container" style="margin:auto;">
        <div class="mySlides fade">
            <img src="./images/general/index_calcul_litteral.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="./images/general/index_fonction.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="./images/general/index_probabilite.png" style="width:100%">
        </div>
    </div>

    <div style="border:5px white;border-style:solid none;padding:10px;border-radius:50%;width:120px;text-align:center;margin:auto;">
        <p style="rotate:30deg;">creative<br/>IDEAS<br/>thinking</p>
    </div>
</div>
-->

<!-- LOGO CREATIVE IDEAS -->
<div style="border:7px white;border-style:solid none;padding:13px;border-radius:50%;width:120px;text-align:center;margin-top:5%;margin:auto;">
    <p style="rotate:30deg;">creative<br/>ideas</p>
</div>

<!-- INTRODUCTION -->
<p style='margin-top:5%;'>Ne restez pas bloqué devant une difficulté. Des conseils, 
des astuces, <span style='font-family:Arial;'>ToKeTa</span> s'adresse à tous ceux qui s'intéressent à 
l'informatique et aux mathématiques, et cherchent à optimiser leur travail.</p>

<p>Vous trouverez des résumés de cours par compétence, des points clés à retenir, des fiches mémo, des 
travaux pratiques, mais également des quiz où vous pourrez mesurer facilement votre niveau compréhension.</p>

<p>Vous pourrez aussi apprendre les bases de différents langages de programmation, en vous entraînant sur des 
    projets concrets, ou encore renforcer vos capacités de mémoire et de concentration en pratiquant des 
    jeux simples.</p> 


<!-- IMAGES PRESENTATION -->
<div class="gridContainerIndex2">

<div class="gridItemIndex2">   
    <div class="stage" style="border-top-left-radius:20px;">
        <div class="actor">
            <img src="./images/general/index10.jpg" width=100%>  
        </div>  
    </div>
</div>

<div class="gridItemIndex2">
    <div class="bloc_colonne" style="flex-basis:50%;margin:0%;">
        <h2 style="padding-left:3%;">Pratiquez les quiz ...</h2>
        <ul style="padding-left:40%;">
            <li>Python</li>
            <li>Statistiques</li>
            <li>Fractions</li>
            <li>Calcul littéral</li>
        </ul>
    </div>
</div>

<div class="gridItemIndex2">
    <div class="bloc_colonne" style="flex-basis:50%;margin:0%;">
        <h2 style="padding-left:3%;">Essayez les travaux pratiques ...</h2>
        <ul style="padding-left:30%;">
            <li>Python</li>
            <li>Statistiques</li>
            <li>Calcul numérique</li>
            <li>Calcul littéral</li>
        </ul>
    </div>
</div>

<div class="gridItemIndex2">
    <div class="stage">
        <div class="actor" style="animation-delay:1s;">
            <img src="./images/general/index8.jpg" width=100%;>
        </div>
    </div>
</div>  

<div class="gridItemIndex2">
    <div class="stage" style="border-bottom-left-radius:20px;">
        <div class="actor">
            <img src="./images/general/index9.jpg" width=100%;>
        </div>
    </div>
</div>

<div class="gridItemIndex2">
    <div class="bloc_colonne" style="flex-basis:50%;margin:0%;">
        <h2 style="padding-left:3%;">Regardez les vidéos ...</h2>
        <ul style="padding-left:40%;">
            <li>Python</li>
            <li>Statistiques</li>
            <li>Fractions</li>
            <li>Calcul littéral</li>
            <li>Racines carrées</li>
            <li>Résolution d'équations</li>
        </ul>
    </div>
</div>

</div>

</section>
<!-------------------------->
<!-- QUIZ -->
<!-------------------------->
<div class="bloc_ligne" style="background-color:white;width:100%;margin-top:12%;padding-bottom:5%;padding-top:3%;">
    
    <div class="bloc_colonne" style="width:40%;">

        <h2 class="h2_index" style="color:black;margin-left:30%;">Ma sélection de Quiz</h2>

        <a class="a_index2" href="./sources/general/modeleQuizz.php?niveau=python&chapitre=debuter&page=quizz1">&#127744; Python - l'environnement de développement</a>
        <a class="a_index2" href="./sources/general/modeleQuizz.php?niveau=python&chapitre=debuter&page=quizz2">&#127744; Python - les variables</a>
        <a class="a_index2" href="./sources/general/modeleQuizz.php?niveau=python&chapitre=debuter&page=quizz3">&#127744; Python - saisie clavier</a>
        <a class="a_index2" href="./sources/general/modeleQuizz.php?niveau=python&chapitre=debuter&page=quizz4">&#127744; Python - les conditions</a>
        <a class="a_index2" href="./sources/general/modeleQuizz.php?niveau=python&chapitre=debuter&page=quizz6">&#127744; Python - la boucle while</a>
        <a class="a_index2" href="./sources/general/modeleQuizz.php?niveau=python&chapitre=debuter&page=quizz7">&#127744; Python - les chaînes de caractères</a>
        <a class="a_index2" href="./sources/general/modeleQuizz.php?niveau=python&chapitre=debuter&page=quizz9">&#127744; Python - les fonctions</a>
        <a class="a_index2" href="./sources/general/modeleQuizz.php?niveau=python&chapitre=debuter&page=quizz10">&#127744; Python - questionnaire</a>

    </div>

    <img src="./images/general/interrogation.png" alt="ideas" width=20%; height=20%; style="margin-left:10%;margin-right:10%;">
    
</div>


<section class="principal">

    <h2 class="h2_index" style="margin-top:0";>Ma sélection de vidéos</h2>

    <figure style="margin-top:2%;margin-bottom:5%;background-color:var(--couleur_gris);border:5px var(--couleur_gris) solid;border-radius:5px;">
        <iframe width="854" height="480" src="https://www.youtube.com/embed/mXFMNbk-TJg"
                title="Apprendre à manipuler les racines carrées, Toketa" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
    gyroscope; picture-in-picture" allowfullscreen> </iframe>
        <figcaption style="background-color:var(--couleur_gris);"> Apprendre à manipuler les racines carrées, <em>ToKeTa</em> </figcaption>
    </figure>

    <a href='https://www.youtube.com/channel/UCgCl1cAuhEa5RxCsV87cG4A/featured' target='_blank' style="margin-left:1%;">
<img src='./images/general/youtubetoketa.png' alt='youtube' width='15%' style='border-radius:5px;'></a>


<div class="gridContainerIndex" style="margin-top:0;">

    <div class="gridItemIndex">
        <a class='a_index' href="https://youtu.be/ImndwJtu4AE" target="_blank">&#127744; Statistiques - Les notions de base en statistiques</a>
        <a class='a_index' href="https://youtu.be/AA7-Sq3GFtc" target="_blank">&#127744; Statistiques - Trouver la médiane et les quartiles c'est facile</a>
        <a class='a_index' href="https://youtu.be/c2eOXieaWUU" target="_blank">&#127744; Calcul littéral - Eviter les pièges de la factorisation</a>
        <a class='a_index' href="https://youtu.be/2hJgUhH3AG8" target="_blank">&#127744; Calcul littéral - Factoriser avec Geogebra</a>
        <a class='a_index' href="https://youtu.be/4b3rSGZrTcc" target="_blank">&#127744; Excel - Modifier une cellule Excel avec une condition</a>
        <a class='a_index' href="https://youtu.be/eb8AcBYo2yQ" target="_blank">&#127744; Word - Le correcteur d'orthographe sous Word</a>
        <a class='a_index' href="https://youtu.be/nWYezXg-eok" target="_blank">&#127744; Word - Utilisation du dictaphone et du traducteur sous Word</a>
        <a class='a_index' href="https://youtu.be/ITi4LrB_YMQ" target="_blank">&#127744; Word - Utiliser la fonctionnalité dessin sur Word</a>
        <a class='a_index' href="https://youtu.be/YcdOxQf16bs" target="_blank">&#127744; Python - Palindrome en Python</a>
        <a class='a_index' href="https://youtu.be/ZMjF4JcR7Go" target="_blank">&#127744; Python - boucles imbriquées en Python</a>
        <a class='a_index' href="https://youtu.be/FNbX5NOBtic" target="_blank">&#127744; Scratch - Faire danser le sprite avec Scratch</a>
        <a class='a_index' href="https://youtu.be/dIDSz-bpLGo" target="_blank">&#127744; Scratch - Tracer une courbe avec Scratch</a>
        <a class='a_index' href="https://youtu.be/DvLj-jlKwbY" target="_blank">&#127744; Scratch - Mouvement d'un sprite avec Scratch</a>
    </div>

    <div class="gridItemIndex">
    </div>
    
</div>



<script>
let slideIndex = 0;

showSlides();
function showSlides() {

  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>



<!------------------------->        
<!-- MEMOIRE -->
<!------------------------->

<!--
<div style="background-color:white;width:100%;">
<h3 style="color:black;">J'essaie les jeux de mémoire</h3>
<p style="color:black;">En construction ...</p>
</div>
-->

<!-------------------------->
<!-- TRAVAUX PRATIQUES -->
<!-------------------------->
<h2 class="h2_index">Ma sélection de travaux pratiques</h2>

<div class="bloc_ligne" style='width:100;margin-bottom:5%;'>
    <div class="bloc_colonne" style="flex-basis:31%;margin-right:3%;">
        <h4 style='color:white;'>Geogebra</h4> 
        <p style="text-align:justify">L'application <em>Geogebra</em> permet de dessiner des courbes mathématiques en utilisant une interface graphique très intuitive. Il est également possible de factoriser, développer une 
        expression mathématique ou encore de dessiner des figures géométriques très facilement. <em>Geogebra</em> s'apparente donc à une calculatrice graphique très puissante. Il s'agit donc d'un 
        outil performant pour s'aider dans ses travaux mathématiques. Il n'est pas nécessaire de télécharger l'application qui s'utilise facilement en ligne.</p> 
        <a href='sources/general/modelePage.php?niveau=maths&chapitre=calcul_litteral&page=competence2'><button class='bouton'>Commencer ...</button></a>
    </div>

    <div class="bloc_colonne" style="flex-basis:31%;margin-right:3%;">
        <h4 style='color:white;'>Loi des grands nombres</h4> 
        <p style="text-align:justify">Il est perturbant de constater que les chances d'obtenir un nombre voulu lorsqu'on 
        lance un dé plusieurs fois ne semble pas équilibrées. C'est en fait la loi des grands nombres qui détermine 
        les règles de probabilité. Pour obtenir un grand nombre de tirages, une seule possibilité, le recours à un 
    langage de programmation. Nous avons choisi Python et nous allons créer un code qui exécute un million de tirages pour
 afficher les chances d'obtenir chacun des nombres entre 1 et 6.</p> 
        <a href='./sources/general/modelePage.php?niveau=maths&chapitre=statistiques&page=competence7'><button class='bouton'>Commencer ...</button></a>
    </div>

    <div class="bloc_colonne" style="flex-basis:31%;">
        <h4 style="color:white;">Les maths et Word</h4> 
        <p style="text-align:justify">Microsoft Word est un logiciel commercial de traitement de texte, très répandu, 
        particulièrement efficace, et qui permet notamment d'écrire des formules mathématiques. Plusieurs options 
        s'offrent à l'usager, l'utilisation des différentes icônes proposées par l'interface ou l'utilisation du 
        langage LaTeX dont les bibliothèques sont spécialisées dans l'écriture mathématique..</p> 
        <a href='sources/general/modelePage.php?niveau=maths&chapitre=calcul_litteral&page=competence11'><button class='bouton'>Commencer ...</button></a>
    </div>
    
</div>

<div class="bloc_ligne" style='width:100%;'>

    <div class="bloc_colonne" style="flex-basis:31%;margin-right:3%;">
        <h4 style='color:white;'>Routage IP</h4> 
        <p style="text-align:justify">En utilisant les lignes de commandes de l'ordinateur, il est possible de trouver l'adresse IP utilisée, puis
            d'envoyer un simple <em>ping</em> afin de suivre le chemin utilisé par les paquets pour transmettre une message.
            Ce travail pratique simple permet de visualiser concrètement ce qu'on apprend dans le cours au sujet des adresses IP.</p> 
        <a href='./sources/general/modelePage.php?niveau=nsi&chapitre=internet&page=competence3'><button class='bouton'>Commencer ...</button></a>
    </div>

    <div class="bloc_colonne" style="flex-basis:31%;margin-right:3%;">
        <h4 style='color:white;'>Linux</h4> 
        <p style="text-align:justify">Le système d'exploitation Linux est utilisé dans la plupart des serveurs. 
    Particulièrement performant et sûr, il est une alternative libre et gratuite aux systèmes d'exploitation commerciaux. 
Vous apprendrez à utiliser les principales lignes de commande pour effectuer des opérations simples mais utiles.</p> 
        <a href='sources/general/modelePage.php?niveau=nsi&chapitre=architecture&page=competence4'><button class='bouton'>Commencer ...</button></a>
    </div>

    <div class="bloc_colonne" style="flex-basis:31%;">
        <h4 style="color:white;">Bibliothèque Turtle</h4> 
        <p style="text-align:justify">La bibliothèque <em>turtle</em> permet de dessiner en utilisant le langage Python. Pour ceux qui sont familiers avec le langage <em>Scratch</em>, les méthodes utilisées sont assez semblables. Il faut avec <em>turtle</em> écrire du code au lieu de déplacer des blocs Scratch.</p> 
        <a href='sources/general/modelePage.php?niveau=python&chapitre=debuter&page=competence7'><button class='bouton'>Commencer ...</button></a>
    </div> 
  
</div>

<img src="./images/general/index11.jpg" style="width:40%;margin:auto;border-radius:10px;">

<!--
<h3>Le coin des bavardages</h3>

<div style="background-color:#abf285;border:1px grey solid;border-radius:10px;padding:1%;rotate:-10deg;width:50%;">
    <p style="color:black;"><em>Aymeric</em> : "Site sympa, mais le contenu n'est pas du tout complet. Il faut quand même aller voir son cours 
    ou utiliser d'autres sites pour bien s'entraîner."</p>
</div>

<div style="background-color:#f2dc85;border:1px grey solid;border-radius:10px;padding:1%;rotate:5deg;width:50%;margin-left:15%;">
    <p style="color:black;"><em>May</em> : "J'aime bien les exercices corrigés de Python. Ils aident à comprendre comment coder."</p>
</div>

<div style="background-color:#f2ad85;border:1px grey solid;border-radius:10px;padding:1%;width:50%;z-index:1;">
    <p style="color:black;"><em>Lucien</em> : "Les Quiz sont cool. Ca va, et ça permet de s'entraîner gentiment."</p>
</div>

<div style="background-color:#85a6f2;border:1px grey solid;border-radius:10px;padding:1%;rotate:-7deg;width:50%;z-index:1;">
    <p style="color:black;"><em>Sabrina</em> : "J'ai vraiment pu progresser en calcul littéral. Les exemples sont simples et faciles à comprendre."</p>
</div>

<form action="" style="margin-top:5%;">
    <p>Merci de laissez vos commentaires ci-dessous. Nous tiendrons compte de vos remarques autant que possible.</p>
    <div class="bloc_ligne">
        <label for="pseudo"><p style="font-size:1.1em;">Prénom : </p></label>
        <input type="text" id="pseudo" name="pseudo" style="margin:2%;">
    </div><br/>
    <textarea rows='5' cols='60' name='comment' form='usrform' style="margin-bottom:2%;">Mes commentaires ... </textarea><br/>
    <input type="submit" class="bouton" value="Valider">
</form>
-->
<!-- COMPTEUR DE VISITES -->
<?php 
$nbre_visiteurs =  renvoyer_nbre_visiteurs() + 1; 
modifier_nbre_visiteurs($nbre_visiteurs);
echo "<p style='margin-top:5%;'>".$nbre_visiteurs." visites du site à ce jour...</p>";
?>

</section>

<?php include("./sources/general/footer.php"); ?>

</body>
</html>
