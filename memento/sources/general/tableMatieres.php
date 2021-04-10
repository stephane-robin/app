<aside id="table_matieres">
<nav>

<?php
switch ($nomPage){
    case "html.html":
        echo "<a href='#structure'>Structure d'une page HTML</a>";
        echo "<a href='#balise'>Les balises</a>";
        echo "<a href='#flexbox'>Flexbox</a>";
        echo "<a href='#lien'>Les liens</a>";
        echo "<a href='#menu'>Les menus</a>";
        echo "<a href='#image'>Les images</a>";
        echo "<a href='#video'>Les vidéos</a>";
        echo "<a href='#formulaire'>Les formulaires</a>";
        echo "<a href='#tableau'>Les tableaux</a>";
        echo "<a href='#cachee'>Sections cachées</a>";
        echo "<a href='#responsive'>Responsive design</a>";
        echo "<a href='#queries'>Media queries</a>";
        echo "<a href='#ecrireCode'>Ecrire du code</a>";
        echo "<a href='#miseValeur'>Mise valeur</a>";
        echo "<a href='#verification'>Validité HTML5 d'un site</a>";
        break;
    case "css.html":
        echo "<a href='#structure'>Structure</a>";
        echo "<a href='#forme'>Mise en forme</a>";
        echo "<a href='#propriete'>Propriétés</a>";
        echo "<a href='#heritage'>Héritage</a>";
        break;
    case "javascript.html":
        echo "<a href='#generalite'>Structure du code</a>";
        echo "<a href='#variable'>Les variables</a>";
        echo "<a href='#chaine'>String</a>";
        echo "<a href=''>les listes</a>";
        echo "<a href='#tableau'>Les tableaux</a>";
        echo "<a href=''>Les dictionnaires</a>";
        echo "<a href='#condition'>Les conditions</a>";
        echo "<a href='#boucle'>Les boucles</a>";
        echo "<a href='#saisie'>Saisie clavier</a>";
        echo "<a href=''>Entrées/Sorties</a>";
        echo "<a href='#fonction'>Les fonctions</a>";
        echo "<a href=''>Les exceptions</a>";
        echo "<a href='#poo'>Programmation objet</a>";
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
        echo "<a href='#configGit'>Configuration Git</a>";
        echo "<a href='#instructionGit'>Instructions Git</a>";
        echo "<a href='#historique'>L'historique Git</a>";
        echo "<a href='#branche'>Les branches Git</a>";
        echo "<a href='#gitignore'>.gitignore</a>";
        break;
    case "jetbeans.html":
        echo "<p>en construction</p>";
        break;
    case "linux.html":
        echo "<a href='#structureLinux'>Structure du système</a>";
        echo "<a href='#inviteCommande'>Le bash</a>";
        echo "<a href='#commande'>Code bash</a>";
        echo "<a href='#affichageConsole'>Affichage console</a>";
        echo "<a href='#zip'>Archive .zip</a>";
        echo "<a href='#gz'>Archive .gz</a>";
        echo "<a href='#bash'>Installation avec .sh</a>";
        echo "<a href='#targz'>Installation avec .tar.gz</a>";
        echo "<a href='#tarbz2'>Installation avec .tar.bz2</a>";
        echo "<a href='#deb'>Installation avec .deb</a>";
        echo "<a href='#upgrade'>Mise à niveau</a>";
        echo "<a href='#bootable'>Clé bootable</a>";
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
        echo "<a href='#general'>Généralités</a>";
        echo "<a href='#hello'>Hello world</a>";
        echo "<a href='#variable'>Les variables</a>";
        echo "<a href='#operation'>Principales opérations</a>";
        echo "<a href='#tableau'>Les tableaux</a>";
        echo "<a href='#caractere'>les chaînes de caractères</a>";
        echo "<a href='#saisie'>Saisie utilisateur</a>";
        echo "<a href='#condition'>Branchement conditionnel</a>";
        echo "<a href='#boucle'>Les boucles</a>";
        echo "<a href='#fonction'>Les fonctions</a>";
        echo "<a href='#pointeur'>Les pointeurs</a>";
        echo "<a href='#math'>Package math.h</a>";
        break;
    case "java.html":
        echo "<a href=''>Structure du code</a>";
        echo "<a href=''>Les variables</a>";
        echo "<a href=''>String</a>";
        echo "<a href='#lien'>Les collections</a>";
        echo "<a href='#flexbox'>Les tableaux</a>";
        echo "<a href=''>Les conditions</a>";
        echo "<a href=''>Les boucles</a>";
        echo "<a href=''>Saisie clavier</a>";
        echo "<a href=''>Entrées/Sorties</a>";
        echo "<a href=''>Les fonctions</a>";
        echo "<a href='#hello'>Les exceptions</a>";
        echo "<a href=''>Programmation objet</a>";
        echo "<a href='#web'>Java au terminal</a>";
        echo "<a href='#structure'>Les dates</a>";
        echo "<a href='#balise'>Les balises</a>";
        echo "<a href='#menu'>Réseaux</a>";
        echo "<a href='#image'>Les proxys</a>";
        echo "<a href='#imageTexte'>Les sockets</a>";
        echo "<a href='#video'>RMI</a>";
        echo "<a href='#formulaire'>JMS</a>";
        echo "<a href='#liste'>REST</a>";
        break;
    case "kotlin.html":
        echo "<p>en construction</p>";
        break;
    case "python.html":
        echo "<a href='#py_generalites'>Structure du code</a>";
        echo "<a href='#py_communiquer'>Saisie clavier</a>";
        echo "<a href='#py_variable'>Les variables</a>";
        echo "<a href='#py_chaine'>String</a>";
        echo "<a href='#py_liste'>Les listes</a>";
        echo "<a href='#py_tableau'>Les tableaux</a>";
        echo "<a href='#py_dictionnaire'>Les dictionnaires</a>";
        echo "<a href='#py_condition'>Les conditions</a>";
        echo "<a href='#py_boucle'>Les boucles</a>";
        echo "<a href='#py_input'>Entrées/sorties</a>";
        echo "<a href='#py_fonction'>Les fonctions</a>";
        echo "<a href='#py_exception'>Les exceptions</a>";
        echo "<a href='#py_objet'>Programmation objet</a>";
        echo "<a href='#py_package'>Les packages</a>";
        echo "<a href='#py_interface'>Interfaces graphiques</a>";
        echo "<a href='#py_environnement'>Environnements</a>";
        echo "<a href='#py.sub'>subprocess</a>";
        echo "<a href='#py_django'>Le framework Django</a>";
        echo "<a href='#py_pep'>Respect du PEP8</a>";
        echo "<a href=''>Tester le code</a>";
        break;
}

	

?>

</nav>
</aside>