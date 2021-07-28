<aside id='table_matieres'>
    <div id=fieldsetTableMatieres>
    <h2 style='color: white;'>Actualité :</h2>
    <p style='text-align: left;'>Le site ToKeTa est en construction ...</p>
</div>

<?php
if ($typePage != "pageWorkshop" and $typePage != "challenge" and $typePage != "index" and $typePage != "tirageEleve"and $typePage !="enseignant" and $typePage != "eleve" and $typePage != "bonjour"){

    echo "<div id='fieldsetTableMatieres'>";   	    
    	echo "<nav>";
    	
    	switch ($niveau){

			case "quatrieme":

                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=puissances&nomPage=competence1'>RAPPEL PUISSANCES</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=puissances&nomPage=competence1'>Règles de calcul</a>";
                echo "<a href='modeleQuizz.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=puissances&nomPage=competence2'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fractions&nomPage=competence1'>RAPPEL FRACTIONS</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fractions&nomPage=competence1'>Règles de calcul</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fractions&nomPage=competence2'>T.P. Mes débuts en Python &#128165;</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fractions&nomPage=competence3'>T.P. Calcul de fractions avec Python &#128165;</a>";
                echo "<a href='modeleQuizz.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fractions&nomPage=competence4'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=racinesCarrees&nomPage=competence1'>RACINES CARREES</a>";
                 echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=racinesCarrees&nomPage=competence4'>T.P. Utilisation de la calculatrice &#128165;</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=racinesCarrees&nomPage=competence2'>Généralités</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=racinesCarrees&nomPage=competence3'>Règles de calcul</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=racinesCarrees&nomPage=competence4'>Simplifier les racines carrées</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=racinesCarrees&nomPage=competence5'>Supprimer le radical au dénominateur</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=racinesCarrees&nomPage=competence6'>T.P. Les maths et Word &#128165;</a>";
                 echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=racinesCarrees&nomPage=competence7'>Fiche mémo règles de calcul</a>";
                echo "<a href='modeleQuizz.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=racinesCarrees&nomPage=competence8'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                //echo "<br/><a href=''>TRIANGLES RECTANGLES</a>";
                //echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=statistiques&nomPage=competence1'>STATISTIQUES</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=statistiques&nomPage=competence1'>Les notions de base</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=statistiques&nomPage=competence2'>T.P. Calcul des quartiles &#128165;</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=statistiques&nomPage=competence3'>T.P. Séance Mitic &#128165;</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=statistiques&nomPage=competence4'>T.P. Word avec Excel &#128165;</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=statistiques&nomPage=competence5'>Proj. Statistiques descriptives &#127922;</a>";
                echo "<a href='modeleQuizz.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=statistiques&nomPage=competence6'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=calculLitteral&nomPage=competence1'>CALCUL LITTERAL</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=calculLitteral&nomPage=competence1'>Factoriser avec facteur commun</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=calculLitteral&nomPage=competence2'>S'entraîner à factoriser</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=calculLitteral&nomPage=competence3'>Découvrir les identités remarquables</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=calculLitteral&nomPage=competence4'>Factoriser avec identité remarquable</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=calculLitteral&nomPage=competence5'>Développer une expression</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=calculLitteral&nomPage=competence6'>Développer avec identité remarquable</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=calculLitteral&nomPage=competence7'>T.P. Factoriser avec Geogebra &#128165;</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=calculLitteral&nomPage=competence8'>T.P. Factoriser avec Python &#128165;</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=calculLitteral&nomPage=competence9'>T.P. Présentation avec PowerPoint &#128165;</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=calculLitteral&nomPage=competence10'>Proj. Présentation d'un cours &#127922;</a>";
                echo "<a href='modeleQuizz.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=calculLitteral&nomPage=competence11'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=equations&nomPage=competence1'>EQUATIONS</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=equations&nomPage=competence1'>Equation degré 1</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=equations&nomPage=competence2'>Equation degré 2 - Règle du produit nul</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=equations&nomPage=competence3'>Equation degré 2 - factorisation</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=equations&nomPage=competence4'>Equation degré 2 - discriminant</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=equations&nomPage=competence5'>T.P. Méthode du discriminant Scratch &#128165;</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=equations&nomPage=competence6'>T.P. Séance Mitic &#128165;</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=equations&nomPage=competence7'>T.P. Séance Mitic &#128165;</a>";
                echo "<a href='modeleQuizz.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=equations&nomPage=competence8'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                echo "<a href=''>PROJETS</a>";     
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=projets&nomPage=competence2'>Proj. Un problème de construction &#127922;</a>";
                echo "<p>--------------------</p>";

				echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fonctions&nomPage=competence1'>FONCTIONS</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fonctions&nomPage=competence1'>Généralités</a>";
                 echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fonctions&nomPage=competence2'>Images et antécédents</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fonctions&nomPage=competence3'>Courbe représentative</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fonctions&nomPage=competence4'>Lecture de courbe</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fonctions&nomPage=competence5'>Fonctions affines - généralités</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fonctions&nomPage=competence6'>Fonctions affines - caractéristiques</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fonctions&nomPage=competence7'>T.P. Les courbes avec Geogebra &#128165;</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fonctions&nomPage=competence8'>T.P. Séance Mitic &#128165;</a>";
                echo "<a href='modeleQuizz.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=fonctions&nomPage=competence9'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

				echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=probabilites&nomPage=competence1'>PROBABILITES</a>";
                echo "<a href='modeleQuizz.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=probabilites&nomPage=competence1'>Règles de probabilité</a>";
                echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=probabilites&nomPage=competence2'>T.P. Loi grands nombres Python &#128165;</a>";
                echo "<a href='modeleQuizz.php?niveau=quatrieme&nomClasse=quatrieme_F1&chapitre=probabilites&nomPage=competence3'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

				break;
			
        	case "seconde":

                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=nombresReels&nomPage=competence1'>NOMBRES REELS</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=nombresReels&nomPage=competence1'>Ensemble de nombres (rappel)</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=nombresReels&nomPage=competence2'>Manipuler les intervalles</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=nombresReels&nomPage=competence3'>Encadrement d'un nombre</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=nombresReels&nomPage=competence4'>Variables et opérateurs</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=nombresReels&nomPage=competence5'>Les fonctions en Python</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=nombresReels&nomPage=competence6'>Trouver une valeur approchée</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=nombresReels&nomPage=competence7'>T.P. Le nombre d'Or &#128165;</a>";
                echo "<a href='modeleQuizz.php?niveau=seconde&nomClasse=seconde_B1&chapitre=nombresReels&nomPage=competence8'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=valeurAbsolue&nomPage=competence1'>VALEURS ABSOLUES</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=valeurAbsolue&nomPage=competence1'>Règles de calcul</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=valeurAbsolue&nomPage=competence2'>Equation avec valeur absolue</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=valeurAbsolue&nomPage=competence3'>Inéquation avec valeur absolue</a>";
                echo "<a href=''>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                echo "<a href=''>MULTIPLE DIVISEUR</a>";
                echo "<a href=''>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                echo "<a href=''>VECTEURS DU PLAN</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=calcul_numerique&nomPage=competence1'>CALCUL NUMERIQUE</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=calcul_numerique&nomPage=competence1'>Calcul avec racines carréées (rappel)</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=calcul_numerique&nomPage=competence2'>Simplifier les racines carrées (rappel)</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=calcul_numerique&nomPage=competence3'>Pas de radical au dénominateur (rappel)</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=calcul_numerique&nomPage=competence4'>Simplification avec expression conjuguée</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=calcul_numerique&nomPage=competence5'>Calcul avec puissances (rappel)</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=calcul_numerique&nomPage=competence6'>T.P. Les maths et Word &#128165;</a>";
                echo "<a href='modeleQuizz.php?niveau=seconde&nomClasse=seconde_1&chapitre=calcul_numerique&nomPage=competence7'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";
               
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&nomPage=competence1'>CALCUL LITTERAL</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&nomPage=competence1'>S'entraîner à factoriser</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&nomPage=competence2'>Factoriser avec identité remarquable</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&nomPage=competence3'>Développer une expression</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&nomPage=competence4'>Développer avec identité remarquable</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&nomPage=competence5'>T.P. Factoriser avec Python &#128165;</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&nomPage=competence6'>Rendre rationnel un dénominateur</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&nomPage=competence7'>Résoudre une inéquation</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&nomPage=competence8'>Modéliser une situation</a>";     
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&nomPage=competence9'>T.P. Résoudre une équation avec Python &#128165;</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=calculLitteral&nomPage=competence10'>Proj. Présentation d'un cours &#127922;</a>";
                echo "<a href='modeleQuizz.php?niveau=seconde&nomClasse=seconde_1&chapitre=calculLitteral&nomPage=competence11'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";
        
                echo "<a href=''>STATISTIQUE DESCRIPTIVE</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=statistiques&nomPage=competence1'>Les notions de base</a>";
                echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_B1&chapitre=statistiques&nomPage=competence2'>Calcul de proportions et pourcentages</a>";
                echo "<a href=''>Calcul d'un prix après réduction</a>";
                echo "<a href=''>Déterminer un taux global d'évolution</a>";
                echo "<a href=''>T.P. Indicateurs statistiques et calculatrice &#128165;</a>";
                echo "<a href='modeleQuizz.php?niveau=seconde&nomClasse=seconde_1&chapitre=statistiques&nomPage=competence6'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";
                
                echo "<a href=''>INEQUATIONS</a>";
                echo "<a href=''>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";
                
                echo "<a href=''>COORDONNEES DE VECTEURS</a>";
                echo "<p>--------------------</p>";
                
                echo "<a href=''>COURBES DE FONCTIONS</a>";
                echo "<a href=''>Déterminer l'ensemble de définition</a>";
                echo "<a href=''>Déterminer la parité d'une fonction</a>";
                echo "<a href=''>Résoudre graphiquement une équation</a>";
                echo "<a href=''>Résoudre graphiquement une inéquation</a>";
                echo "<a href=''>Calculer les coordonnées d'une intersection</a>";
                echo "<a href=''>Etudier la position relative de 2 courbes</a>";
                echo "<a href=''>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";
                
                echo "<a href=''>PROBLEMES DE GEOMETRIE</a>";
                echo "<p>--------------------</p>";
                
                echo "<a href=''>PROBABILITES</a>";
                echo "<a href=''>Décrire une expérience aléatoire</a>";
                echo "<a href=''>Probabilités à partir de fréquences</a>";
                echo "<a href=''>Probabilités à partir d'un tableau</a>";
                echo "<a href=''>Expérience aléatoire à 2 épreuves</a>";
                echo "<a href=''>T.P. Modélisation du tirage d'une urne &#128165;</a>";
                echo "<a href='modeleQuizz.php?niveau=seconde&nomClasse=seconde_1&chapitre=probabilites&nomPage=competence6'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";
            
                echo "<a href=''>VARIATIONS DE FONCTIONS</a>";
                echo "<a href=''>Tableau de variations</a>";
                echo "<a href=''>Extremum d'une fonction</a>";
                echo "<a href=''>T.P. Calcul du maximum avec Python &#128165;</a>";
                echo "<a href=''>Apprendre à démontrer</a>";
                echo "<a href=''>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                echo "<a href=''>DROITES DU PLAN</a>";
                echo "<a href=''>Représenter une fonction affine</a>";
                echo "<a href=''>Déterminer graphiquement la pente</a>";
                echo "<a href=''>Montrer que 2 droites sont parallèles</a>";
                echo "<a href=''>Equation réduite, équation cartésienne</a>";
                echo "<a href=''>Déterminer le point d'intersection de 2 droites</a>";
                echo "<a href=''>Déterminer si 2 droites sont parallèles</a>";
                echo "<a href=''>Equation d'une droite à partir de 2 points</a>";
                echo "<a href=''>Equation de droite avec un point et une pente</a>";
                echo "<a href=''>Tracer une droite</a>";
                echo "<a href=''>Déterminer si 3 points sont alignés</a>";
                echo "<a href=''>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                echo "<a href=''>ECHANTILLONNAGE</a>";
                echo "<p>--------------------</p>";
               
				break;
	
    		case "snt":

                echo "<br/><a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence1'>PROGRAMMATION PYTHON</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence1'>L'environnement Python</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence2'>Les variables</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence3'>Les conditions</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence4'>Saisie clavier</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence5'>Résolution de système &#128165;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence6'>La boucle for</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence7'>Module turtle &#128165;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence8'>Les chaînes</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence9'>Chaine &#128165;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence10'>Mot de passe &#128165;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence11'>Définir une liste</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence12'>Manipuler les listes</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence13'>La boucle while</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence14'>Les fonctions</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence15'>Fonctions &#128165;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence16'>Portée des variables</a>";
                echo "<a href='modeleQuizz.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence17'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence1'>INTERNET</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence1'>Un réseau &#127922;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence2'>Un modèle en couches</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence3'>Adresse IP &#128165;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence4'>Le Web</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence5'>Le DNS &#127922;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence6'>Réseaux peer-to-peer</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence7'>Moteurs de recherche</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence8'>Sécurité sur le Web</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence9'>Essai cybersécurité &#127922;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence10'>Liens hypertextes &#127922;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence11'>Création de sites Web</a>";
                echo "<a href='modeleQuizz.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence12'>Quizz &#128526;</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=structures_donnees&nomPage=competence1'>STRUCTURES DE DONNEES</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=structures_donnees&nomPage=competence1'>Les formats de données</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=structures_donnees&nomPage=competence2'>tableau de données &#127922;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=structures_donnees&nomPage=competence3'>Cloud computing</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=structures_donnees&nomPage=competence4'>Savoir récupérer des données &#128165;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=structures_donnees&nomPage=competence5'>Architecture trois tiers</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=structures_donnees&nomPage=competence6'>Algorithme de tri à bulles</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=reseaux_sociaux&nomPage=competence1'>RESEAUX SOCIAUX</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=reseaux_sociaux&nomPage=competence1'>Les graphes</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=reseaux_sociaux&nomPage=competence2'>Les dangers des réseaux sociaux</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=reseaux_sociaux&nomPage=competence3'>Do not track &#127922;</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=localisation&nomPage=competence1'>LOCALISATION</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=localisation&nomPage=competence1'>Triangulation</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=localisation&nomPage=competence2'>Géolocalisation &#127922;</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=localisation&nomPage=competence3'>Algorithme de Djikstra</a>";
				break;

            case "nsi":
                
                echo "<br/><a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence1'>RAPPELS PYTHON</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence1'>Les variables</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence2'>Les conditions</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence3'>Saisie clavier</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence4'>Résolution de système &#128165;</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence5'>La boucle for</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence6'>Les chaînes</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence7'>Mot de passe &#128165;</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence8'>Définir une liste</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence9'>Manipuler les listes</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence10'>La boucle while</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence11'>Les fonctions</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence12'>Les fonctions &#128165;</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence13'>Portée des variables</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence14'>Convertisseur binaire &#128165;</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=structures_donnees&nomPage=competence1'>STRUCTURES DONNEES</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=structures_donnees&nomPage=competence1'>Structure séquentielle</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=structures_donnees&nomPage=competence2'>Structure hiérarchisée</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=structures_donnees&nomPage=competence3'>Structure relationnelle</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=structures_donnees&nomPage=competence4'>Matrice d'adjacence</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=programmation&nomPage=competence1'>LANGAGES ET PROGRAMMATION</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=programmation&nomPage=competence1'>Paradigme de programmation</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=programmation&nomPage=competence2'>Programmation objet</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=programmation&nomPage=competence3'>Test et validation</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=base_donnees&nomPage=competence1'>BASES DE DONNEES</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=base_donnees&nomPage=competence1'>Modèle relationnel</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=base_donnees&nomPage=competence2'>Langage SQL</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=base_donnees&nomPage=competence3'>Python et SQLite &#128165;</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence1'>RESEAUX</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence1'>Architecture matérielle</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence2'>Rappels Internet</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence3'>Rappels Le Web</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence4'>Adresse IP</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence5'>Routage</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence6'>Sécurisation des transmissions</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence7'>Cryptographie RSA &#128165;</a>";
                echo "<p>--------------------</p>";

                echo "<a href=''>ALGORITHMIQUE</a>";
                break;

            case "memento":
                
                echo "<br/><a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&nomPage=competence1'>HTML</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&nomPage=competence1'>Structure d'une page</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&nomPage=competence2'>flexbox</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&nomPage=competence3'>Liens et menus</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&nomPage=competence4'>Images et vidéos</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&nomPage=competence5'>Les formulaires</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=html&nomPage=competence6'>Responsive design, media queries</a>";
                echo "<p>--------------------</p>";
        
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=css&nomPage=competence1'>CSS</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=css&nomPage=competence1'>Structure du code</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=css&nomPage=competence2'>Mise en forme</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=css&nomPage=competence3'>Propriétés</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=css&nomPage=competence4'>Héritage</a>";
                echo "<p>--------------------</p>";
        
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=php&nomPage=competence1'>PHP</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=php&nomPage=competence1'>Structure du code</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=php&nomPage=competence2'>Les variables</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=php&nomPage=competence3'>Boucles, conditions, fonctions</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=php&nomPage=competence4'>Programmation objet</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=php&nomPage=competence5'>Entrées/sorties</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=javascript&nomPage=competence1'>JAVASCRIPT</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=javascript&nomPage=competence1'>Structure du code</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=javascript&nomPage=competence2'>Les variables</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=javascript&nomPage=competence3'>Boucles, conditions, fonctions</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=javascript&nomPage=competence4'>Programmation objet</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=javascript&nomPage=competence5'>Entrées/sorties</a>";
                echo "<p>--------------------</p>";
        
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&nomPage=competence1'>PYTHON</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&nomPage=competence1'>Structure du code</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&nomPage=competence2'>Les variables</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&nomPage=competence3'>Boucles, conditions, fonctions</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&nomPage=competence4'>Programmation objet</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&nomPage=competence5'>Entrées/sorties</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&nomPage=competence6'>Environnement de travail</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=python&nomPage=competence7'>Créer un package</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&nomPage=competence1'>JAVA</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&nomPage=competence1'>Structure du code</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&nomPage=competence2'>Les variables</a>";       
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&nomPage=competence3'>Boucles, conditions, fonctions</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&nomPage=competence4'>Programmation objet</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&nomPage=competence5'>Entrées/sorties</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&nomPage=competence6'>Les réseaux, proxys, sockets</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=java&nomPage=competence7'>RMI, JMS, REST</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=linux&nomPage=competence1'>LINUX</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=linux&nomPage=competence1'>Le Terminal</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=linux&nomPage=competence2'>Installation programme</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=linux&nomPage=competence3'>Mise à niveau</a>";
                echo "<p>--------------------</p>";

                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=git&nomPage=competence1'>GIT</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=git&nomPage=competence1'>Configuration, historique</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=git&nomPage=competence2'>Instructions Git</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=git&nomPage=competence3'>Les branches</a>";
                echo "<p>--------------------</p>";
        
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=c&nomPage=competence1'>C</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=c&nomPage=competence1'>Structure du code</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=c&nomPage=competence2'>Les variables</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=c&nomPage=competence3'>Boucles, conditions, fonctions</a>";
                echo "<a href='modelePage.php?niveau=memento&nomClasse=memento_0&chapitre=c&nomPage=competence4'>Les pointeurs</a>";
     
    	}  
    	echo "</nav>";
    				
	echo "</div>";
}
echo "</aside>";
?>
