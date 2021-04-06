<!DOCTYPE HTML>
<html>

<head>
  <title> Memento </title>
  <link rel="stylesheet" href="../../style/style.css">
  <link rel="stylesheet" href="../../style/prism.css">
  <meta charset="utf-8">
</head>

<!-- script de gestion des couleurs de code -->
<script defer src="../../style/prism.js"></script>

<body>
<header>

  <div id="header_haut">
    <img id="imageGauche_header" src="../../images/general/symbole.png" alt="symbole S. Robin" width=10%/>
    <h1> PHP </h1>
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
  <nav id="table_matieres">
    <a href="#py_generalites">Structure du code</a>
    <a href="#py_communiquer">Communiquer avec l'utilisateur</a>
    <a href="#py_variable">Les variables</a>
    <a href="#py_chaine">Chaînes de caractères</a>
    <a href="#py_liste">Les listes</a>
    <a href="#py_tableau">Les tableaux</a>
    <a href="#py_dictionnaire">Les dictionnaires</a>
    <a href="#py_condition">Les conditions</a>
    <a href="#py_boucle">Les boucles</a>
    <a href="#py_input">Entrées/sorties</a>
    <a href="#py_fonction">Les fonctions</a>
    <a href="#py_exception">Gestion des exceptions</a>
    <a href="#py_objet">Programmation objet</a>
    <a href="#py_package">Les packages</a>
    <a href="#py_interface">Interfaces graphiques</a>
    <a href="#py_environnement">Environnements de travail</a>
    <a href="#py.sub">subprocess et les lignes de commande</a>
    <a href="#py_django">Le framework Django</a>
    <a href="#py_pep">Respect du PEP8</a>
    <a href="">Tester le code</a>
  </nav>
</aside>

<aside>
  <nav id="chapitres">
    <a title="accueil du site" href="../index.html"><img class="logo" src="../../images/general/logoAccueil.png" alt="Accueil" /></a>
    <a title="accueil de la partie Web" href="web.html"><img class="logo" src="../../images/general/logoWeb.png" alt="Web" /></a>
    <a title="accueil de la partie Appli" href="../appli/appli.html"><img class="logo" src="../../images/general/logoAppli.png" alt="Appli" /></a>
  </nav>
</aside>

<section id="principal">

  <div class="bloc">
    <div class="gauche">
      <a href="php.html"><img src="../../images/web/php.png" width="90" height="80"></a>
    </div>

    <div class="droite">
      <p>PHP signifie Hypertexte Preprocessor. Il s'agit d'un langage de programmation libre, interprété, orienté objet, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP.
        Il est considéré comme une des bases de la création de sites Web dynamiques.</p>
    </div>
  </div>

<!-- CONFIGURATION DU SERVEUR -->

  <h2>Configuration du serveur</h2>

  <p>Afin d'utiliser PHP, il faut utiliser un serveur capable de transformer les fichiers .php en .html. Il faut également
  configurer l'accès à un SGDB tel que MySQL et PostgreSql. Il est possible d'installer ces outils séparément et de les
   configurer manuellement. Nous préférons installer un package qui se charge de la configuration. Pour cela, il convient
    d'installer Xampp qui regroupe le pack PHP, Perl, Apache, SQL, MariaDB.</p>

  <p>Une fois le téléchargement de Xampp effectué, il faut se rendre dans le dossier de Téléchargement et exécuter l'installer
  en mode root. Il faut donc préciser sudo su afin d'obtenir le prompt suivant : root@stephane:</p>

  <pre><code class="language-svg">cd Téléchargements
sudo su
chmod 755 xampp-linux-*-installer.run
./xampp-linux-*-installer.run</code></pre>

  <p>où il faut remplacer * par la version de Xampp valide au moment du téléchargement.</p>

  <p>Rappel : pour entrer en mode root, il faut exécuter sudu su [identifiant], et pour en sortir il faut exécuter exit</p>

  <p>Pour lancer le serveur, il faut s'assurer d'être en mode root. Il faut ensuite préciser l'emplacement de lampp, qui
    se situe par défaut à /opt/lampp/lampp puis exécuter l'instruction</p>

  <pre><code class="language-svg">sudo su
