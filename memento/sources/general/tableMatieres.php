<div id="fieldsetTableMatieres">
<nav>
<?php
switch ($nomPage){
    case "html.html":
        echo "<a href='#structure'>STRUCTURE D'UNE PAGE</a>";
        echo "<a href='#balise'>LES BALISES</a>";
        echo "<a href='#flexbox'>FLEXBOX</a>";
        echo "<a href='#lien'>LES LIENS</a>";
        echo "<a href='#menu'>LES MENUS</a>";
        echo "<a href='#image'>LES IMAGES</a>";
        echo "<a href='#video'>LES VIDEOS</a>";
        echo "<a href='#formulaire'>LES FORMULAIRES</a>";
        echo "<a href='#tableau'>LES TABLEAUX</a>";
        echo "<a href='#cachee'>SECTIONS CACHEES</a>";
        echo "<a href='#responsive'>RESPONSIVE DESIGN</a>";
        echo "<a href='#queries'>MEDIA QUERIES</a>";
        echo "<a href='#ecrireCode'>ECRIRE DU CODE</a>";
        echo "<a href='#miseValeur'>MISE EN VALEUR</a>";
        echo "<a href='#verification'>VALIDITE HTML5 D'UN SITE</a>";
        break;
    case "css.html":
        echo "<a href='#structure'>STRUCTURE</a>";
        echo "<a href='#forme'>MISE EN FORME</a>";
        echo "<a href='#propriete'>PROPRIETES</a>";
        echo "<a href='#heritage'>HERITAGE</a>";
        break;
    case "javascript.html":
        echo "<a href='#generalite'>STRUCTURE DU CODE</a>";
        echo "<a href='#variable'>LES VARIABLES</a>";
        echo "<a href='#chaine'>STRING</a>";
        echo "<a href=''>LES LISTES</a>";
        echo "<a href='#tableau'>LES TABLEAUX</a>";
        echo "<a href=''>LES DICTIONNAIRES</a>";
        echo "<a href='#condition'>LES CONDITIONS</a>";
        echo "<a href='#boucle'>LES BOUCLES</a>";
        echo "<a href='#saisie'>SAISIE CLAVIER</a>";
        echo "<a href=''>ENTREES/SORTIES</a>";
        echo "<a href='#fonction'>LES FONCTIONS</a>";
        echo "<a href=''>LES EXCEPTIONS</a>";
        echo "<a href='#poo'>PROGRAMMATION OBJET</a>";
        break;
    case "php.html":
        echo "<p>en construction</p>";
        break;
    case "web.html":
        echo "<p></p>";
        break;
    case "docker.html":
        echo "<p>en construction</p>";
        break;
    case "git.html":
        echo "<a href='#configGit'>CONFIGURATION GIT</a>";
        echo "<a href='#instructionGit'>INSTRUCTIONS GIT</a>";
        echo "<a href='#historique'>HISTORIQUE GIT</a>";
        echo "<a href='#branche'>LES BRANCHES</a>";
        echo "<a href='#gitignore'>.GITIGNORE</a>";
        break;
    case "jetbeans.html":
        echo "<p>en construction</p>";
        break;
    case "linux.html":
        echo "<a href='#structureLinux'>STRUCTURE DU SYSTEME</a>";
        echo "<a href='#inviteCommande'>LE BASH</a>";
        echo "<a href='#commande'>CODE BASH</a>";
        echo "<a href='#affichageConsole'>AFFICHAGE CONSOLE</a>";
        echo "<a href='#zip'>ARCHIVE .ZIP</a>";
        echo "<a href='#gz'>ARCHIVE .GZ</a>";
        echo "<a href='#bash'>ARCHIVE .SH</a>";
        echo "<a href='#targz'>ARCHIVE .TAR.GZ</a>";
        echo "<a href='#tarbz2'>ARCHIVE .TAR.BZ2</a>";
        echo "<a href='#deb'>ARCHIVE .DEB</a>";
        echo "<a href='#upgrade'>MISE A NIVEAU</a>";
        echo "<a href='#bootable'>CLE BOOTABLE</a>";
        break;
    case "outilsDev.html":
        echo "<p></p>";
        break;
    case "android.html":
        echo "<p>en construction</p>";
        break;
    case "appli.html":
        echo "<p></p>";
        break;
    case "c.html":
        echo "<a href='#general'>GENERALITES</a>";
        echo "<a href='#variable'>LES VARIABLES</a>";
        echo "<a href='#operation'>LES OPERATIONS</a>";
        echo "<a href='#tableau'>LES TABLEAUX</a>";
        echo "<a href='#caractere'>STRING</a>";
        echo "<a href='#saisie'>SAISIE CLAVIER</a>";
        echo "<a href='#condition'>LES CONDITIONS</a>";
        echo "<a href='#boucle'>LES BOUCLES</a>";
        echo "<a href='#fonction'>LES FONCTIONS</a>";
        echo "<a href='#pointeur'>LES POINTEURS</a>";
        echo "<a href='#math'>PACKAGE MATH.H</a>";
        break;
    case "java.html":
        echo "<a href=''>STRUCTURE DU CODE</a>";
        echo "<a href=''>LES VARIABLES</a>";
        echo "<a href=''>STRING</a>";
        echo "<a href='#lien'>LES COLLECTIONS</a>";
        echo "<a href='#flexbox'>LES TABLEAUX</a>";
        echo "<a href=''>LES CONDITIONS</a>";
        echo "<a href=''>LES BOUCLES</a>";
        echo "<a href=''>SAISIE CLAVIER</a>";
        echo "<a href=''>ENTREES/SORTIES</a>";
        echo "<a href=''>LES FONCTIONS</a>";
        echo "<a href='#hello'>LES EXCEPTIONS</a>";
        echo "<a href=''>PROGRAMMATION OBJET</a>";
        echo "<a href='#web'>JAVA AU TERMINAL</a>";
        echo "<a href='#structure'>LES DATES</a>";
        echo "<a href='#balise'>LES BALISES</a>";
        echo "<a href='#menu'>RESEAUX</a>";
        echo "<a href='#image'>LES PROXYS</a>";
        echo "<a href='#imageTexte'>LES SOCKETS</a>";
        echo "<a href='#video'>RMI</a>";
        echo "<a href='#formulaire'>JMS</a>";
        echo "<a href='#liste'>REST</a>";
        break;
    case "kotlin.html":
        echo "<p>en construction</p>";
        break;
    case "python.html":
        echo "<a href='#py_generalites'>STRUCTURE DU CODE</a>";
        echo "<a href='#py_communiquer'>SAISIE CLAVIER</a>";
        echo "<a href='#py_variable'>LES VARIABLES</a>";
        echo "<a href='#py_chaine'>STRING</a>";
        echo "<a href='#py_liste'>LES LISTES</a>";
        echo "<a href='#py_tableau'>LES TABLEAUX</a>";
        echo "<a href='#py_dictionnaire'>LES DICTIONNAIRES</a>";
        echo "<a href='#py_condition'>LES CONDITIONS</a>";
        echo "<a href='#py_boucle'>LES BOUCLES</a>";
        echo "<a href='#py_input'>ENTREES/SORTIES</a>";
        echo "<a href='#py_fonction'>LES FONCTIONS</a>";
        echo "<a href='#py_exception'>LES EXCEPTIONS</a>";
        echo "<a href='#py_objet'>PROGRAMMATION OBJET</a>";
        echo "<a href='#py_package'>LES PACKAGES</a>";
        echo "<a href='#py_interface'>INTERFACES GRAPHIQUES</a>";
        echo "<a href='#py_environnement'>ENVIRONNEMENT</a>";
        echo "<a href='#py.sub'>SUBPROCESS</a>";
        echo "<a href='#py_django'>LE FRAMEWORK DJANGO</a>";
        echo "<a href='#py_pep'>RESPET DU PEP8</a>";
        echo "<a href=''>TESTER LE CODE</a>";
        break;
}
?>
</nav>
</div>
