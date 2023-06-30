<?php
$cours = "Gardons les idées claires";
$activ = "Activité";

/* dictionnaire indiquant les titres des pages et leurs types */
$titres = [
    'maths'=> [
        'calcul'=> [
            'competence1'=> ['Python pour le calcul de fractions', $activ],
            'competence2'=> ['Savoir calculer avec les puissances', $cours],
            'competence3'=> ['Savoir calculer avec les racines', $cours],
            'competence4'=> ['Comment simplifier des fractions avec racines', $cours],
            'competence5'=> ['Découvrir les valeurs absolues', $cours],
            'competence6'=> ['Trouver une valeur approchée', $cours],
            'competence7'=> ['Python pour déterminer si un nombre est premier', $activ],
            'competence8'=> ['Savoir utiliser les multiples-diviseurs', $cours],
            'competence9'=> ['Connaître les ensembles de nombres', $cours],
            'competence10'=> ['Savoir manipuler les intervalles', $cours],
            'competence11'=> ['Créer simplement un document avec LaTeX', $activ]
        ],
        'calcul_litteral'=> [
            'competence1'=> ['TP - Ecrire des équations avec Word', $activ],
            'competence2'=> ['Apprendre à factoriser une expression', $cours],
            'competence3'=> ['Utiliser les identités remarquables', $cours],
            'competence4'=> ['Comment développer une expression', $cours],
            'competence5'=> ['Utiliser Python pour résoudre une équation de degré 1', $cours],
            'competence6'=> ['Utiliser Python pour résoudre une équation de degré 2', $cours],
            'competence7'=> ['TP - Utiliser Python pour résoudre tout type d\'équation', $activ],
            'competence8'=> ['Résoudre une inéquation de degré 1', $cours],
            'competence9'=> ['Equation/inéquation avec valeur absolue', $cours],
            'competence10'=> ['Comprendre la différence entre images et antécédents', $cours],
            'competence11'=> ['Fonctions affines', $cours],
            'competence12'=> ['TP - Utiliser Python pour tracer des courbes', $activ]
        ],
        'statistiques'=> [
            'competence1'=> ['Découvrir les statistiques sur un exemple', $cours],
            'competence2'=> ['Les statistiques descriptives', $cours],
            'competence3'=> ['TP - Analyse de données en statistiques descriptives', $activ],
            'competence4'=> ['Savoir retrouver les quartiles manuellement', $cours],
            'competence5'=> ['Pourcentage et évolution d\'une valeur', $cours],
            'competence6'=> ['Connaître les règles de probabilité', $cours],
            'competence7'=> ['TP - Loi des grands nombres avec Python', $activ]
        ]
        ],
    'nsi' => [
        'internet' => [
            'competence1'=> ['Un modèle en couches', $cours],
            'competence2'=> ['TP - Un réseau mondial', $activ],
            'competence3'=> ['TP - Adresse IP', $activ],
            'competence4'=> ['Comprendre le Web', $cours],
            'competence5'=> ['TP - Liens hypertextes', $activ],
            'competence6'=> ['TP - Le DNS', $activ],
            'competence7'=> ['Réseaux peer-to-peer', $cours],
            'competence8'=> ['Moteurs de recherche', $cours],
            'competence9'=> ['Sécurité sur le Web', $cours],
            'competence10'=> ['Les dangers des réseaux sociaux', $cours],
            'competence11'=> ['TP - Les traces numériques', $activ],
            'competence12'=> ['Représenter les réseaux sociaux avec des graphes', $cours]
        ],
        'architecture' => [
            'competence1'=> ['Architecture Von Neumann', $cours],
            'competence2'=> ['Concurrence de processus', $cours],
            'competence3'=> ['Système Linux', $cours],
            'competence4'=> ['TP - Le Terminal', $activ],
            'competence5'=> ['Adresse IP', $cours],
            'competence6'=> ['Le routage IP', $cours],
            'competence7'=> ['Sécurisation des transmissions', $cours],
            'competence8'=> ['TP - Projet de cryptographie', $activ],
            'competence9'=> ['TP - Attaque brute force', $activ]
        ],
        'donnees_structurees' => [
            'competence1'=> ['Les formats de fichiers', $cours],
            'competence2'=> ['Lecture/écriture d\'un fichier distant', $cours],
            'competence3'=> ['Introduction aux bases de données', $cours],
            'competence4'=> ['Le Cloud computing', $cours],
            'competence5'=> ['Les piles', $cours],
            'competence6'=> ['Les files', $cours],
            'competence7'=> ['Les listes', $cours],
            'competence8'=> ['Les données en arbres', $cours],
            'competence9'=> ['Les données en graphes', $cours],
            'competence10'=> ['Modéliser les graphes en Python', $cours],
            'competence11'=> ['Le modèle relationnel', $cours],
            'competence12'=> ['Le langage SQL', $cours],
            'competence13'=> ['TP - Python et SQLite', $activ]
        ],
        'objets_connectes' => [
            'competence1'=> ['L\'Internet des objets', $cours],
            'competence2'=> ['TP - Système informatique embarqué', $activ],
            'competence3'=> ['Photographie numérique', $cours],
            'competence4'=> ['TP - Photographie numérique', $activ],
            'competence5'=> ['TP - Traitement d\'image avec Gimp', $activ],
            'competence6'=> ['Triangulation', $cours],
            'competence7'=> ['TP - Triangulation', $activ],
            'competence8'=> ['TP - Géolocalisation', $activ]
        ]
    ],
    'web' => [
        'debuter' => [
            'competence1'=> ['Structure des pages Web', $cours],
            'competence2'=> ['TP - Créer un site Web avec HTML/CSS', $activ]
        ],
        'javascript' => [
            'competence1'=> ['Structure d\'un script', $cours],
        ]
        ],
    'python' => [
        'debuter' => [
            'competence1'=> ['L\'environnement Python', $cours],
            'competence2'=> ['Les variables', $cours],
            'competence3'=> ['Découvrir les chaînes de caractères', $cours],
            'competence4'=> ['Les conditions', $cours],
            'competence5'=> ['La boucle while', $cours],
            'competence6'=> ['Les fonctions', $cours],
            'competence7'=> ['TP - Dessiner avec Python', $activ] ,
            'competence8'=> ['TP - Jeu du pendu, niveau 1', $activ]      
        ],
        'progresser' => [
            'competence1'=> ['La boucle for', $cours],
            'competence2'=> ['Les listes', $cours],
            'competence3'=> ['Les dictionnaires', $cours],
            'competence4'=> ['La portée des variables', $cours],
            'competence5'=> ['TP - Mot de passe', $activ],
            'competence6'=> ['TP - Les fonctions', $activ],
            'competence7'=> ['TP - Convertisseur binaire', $activ],
            'competence8'=> ['TP - Jeu de morpion', $activ],
            'competence9'=> ['TP - Bataille navale', $activ],
            'competence10'=> ['TP - Jeu du pendu, niveau 2', $activ]
        ],
        'avance' => [
            'competence1'=> ['Programmation fonctionnelle', $cours],
            'competence2'=> ['Algorithmique', $cours],
            'competence3'=> ['Programmation orientée objet', $cours],
            'competence4'=> ['Principes de la programmation objet', $cours],
            'competence5'=> ['Test et validation', $cours],
            'competence6'=> ['Interface graphique', $cours],
            'competence7'=> ['Créer un site Web avec Django', $cours],
            'competence8'=> ['Créer un package avec Poetry', $cours],
            'competence9'=> ['TP - Jeu de rôles', $activ],
            'competence10'=> ['TP - Le jeu de la vie', $activ],
            'competence11'=> ['TP - Séquence de génome', $activ],
            'competence12'=> ['TP - Jeu du pendu, niveau 3', $activ]
        ]
    ]
];
?>