/opt/lampp/lampp start</code></pre>

  <p>Il est maintenant possible de tester Xampp en tapant dans la barre du navigateur</p>

  <pre><code class="language-svg">http://localhost</code></pre>

  <p>Remarques importantes:</p>
  <ul>
    <li>les fichiers .php doivent être placés dans le répertoire /opt/lampp/htdocs, ou dans un sous-dossier de htdocs. Ce dossier est protégé par défaut. Il
    faut donc modifier les droits d'accès pour pouvoir créer et modifier des dossiers et fichiers à l'intérieur. Ainsi, il
    faut exécuter cd /opt/lampp puis sudo chmod 777 -R /opt/lampp/htdocs. 777 représente la permission pour le superutilisateur,
    le groupe et les autres utilisateurs avec read qui repésente 4, write qui représente 2 et execute qui représente 1 (leur
    somme étant égale à 7).</li>
    <li>lorsqu'on crée un dossier monProjet dans /opt/lampp/htdocs, il est possible pour le navigateur d'y accéder en tapant
    dans la barre http://localhost/monProjet</li>
    <li>le code source récupéré par le navigateur ne permet pas d'afficher le code PHP. Celui-ci est transformé en HTML, qui
    est lu par le navigateur, et c'est ce code source dont dispose l'utilisateur. Ainsi, seul le serveur lit le code PHP.</li>
  </ul>

  <p>Pour arrêter le serveur, il faut exécuter</p>
  <pre><code class="language-svg">/opt/lampp/lampp stop</code></pre>

  <h2>Structure du code PHP</h2>

  <p>Les fichiers PHP sont munis d'une extension .php</p>

  <p>Les instructions PHP s'insèrent dans le code HTML en utilisant les balises suivantes</p>
  <pre><code class="language-html">&lt?php echo "Hello world"; ?&gt </code></pre>

  <p>Les commentaires s'écrivent avec // pour une seule ligne et /* ... */ pour plusieurs lignes.</p>
  <p>Notons que pour que les guillemets apparaissent dans le texte, il faut les faire précéder d'un antislash \.</p>

  <h3>Particularité dans l'exécution d'un code PHP</h3>

  <p>PHP refuse de s'exécuter une instruction durant plus de 30 secondes, à l'issue desquelles il s'arrête donc de travailler.
  Ainsi, PHP n'est pas conçu pour les calculs numériques longs. Il a été conçu pour l'affichage dynamique de pages
    Web. On préfèrera pour les calculs numériques C++ ou Python pour ses librairies scientifiques.</p>

  <!-- VARIABLES -->

  <h2>Les variables</h2>

  <p>Les variables commencent toujours par la lettre $ en PHP, à l'instar de JavaScript.</p>
  <p>L'affichage d'une variable se fait de la façon suivante</p>

  <pre><code class="language-html">&lt?php $maVariable = 12;
echo $maVariable;?&gt</code></pre>

  <p>Contrairement à Python, echo ne renvoie pas à la ligne. Ainsi le code suivant affiche hello world.</p>
  <pre><code class="language-html">echo "hello";
echo " world";</code></pre>

  <h3>Affichage d'une variable au sein d'un texte</h3>

  <pre><code class="language-html">&lt?php $age = 25;
echo "tu as ".$age." ans.";  </code></pre>

  <h3>Les principaux types</h3>

  <p> Les principaux types des variables en PHP sont string, int, float, bool (true, false) et NULL. Ce dernier caractérise l'absence de
  type et s'utilise souvent pour tester si une variable est vide avec l'instruction if($maVariable == NULL).</p>

  <p>Remarquons que le symbole ! permet la négation d'un booléen. Par exemple si $maVariable = true alors
  !$maVariable vaut false.</p>


  <!-- OPERATEURS -->

  <h2>Opérateurs standard</h2>

  <p>Les opérateurs standard sont les suivants : <br/>addition +, soustraction -, multiplication *, division /, modulo %,
  AND ou &&, OR ou ||</p>
  <p>L'incrémentation s'effectue de façon standard avec compteur++</p>
  <p>Les opérateurs de comparaison sont les suivants : <br/>
  égal ==, supérieur à >, inférieur à <, supérieur ou égal >=, inférieur ou égal <=, différent !=</p>
  <p>La concaténation de string est réalisée à l'aide d'un point .</p>


  <!-- CONDITIONS -->

  <h2>Les instructions conditionnelles</h2>

  <h3>L'instruction if</h3>

  <pre><code class="language-html">if (condition){
  instructions;
}
elseif (condition){
  instructions;
}
else{
  instructions;
}</code></pre>

  <h3>L'instruction switch</h3>

  <pre><code class="language-html">switch($maVariable){
  case 0:
    echo "mon message";
    break;
  case 1:
    echo "mon message";
    break;
  default:
    echo "mon message";
}</code></pre>

  <p>On utilise dans l'exemple ci-dessus les instructions break car sinon l'interpréteur lit les instructions
  qui suivent et qui ne conviennent pas.</p>

  <h3>Les ternaires</h3>

  <p>Traduisons l'instruction suivante à l'aide de ternaires : si $age est supérieur à 18 alors $estMajeur prend
  la valeur true, sinon il prend la valeur false.</p>

  <pre><code class="language-html">$estMajeur = ($age>18) ? true : false;</code></pre>

  <h2>Les boucles</h2>

  <h3>La boucle while</h3>

  <pre><code class="language-html">&lt?php while (condition){
  instructions;
}?&gt</code></pre>

