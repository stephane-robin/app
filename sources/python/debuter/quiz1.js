var titreQcm = "Environnement Python";

var qcm = [
	{
		question: "Python est un langage ...",
		choix: {
			a: 'compilé',
			b: 'interprété',
			c: 'ni l\'un ni l\'autre'
		},
		correct: 'b',
		commentaire: 'Python est un langage interprété. Réponse b.'
	},
	{
		question: "Un langage compilé ...",
		choix: {
			a: 'est plus rapide en général qu\'un langage interprété lors de l\'exécution du code',
			b: 'n\'utilise pas de code binaire',
			c: 's\'utilise uniquement pour faire des calculs'
		},
		correct: 'a',
		commentaire: 'Un langage compilé est généralement plus rapide. Réponse a.'
	},
	{
		question: 'l\'instruction <code class="language-python">print("Hello world")</code> permet ...',
		choix: {
			a: 'de démarrer une console Python',
			b: 'de stocker une première variable en mémoire',
			c: 'd\'afficher "Hello world"'
		},
		correct: 'c',
		commentaire: 'L\'instruction print permet d\'afficher du contenu. Réponse c.'
	},
	{
		question: "Un debugger permet ...",
		choix: {
			a: 'de faciliter la recherche des erreurs de code en arrêtant le code étape par étape',
			b: 'd\'arrêter l\'exécution du code avant qu\'il ne soit trop tard',
			c: 'd\'exécuter un code'
		},
		correct: 'a',
		commentaire: 'Le debugger arrête l\'exécution du code étape par étape pour connaître l\'état des variables à chaque ligne décidée par le développeur. Réponse a.'
	},
	{
		question: "Une interface graphique est ...",
		choix: {
			a: 'une façon d\'exécuter un code',
			b: 'ce que voit l\'utilisateur lorsqu\'il utilise une application',
			c: 'un outil mathématique permettant de tracer des graphes'
		},
		correct: 'b',
		commentaire: 'Une interface graphique réalise le lien entre une application et un utilisateur. Elle permet à celui-ci de visualiser le comportement de l\'application. Réponse b.'
	},
	{
		question: "Un éditeur de texte ...",
		choix: {
			a: 'facilite la lecture du code',
			b: 'édite uniquement les erreurs de code',
			c: 'crée le code pour le programmeur'
		},
		correct: 'a',
		commentaire: 'Un éditeur de texte dispose en général de peu de fonctionnalités. Il se contente faciliter la lecture code. Réponse a.'
	},
	{
		question: "Un outil de versioning permet ...",
		choix: {
			a: 'de connaître le nom de l\'auteur d\'un code',
			b: 'd\'exécuter un code en mode sans erreur',
			c: 'de stocker en mémoire plusieurs versions du code'
		},
		correct: 'c',
		commentaire: 'un outil de versioning conserve l\'historique des versions du code et permet de revenir en arrière si besoin. Réponse c.'
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

