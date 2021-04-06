<!DOCTYPE HTML>
<html>

<head>
    <title> Memento </title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/prism.css">
    <meta charset="utf-8">
</head>

<body>

<header>

    <div id="header_haut">
        <img id="imageGauche_header" src="../../images/general/symbole.png" alt="symbole S. Robin" width=10%/>
        <h1> LE WEB </h1>
    </div>

    <div id="bandeau">
        <nav>
            <div class="element"> <a href="html.html">HTML</a> </div>
            <div class="element"> <a href="css.html">CSS</a> </div>
            <div class="element"> <a href="javascript.html">JAVASCRIPT</a> </div>
            <div class="element"> <a href="php.html">PHP</a> </div>
        </nav>
    </div>

</header>

<aside>
    <nav id="chapitres">
        <a title="accueil du site" href="../index.html"><img class="logo" src="../../images/general/logoAccueil.png" alt="Accueil" /></a>
        <a title="accueil de la partie Web" href="web.html"><img class="logo" src="../../images/general/logoWeb.png" alt="Web" /></a>
        <a title="accueil de la partie Appli" href="../appli/appli.html"><img class="logo" src="../../images/general/logoAppli.png" alt="Appli" /></a>
    </nav>
</aside>

<section id="principal">




    <!-- COMPRENDRE LE WEB -->

    <h2 id="web">Comprendre le Web</h2>

    <p>Internet est un réseau informatique mondial distribué, composé de millions de sous-réseaux publics ou privés. De ce fait, il n'existe pas de terminal qui centralise les informations. Internet utilise des applications de messagerie instantanée, de courrier électronique, de partage peer-to-peer, ainsi que le Web.</p>

    <p>Le World Wide Web symbolisé par www. est un service particulier d'Internet. On utilise un navigateur ou <em>browser</em> (Chrome, Firefox, Edge, Opera, Safari,...) pour y accéder et pouvoir lire les différentes pages. Le navigateur fait office de traducteur de code HTML, CSS et JavaScript sous forme de page lisible par l'utilisateur.</p>

    <p>Pour construire un site Web, on utilise plusieurs types de langages : des langages de description tels que HTML et CSS qui sont au coeur du fonctionnement du Web et définissent la structure de chaque page visitée, des langages de programmation tels que JavaScript, PHP, Java, Python,... et un langage de traitement des bases de données tel que SQL.</p>









    <div class="bloc">
        <div class="gauche">
            <p>Java est un langage orienté objet qui utilise un compilateur (javac) puis une machine virtuelle
                compatible toutes plateformes JVM Java Virtual Machine pour interpréter le Byte code. De ce fait,
                c'est un langage offrant une grande portabilité.
                C’est un langage à la fois compilé et interprété. Il est donc plus rapide que Python (interprété) mais
                plus lent que C++ (compilé).</p>
        </div>

        <div class="droite">
            <a href="java.html"><img src="../../images/appli/java.png" width="60" height="100"></a>
        </div>
    </div>

    <div class="bloc">
        <div class="gauche">
            <p>Python est un langage de programmation interprété dont la philosophie repose sur la simplicité du code et l'implémentation de bonnes pratiques. Rien n'est fait pour empêcher le programmeur de mener une action, même si elle semble inappropriée. Python est particulièrement utilisé dans les environnements scientifiques et pour la manipulation de données.</p>
        </div>

        <div class="droite">
            <a href="python.html"><img src="../../images/appli/python.jpg" width="80" height="80"></a>
        </div>
    </div>

    <div class="bloc">
        <div class="gauche">
            <p>Initialement conçu pour créer le système d'exploitation Unix, le langage C est rapidement devenu un standard grâce à sa puissance, sa rapidité d'exécution et sa portabilité. Il est actuellement principalement utilisé dans l'écriture de systèmes d'exploitation, de machines virtuelles, de logiciels de calcul scientifique, d'applications en réseau.</p>
        </div>

        <div class="droite">
            <a href="c.html"><img src="../../images/appli/c.png" width="80" height="80"></a>
        </div>
    </div>

    <div class="bloc">
        <div class="gauche">
            <p> <em>Git</em> est un logiciel de versionnement de code qui fonctionne avec un système d'arborescence à partir d'une branche master. <em>Git</em> fait constamment le lien entre un repository local et un repository hébergé par <em>GitHub</em>. Un repository est un dossier qui est configuré pour travailler avec <em>git</em>.</p>
            <p>Une des particularités de <em>Git</em>, c'est l'existence de sites web collaboratifs basés sur <em>Git</em> comme <em>GitHub</em>. Il s'agit d'une sorte de réseau social pour développeurs qui permet de suivre l'évolution de projets et de décider de participer à ces projets. <em>GitHub</em> fournit le serveur qui permet de créer et stocker des repositories en utilisant les fonctionnalités de <em>git</em>.</p>
        </div>

        <div class="droite">
            <a href="git.html"><img src="../../images/git.png" width="80" height="80"></a>
        </div>
    </div>


    <!-- Clients-serveurs-->

    <h3>Clients-serveurs</h3>
    <p>Les clients sont les ordinateurs qui servent à consulter les sites Web.</p>
    <p>Les serveurs sont des ordinateurs qui offrent des services. Ils peuvent par exemple stocker des sites Web et des bases de données.
        Le fonctionnement du Web est basé sur une structure client-serveur.</p>
    <p>On distingue les types de langages suivants :
    <ul>
        <li>les langages interprétés par les clients (<em>langages frontend</em>) tels que HTML, CSS et JavaScript qui décrivent comment le site Web doit s'afficher. Ils peuvent par exemple afficher un menu clignotant dans la page Web</li>
        <li>les langages interprétés par les serveurs (<em>langages backend</em>) tels que PHP, Java, Python, C# qui décrivent comment le site Web doit se comporter en appliquant des régles définies par une application. Ils peuvent par exemple n'afficher la page Web que si l'utilisateur s'est identifié. Ils réalisent l'interface avec le langage de requête de bases de données</li>
        <li>les langages de communication avec une base de données tel que SQL</li>
    </ul>
    </p>

    <p><em>Attention</em>, JavaScript est une particularité car il peut également interagir côté serveur.</p>
    <p>Plutôt que de commencer avec une page blanche pour construire un site Web, on préfère utiliser des <em>frameworks</em>, qui sont des boîtes à outil pratiques, permettant de faciliter le travail. Les principaux <em>frameworks</em> pour le Web sont les suivants :
    <ul>
        <li>Symfony et Zend pour PHP</li>
        <li>NodeJS et Angular pour JavaScript</li>
        <li>Java EE pour Java</li>
        <li>Django pour Python</li>
        <li>ASP.NET pour C#</li>
        <li>Ruby on Rails pour Ruby</li>
    </ul>
    </p>

    <p>On peut également utiliser un CMS Content Management System, qui est un site prêt à être modifié. Le CMS le plus populaire est actuellement WordPress,</p>

    <!-- les bases de données -->

    <h3 id="bdd"> Les bases de données </h3>

    <p> Les bases de données permettent d'enregistrer des informations afin de les ré-utiliser lors d'une prochaine session sur le site. Elles fonctionnent avec un autre serveur appelé serveur de base de données.
        Les bases de données sont en fait des logiciels dédiés au stockage de données, qui utilisent principalement le langage SQL.</p>
    <p> Les principaux systèmes de gestion de base de données SQL sont les suivants :
    <ul>
        <li>MySQL</li>
        <li>PostgreSQL</li>
        <li>SQL Serveur</li>
        <li>Oracle</li>
        <li>SQLite</li>
    </ul>
    </p>

    <fieldset><legend><img src="../../images/general/bonSavoir.png" width="80" height="80"> </legend>
        <p> Il existe des bases de données non relationnelles qui n'utilisent pas le langage SQL. Par exemple MongoDB ou Cassandra. </p>
    </fieldset>

    <!-- Architecture 3 tiers -->

    <h3> Une architecture 3 tiers pour générer une page Web </h3>

    <p> L'interaction entre un client et un serveur est la suivante :
    <ul>
        <li>le client demande une page au serveur</li>
        <li>le serveur effectue une requête auprès de la base de données pour obtenir certains résultats qui ont été conservés en mémoire</li>
        <li>le serveur génère la page en fonction des conditions requises par l'application en transformant le code source (par exemple PHP) en HTML et envoie la page créée au client</li>
        <li>le client lit la page à l'aide du navigateur et utilise éventuellement JavaScript si une interaction dynamique est nécessaire</li>
    </ul>
    </p>

    <img src="../../images/web/architecture3tiers.png" alt="architecture 3 tiers" width="70%">





</section>

<footer>
    Stephane Robin
</footer>

</body>
</html>