<h3>La boucle for</h3>

  <pre><code class="language-html">&lt?php for ($i=0; $i<10; $i++){
  instructions;
}?></code></pre>

<!-- TABLEAUX -->

  <h2>Les tableaux</h2>

<h3>Création d'un tableau</h3>

  <pre><code class="language-html">&lt?php $tab = array("Hervé", "Benoit", "Simon"); ?&gt</code></pre>

  <h3>Affectation et changement de valeur</h3>

  <pre><code class="language-html">&lt?php $tab[2] = "Etienne"; ?&gt</code></pre>

  <h3>Particularité de PHP</h3>

  <p>Il est possible de remplir un tableau sans préciser l'indice. Celui-ci se met à jour automatiquement en choisissant
  une valeur immédiatement supérieure au plus grand indice.</p>

  <pre><code class="language-html">&lt?php $tab[] = "Noémie";
$tab[] = "Charlize"; ?&gt</code></pre>

  <h3>Affichage d'une valeur</h3>

  <p>Pour afficher la valeur de $tab à l'indice 4 :</p>
  <pre><code class="language-html">&lt?php  echo $tab[4] ?&gt</code></pre>

  <h3>Parcours d'un tableau</h3>

  <pre><code class="language-html">&lt?php  for($i=0; $i<5; $i++){
  echo $tab[$i]. "&ltbr/&gt";
}?&gt</code></pre>

  <p>ou encore l'utilisation de la boucle foreach, équivalente PHP du for in de Python :</p>

  <pre><code class="language-html">&lt?php  foreach($tab as $elm){
  echo $elmt. "&ltbr/&gt";
?&gt</code></pre>


  <h2>Les dictionnaires</h2>

  <p>Les dictionnaires sont appelés tableaux associatifs en PHP.</p>

  <h3>Création d'un dictionnaire</h3>

  <p>On utilise toujours le mot clé array</p>

  <pre><code class="language-html">&lt?php $dico = array(
  "nom" => "Pierre";
  "age" => 18;
)?&gt</code></pre>

  <h3>Affectation et changement de valeur</h3>

  <pre><code class="language-html">&lt?php $dico["nom"] = "Antoine"; ?&gt</code></pre>

  <h3>Affichage d'une valeur</h3>

  <pre><code class="language-html">&lt?php echo $dico["nom"]; ?&gt</code></pre>

  <h3>Affichage d'un dictionnaire</h3>

  <p>On utilise la boucle foreach pour afficher les valeurs</p>

  <pre><code class="language-html">&lt?php  foreach($dico as $valeur){
  echo $valeur. "&ltbr/&gt";
?&gt</code></pre>

  <p>On utilise également la boucle foreach pour afficher les couples clés-valeurs</p>

  <pre><code class="language-html">&lt?php  foreach($dico as $cle => $valeur){
  echo "clé:" . $cle . "valeur:" . $valeur . "&ltbr/&gt";
?&gt</code></pre>


  <h3>Rechercher dans un tableau</h3>

  <p>L'instruction suivante renvoie un booléen si maValeur existe dans le tableau $tab :</p>
  <pre><code class="language-html">&lt?php in_array("maValeur", $tab); ?&gt</code></pre>
  <p>Cette instruction est commune pour les tableaux et les dictionnaires.</p>

  <p>L'instruction suivante renvoie l'indice de maValeur dans le tableau $tab :</p>
  <pre><code class="language-html">&lt?php array_search("maValeur", $tab); ?&gt</code></pre>
  <p>Cette instruction est commune pour les tableaux et les dictionnaires. Attention, si maValeur ne s'y trouve pas, alors l'instruction renvoie false. Cela signifie que le type qui est renvoyé
    est variable, soit un string soit un bool.</p>



  <h3>Rechercher dans un dictionnaire</h3>

  <p>L'instruction suivante renvoie un booléen si maValeur existe dans le dictionnaire $dico :</p>
  <pre><code class="language-html">&lt?php in_array("maValeur", $tab); ?&gt</code></pre>
  <p>Cette instruction est commune pour les dictionnaires et les tableaux.</p>

  <p>L'instruction suivante renvoie un booléen si la clé maCle existe dans le dictionnaire $dico :</p>
  <pre><code class="language-html">&lt?php array_key_exists("maCle", $dico); ?&gt</code></pre>

  <p>L'instruction suivante renvoie la clé de maValeur dans le dictionnaire $dico :</p>
  <pre><code class="language-html">&lt?php array_search("maValeur", $dico); ?&gt</code></pre>
  <p>Cette instruction est commune pour les dictionnaires et les tableaux. Attention, si maValeur ne s'y trouve pas, alors l'instruction renvoie false. Cela signifie que le type qui est renvoyé
  est variable, soit un string soit un bool.</p>

  <h2>Les fonctions</h2>

  <p>On définit la fonction maFonction de la façon suivante</p>
  <pre><code class="language-html">&lt?php function maFonction($param){
  instructions;
  return $resultat;
} ?&gt</code></pre>

  <p>On appelle la fonction maFonction de la façon suivante</p>
  <pre><code class="language-html">&lt?php maFonction($param) ?&gt;</code></pre>


  <h2>Traitement des chaînes de caractères</h2>

  <table>
    <tr><th>Fonction</th><th>Résultat obtenu</th></tr>
    <tr><td>strlen($maChaine)</td><td>renvoie la longueur de $maChaine</td></tr>
    <tr><td>str_replace("a", "b", $maChaine)</td><td>remplace les a par des b dans $maChaine</td></tr>
    <tr><td>str_shuffle($maChaine)</td><td>mélange aléatoirement les caractères de $maChaine</td></tr>
    <tr><td>strtolower($maChaine)</td><td>transforme en minuscules $maChaine</td></tr>
    <tr><td>strtolupper($maChaine)</td><td>transforme en majuscules $maChaine</td></tr>
    <tr><td>date("H")</td><td>renvoie l'heure actuelle</td></tr>
    <tr><td>date("i")</td><td>renvoie les minutes actuelles</td></tr>
    <tr><td>date("d")</td><td>renvoie le jour actuel</td></tr>
    <tr><td>date("m")</td><td>renvoie le mois actuel</td></tr>
    <tr><td>date("Y")</td><td>renvoie l'année actuelle</td></tr>
    <tr><td>isset($maVariable)</td><td>renvoie true si $maVariable est définie</td></tr>
  </table>

  <p>A l'instar de PEP pour Python, il existe des standards en PHP notés PSR PHP Standards Recommendations. Par exemple,
  PSR-1 définit les règles basiques d'une page PHP, et PSR-2 définit le coding style. Le respect des différentes règles du
  PSR peut être appliqué en utilisant en ligne de commande l'outil PHPCS-Fixer</p>

  <h2>Transtypage vers un entier</h2>

  <p>On utilise le mot clé int</p>

  <pre><code class="language-html">$maVariable = (int) $maVariable;</code></pre>

  <h3>Particularité de PHP</h3>

  <p>Si la valeur de départ est transformable en entier sans modification, cette valeur est transtypée telle quelle. En revanche,
  si ce n'est pas le cas (parce que cette valeur représente un string par exemple) alors elle est transformée en 0. PHP ne
  lève donc pas d'exception dans ce cas.</p>

  <h3>Les étapes du traitement d'une valeur</h3>

  <p>On vérifie que la variable est bien définie avec la fonction isset(), on cast la variable en int ou en float si on a besoin de
  procéder à des calculs, on définit les conditions sur la variable pour qu'elle satisfasse la proposition.</p>


  <!-- FORMULAIRES -->

  <h3>Utilisation des formulaires</h3>

</section>

<footer>
  Stephane Robin
</footer>

</body>
</html>
