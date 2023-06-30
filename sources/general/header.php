<?php
// definition du menu des chapitres
switch ($niveau){

    // NIVEAU SECONDE
    case "seconde":
        // CHAPITRE CALCUL LITTERAL
        if ($chapitre == 'calculLitteral'){
            echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&page=competence7'>Rappel - équation degré 2 & factorisation</a>";
            echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&page=competence8'>Modéliser une situation</a>";               
            echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&page=competence12'>Proj. Présentation d'un cours &#127922;</a>";
            echo "<a href='modeleQuizz.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&page=competence13'>Quizz &#128526;</a>";  
        }
        break;      
    
    // NIVEAU MEMENTO
    case "memento":
        // CHAPITRE HTML
        echo "<br/><a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&page=competence1'>HTML</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&page=competence1'>Structure d'une page</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&page=competence2'>flexbox</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&page=competence3'>Liens et menus</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&page=competence4'>Images et vidéos</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&page=competence5'>Les formulaires</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&page=competence6'>Responsive design, media queries</a>";
        // CHAPITRE CSS
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=css&page=competence1'>CSS</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=css&page=competence1'>Structure du code</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=css&page=competence2'>Mise en forme</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=css&page=competence3'>Propriétés</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=css&page=competence4'>Héritage</a>";
        // CHAPITRE PHP
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=php&page=competence1'>PHP</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=php&page=competence1'>Structure du code</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=php&page=competence2'>Les variables</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=php&page=competence3'>Boucles, conditions, fonctions</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=php&page=competence4'>Programmation objet</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=php&page=competence5'>Entrées/sorties</a>";
        // CHAPITRE JAVASCRIPT
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=javascript&page=competence1'>JAVASCRIPT</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=javascript&page=competence1'>Structure du code</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=javascript&page=competence2'>Les variables</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=javascript&page=competence3'>Boucles, conditions, fonctions</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=javascript&page=competence4'>Programmation objet</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=javascript&page=competence5'>Entrées/sorties</a>";
        // CHAPITRE PYTHON
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&page=competence1'>PYTHON</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&page=competence1'>Structure du code</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&page=competence2'>Les variables</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&page=competence3'>Boucles, conditions, fonctions</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&page=competence4'>Programmation objet</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&page=competence5'>Entrées/sorties</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&page=competence6'>Environnement de travail</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&page=competence7'>Créer un package</a>";
        // CHAPITRE JAVA
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&page=competence1'>JAVA</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&page=competence1'>Structure du code</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&page=competence2'>Les variables</a>";       
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&page=competence3'>Boucles, conditions, fonctions</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&page=competence4'>Programmation objet</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&page=competence5'>Entrées/sorties</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&page=competence6'>Les réseaux, proxys, sockets</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&page=competence7'>RMI, JMS, REST</a>";
        // CHAPITRE GIT
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=git&page=competence1'>GIT</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=git&page=competence1'>Configuration, historique</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=git&page=competence2'>Instructions Git</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=git&page=competence3'>Les branches</a>";      
        // CHAPITRE C
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=c&page=competence1'>C</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=c&page=competence1'>Structure du code</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=c&page=competence2'>Les variables</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=c&page=competence3'>Boucles, conditions, fonctions</a>";
        echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=c&page=competence4'>Les pointeurs</a>";    
    	};    
?>

<header>
<!--<h1 style="display:flex;flex-direction:row;">To<div style="transform:rotate(180deg);">K</div>eTa</h1>-->
   
<!-- menu de navigation pour ecran smartphone/tablette -->
<!-- menu des niveaux -->
<!--
<ul class='navig_smartphone'> 
    <li class='dropdown'><a class='dropbtn' href='javascript:void(0)' style='font-size:1.5em;'>&#9776;</a>
        <div class='dropdown-content'>  
            <a href='../../index.php'>Accueil</a>
            <a href='modelePage.php?niveau=maths&chapitre=calcul&page=competence1'>Outils mathématiques</a>        
            <a href='modelePage.php?niveau=nsi&chapitre=internet&page=competence1'>Sciences numériques</a>        
            <a href='modelePage.php?niveau=python&chapitre=debuter&page=competence1'>Python</a>
            <a href='modelePage.php?niveau=web&chapitre=debuter_web&page=competence1'>HTML CSS JS</a>
        </div>
    </li>
</ul>
    -->

<?php
// on detaille les adresses relatives lorsqu'on se trouve a l'accueil ou
// ailleurs sur le site
if ($page == "index"){
    $prefixeAccueil = "";
    $prefixeGeneral = "sources/general/";
}
else{
    $prefixeAccueil = "../../";
    $prefixeGeneral = ""; 
}

// menu de navigation pour ecran laptop/desktop
echo "
<ul id='navig_laptop'>
    <li><a href='".$prefixeAccueil."index.php' style='font-size:2em;font-family:Arial;display:flex;flex-direction:row;'>To<div style='transform:rotate(180deg);'>K</div>eTa</a></li>
       
    <li><a href='".$prefixeGeneral."modeleTableMatiere.php?niveau=python'><br/>Python</a></li>
    
    <li><a href='".$prefixeGeneral."modeleTableMatiere.php?niveau=web'>HTML/CSS<br/>JavaScript</a></li>

    <li><a href='".$prefixeGeneral."modeleTableMatiere.php?niveau=nsi'>Sciences<br/>numériques</a></li>

    <li><a href='".$prefixeGeneral."modeleTableMatiere.php?niveau=maths'>Calcul<br/>numérique</a></li>

    <li><div class='bouton' style='margin-top:10%;'>Log in</div></li>
</ul>
";
//<li><a href='".$prefixeGeneral."modeleTableMatiere.php?niveau=java'>Java</a></li>

?>

</header>
    
