<aside id='table_matieres'>
    <div id=fieldsetTableMatieres>
    <h2 style='color: white;'>Actualité :</h2>
    <p style='text-align: left;'>Rendez-vous directement dans le menu ci-dessus pour consulter les cours...</p>
</div>

<?php
if ($typePage != "pageWorkshop" and $typePage != "challenge" and $typePage != "index" and $typePage != "tirageEleve"and $typePage !="enseignant" and $typePage != "eleve" and $typePage != "bonjour"){

    echo "<div id='fieldsetTableMatieres'>";   	
    	//echo "<h2 style='color:white;'>".strtoupper($niveau)."</h2>";
    
    	echo "<nav>";
    	
    	switch ($niveau){

			case "quatrieme":
                
                //echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=ensembleNombres'>ENSEMBLE DE NOMBRES</a>";

                /*echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=racinesCarrees'>RACINES CARREES</a>";
                 if ($typePage != "quizz"){
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=racinesCarrees'>Généralités</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=racinesCarrees'>Règles de calcul</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=racinesCarrees'>Sans racine au dénominateur</a>";
                }*/

                //echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=trianglesRectangles'>TRIANGLES RECTANGLES</a>";

                //echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=statistiques'>STATISTIQUES</a>";

                /*echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=calculLitteral'>CALCUL LITTERAL</a>";
                if ($typePage != "quizz"){
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=calculLitteral'>Factoriser avec facteur commun</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=calculLitteral'>Factoriser avec identité remarquable</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=calculLitteral'>Développer avec facteur commun</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=calculLitteral'>Développer avec identité remarquable</a>";
                }*/

                /*echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=equations'>EQUATIONS</a>";
                if ($typePage != "quizz"){
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=equations'>Equation degré 1</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=equations'>Equation degré 2 - Règle du produit nul</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=equations'>Equation degré 2 - factorisation</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=equations'>Equation degré 2 - discriminant</a>";
                }*/

                //echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=theoremeThales'>THEOREME DE THALES</a>";

				echo "<br/><a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_0&chapitre=fonctions&nomPage=competence1'>FONCTIONS</a>";
                if ($typePage != "quizz"){
                    echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_0&chapitre=fonctions&nomPage=competence1'>Généralités</a>";
                    echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_0&chapitre=fonctions&nomPage=competence2'>Images et antécédents</a>";
                    echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_0&chapitre=fonctions&nomPage=competence3'>Courbe représentative</a>";
                    echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_0&chapitre=fonctions&nomPage=competence4'>Lecture de courbe</a>";
                    echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_0&chapitre=fonctions&nomPage=competence5'>Fonctions affines - généralités</a>";
                    echo "<a href='modelePage.php?niveau=quatrieme&nomClasse=quatrieme_0&chapitre=fonctions&nomPage=competence6'>Fonctions affines - caractéristiques</a>";
                }

				//echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=probabilites'>PROBABILITES</a>";

                //echo "<p>______________________</p>";
                //echo "<p style='color:#99ffcc'>Résultat global :0 %</p>";
                //if ($typePage == "quizz"){
                    //echo "<p>______________________</p>";
                    //echo "<a href='challenge.php'>CHALLENGE</a>";

                //}
				break;
			
        	case "seconde":
                //echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=nombresReels'>0 % - NOMBRES REELS</a>";
                echo "<br/><a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=python&nomPage=competence1'>PYTHON EN MATHEMATIQUES</a>";
                if ($typePage != "quizz"){
                    echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=python&nomPage=competence1'>Variables et opérateurs</a>";
                    echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_1&chapitre=python&nomPage=competence2'>Les fonctions en Python</a>";
                }
                //echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=valeurAbsolue'>0 % - VALEURS ABSOLUES</a>";
               
                //echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=multipleDiviseur'>0 % - MULTIPLE DIVISEUR</a>";
                
                //echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=vecteursPlan'>0 % - VECTEURS DU PLAN</a>";
            
                
                /*echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=calculLitteral'>CALCUL LITTERAL</a>";
                if ($typePage != "quizz"){
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=calculLitteral'>Développer une expression</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence2&chapitre=calculLitteral'>Factoriser une expression</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence3&chapitre=calculLitteral'>Rendre rationnel un dénominateur</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence4&chapitre=calculLitteral'>Résoudre une inéquation</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence5&chapitre=calculLitteral'>Modéliser une situation</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence6&chapitre=calculLitteral'>Résoudre une équation à l'aide de Python</a>";
                }
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=statistiques'>STATISTIQUE DESCRIPTIVE</a>";
                if ($typePage != "quizz"){
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=statistiques'>Calcul de proportions et pourcentages</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence2&chapitre=statistiques'>Calcul d'un prix après réduction</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence3&chapitre=statistiques'>Déterminer un taux global d'évolution</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence4&chapitre=statistiques'>Indicateurs statistiques avec calculatrice</a>";
                }*/
                
                //echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=inequation'>0 % - INEQUATIONS</a>";
                
                //echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=coordonneesVecteurs'>0 % - COORDONNEES DE VECTEURS</a>";
                
                /*echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=courbesFonctions'>COURBES DE FONCTIONS</a>";
                if ($typePage != "quizz"){
                    echo "<a href='modelePage.php?niveau=seconde&nomClasse=seconde_0&chapitre=fonctions&nomPage=competence1'>Déterminer l'ensemble de définition</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence2&chapitre=courbesFonctions'>Déterminer la parité d'une fonction</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence3&chapitre=courbesFonctions'>Résoudre graphiquement une équation</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence4&chapitre=courbesFonctions'>Résoudre graphiquement une inéquation</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence5&chapitre=courbesFonctions'>Calculer les coordonnées d'une intersection</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence6&chapitre=courbesFonctions'>Etudier la position relative de 2 courbes</a>";
                }*/
                //echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=geometrie'>0 % - PROBLEMES DE GEOMETRIE</a>";
                
                /*echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=probabilite'>PROBABILITE</a>";
                if ($typePage != "quizz"){
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=probabilites'>Décrire une expérience aléatoire</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence2&chapitre=probabilites'>Probabilités à partir de fréquences</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence3&chapitre=probabilites'>Probabilités à partir d'un tableau</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence3&chapitre=probabilites'>Expérience aléatoire à 2 épreuves</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence4&chapitre=probabilites'>Modélisation du tirage d'une urne</a>";
                }*/
               
                /*echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=variationsFonctions'>VARIATIONS DE FONCTIONS</a>";
                if ($typePage != "quizz"){
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=fonctions'>Tableau de variations</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence2&chapitre=fonctions'>Extremum d'une fonction</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence4&chapitre=fonctions'>Apprendre à démontrer</a>";
                }    
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=droitePlan'>DROITES DU PLAN</a>";
                if ($typePage != "quizz"){
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=fonctions'>Représenter une fonction affine</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence2&chapitre=fonctions'>Déterminer graphiquement la pente</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence3&chapitre=fonctions'>Montrer que 2 droites sont parallèles</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence4&chapitre=fonctions'>Equation réduite avec une équation cartésienne</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence5&chapitre=fonctions'>Déterminer le point d'intersection de 2 droites</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence6&chapitre=fonctions'>Déterminer si 2 droites sont parallèles</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence7&chapitre=fonctions'>Equation d'une droite à partir de 2 points</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence8&chapitre=fonctions'>Déterminer l'équation d'une droite à partir d'un point et d'une pente</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence9&chapitre=fonctions'>Tracer une droite avec une équation cartésienne</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence10&chapitre=fonctions'>Déterminer si 3 points sont alignés</a>";
                }*/
                
                //echo "<p>______________________</p>";
                //echo "<p style='color:#99ffcc'>Résultat global :0 %</p>";
                //if ($typePage == "quizz"){
                    //echo "<p>______________________</p>";
                    //echo "<a href='challenge.php'>CHALLENGE</a>";

                //}
				break;
	
    		case "snt":
                echo "<br/><a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence1'>PROGRAMMATION PYTHON</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence1'>L'environnement Python</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence2'>Les variables</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence3'>Les conditions</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence4'>Saisie clavier</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence5'>Les strings</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence6'>Définir une liste</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence7'>Manipuler les listes</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence8'>La boucle for</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence9'>La boucle while</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence10'>Les fonctions</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=python&nomPage=competence11'>Portée des variables</a>";

                echo "<br/><a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence1'>INTERNET</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence1'>Un modèle en couches</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence2'>Le Web</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence3'>Réseaux peer-to-peer</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence4'>Moteurs de recherche</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence5'>Sécurité sur le Web</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=internet&nomPage=competence6'>Création de sites Web</a>";

                echo "<br/><a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=structures_donnees&nomPage=competence1'>STRUCTURES DE DONNEES</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=structures_donnees&nomPage=competence1'>Les formats de données</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=structures_donnees&nomPage=competence2'>Architecture trois tiers</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=structures_donnees&nomPage=competence3'>Algorithme de tri à bulles</a>";

                echo "<br/><a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=reseaux_sociaux&nomPage=competence1'>RESEAUX SOCIAUX</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=reseaux_sociaux&nomPage=competence1'>Les graphes</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=reseaux_sociaux&nomPage=competence2'>Les dangers des réseaux sociaux</a>";

                echo "<br/><a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=localisation&nomPage=competence1'>LOCALISATION</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=localisation&nomPage=competence1'>Triangulation</a>";
                echo "<a href='modelePage.php?niveau=snt&nomClasse=snt_0&chapitre=localisation&nomPage=competence2'>Algorithme de Djikstra</a>";
				break;

            case "nsi":
                echo "<br/><a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence1'>RAPPELS PYTHON</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence1'>L'environnement Python</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence2'>Les variables</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence3'>Les conditions</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence4'>Saisie clavier</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence5'>Les strings</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence6'>Définir une liste</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence7'>Manipuler les listes</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence8'>La boucle for</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence9'>La boucle while</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence10'>Les fonctions</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=python&nomPage=competence11'>Portée des variables</a>";

                echo "<br/><a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=structures_donnees&nomPage=competence1'>STRUCTURES DONNEES</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=structures_donnees&nomPage=competence1'>Structure séquentielle</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=structures_donnees&nomPage=competence2'>Structure hiérarchisée</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=structures_donnees&nomPage=competence3'>Structure relationnelle</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=structures_donnees&nomPage=competence4'>Matrice d'adjacence</a>";

                echo "<br/><a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=programmation&nomPage=competence1'>LANGAGES ET PROGRAMMATION</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=programmation&nomPage=competence1'>Paradigme de programmation</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=programmation&nomPage=competence2'>Programmation objet</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=programmation&nomPage=competence3'>Test et validation</a>";

                echo "<br/><a href=''>BASES DE DONNEES</a>";

                echo "<br/><a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence1'>RESEAUX</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence1'>Architecture matérielle</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence2'>Rappels Internet</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence3'>Rappels Le Web</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence4'>Routage</a>";
                echo "<a href='modelePage.php?niveau=nsi&nomClasse=nsi_0&chapitre=reseaux&nomPage=competence5'>Sécurisation des transmissions</a>";

                echo "<br/><a href=''>ALGORITHMIQUE</a>";
    	}  
    	echo "</nav>";
    				
	echo "</div>";
}
echo "</aside>";
?>
