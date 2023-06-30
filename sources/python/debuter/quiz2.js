var titreQcm = "Les variables";

var qcm = [
	{
		question: 'Les guillemets "" servent à définir la valeur d\'une variable de type chaîne de caractères :',
		choix: {
			a: 'faux',
			b: 'vrai',
			c: 'il faut au contraire enlever les guillemets dans le cas d\'une chaîne de caractères'
		},
		correct: 'b',
		commentaire: 'Les définissent la valeur d\'une variable sous forme de texte. Réponse b.'
	},
	{
		question: 'L\'instruction <code class="language-python">print("prenom")</code> affiche :',
		choix: {
			a: 'prenom',
			b: 'prénom',
			c: 'la valeur de la variable <strong>prenom</strong>'
		},
		correct: 'a',
		commentaire: 'Le code affiche exactement ce qui est écrit entre les guillemets. Réponse a.'
	},
	{
		question: 'Pour connaître le type de la variable <strong>annee</strong> il faut exécuter l\'instruction :',
		choix: {
			a: '<code class="language-python">print(type(annee))</code>',
			b: '<code class="language-python">print(annee.type())</code>',
			c: '<code class="language-python">print=type(annee)</code>'
		},
		correct: 'a',
		commentaire: 'Réponse a.'
	},
	{
		question: "L'opérateur % sert à :",
		choix: {
			a: 'rajouter des commentaires dans un code',
			b: 'calculer la puissance d\'un nombre par un autre',
			c: 'calculer le reste de division d\'un nombre par un autre'
		},
		correct: 'c',
		commentaire: 'L\'opérateur % appelé modulo est souvent utilisé. Il calcule le reste de division. Réponse c.'
	},
	{
		question: 'Le code suivant :</p><pre><code class="language-python">x = 2\ny = 3\nx = y\ny = x</code></pre><p>sert à inverser les valeurs des variables <strong>x</strong> et <strong>y</strong> :',
		choix: {
			a: 'vrai',
			b: 'faux',
			c: 'il permet en fait de rajouter <strong>x</strong> à <strong>y</strong>'
		},
		correct: 'b',
		commentaire: 'Il est nécessaire d\'introduire une variable temporaire pour ne pas perdre la valeur de <strong>x</strong>. Réponse b.'
	},
	{
		question: "Quels sont les types de variables existant en Python ?",
		choix: {
			a: 'int, float, text, varchar',
			b: 'int, float, str, bool',
			c: 'None, real, decimal, text'
		},
		correct: 'b',
		commentaire: 'Réponse b.'
	},
	{
		question: 'le code suivant <code class="language-python">print("nom" + "prenom")</code> affiche :',
		choix: {
			a: 'nom prenom',
			b: 'la valeur de la variable <strong>nom</strong> suivie de la valeur de la variable <strong>prenom</strong>',
			c: 'nomprenom'
		},
		correct: 'c',
		commentaire: 'On ne trouve aucun espace entre les guillemets, donc nom et preenom seront affichés collés. Réponse c.'
	},
	{
		question: "dans un environnement de développement ...",
		choix: {
			a: 'tous les réglages sont faits à l\'installation et tous les modules sont installés',
			b: 'il faut choisir les réglages, la version de Python à utiliser et installer certains modules',
			c: 'les réglages se font automatiquement lors de l\'exécution du code'
		},
		correct: 'b',
		commentaire: 'Un outil de développement offre de nombreuses possibilités dont le debuggage, mais le développeur doit installer lui-même les modules dont il a besoin, et doit choisir son interpréteur pour chaque projet. Réponse b.'
	},
	{
		question: "Un interpréteur Python en ligne ...",
		choix: {
			a: 'permet d\'exécuter du code Python',
			b: 'permet d\'écrire uniquement du code Python avec un outil de coloration de code',
			c: 'sert uniquement à corriger le code pour le mettre aux normes du PEP8'
		},
		correct: 'a',
		commentaire: 'Un interpréteur Python en ligne utilise un serveur sur lequel est installée une version de Python afin d\'exécuter du ConvolverNode. Réponse a.'
	},
	{
		question: "le code source Python d'un fichier monFichier.py est d'abord transformé en une version monFichier.pyc pouvant être lue par l\'ordinateur avant d\'être exécuté : ",
		choix: {
			a: 'vrai',
			b: 'vrai mais le fichier est renommé monFichier.c.py avant d\'être lu par l\'ordinateur',
			c: 'faux'
		},
		correct: 'c',
		commentaire: 'Python est un langage interprété. Il ne transforme pas son code source en une version compilée. Réponse c.'
	}
];

