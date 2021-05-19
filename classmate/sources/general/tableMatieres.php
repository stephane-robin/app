<aside id='table_matieres'>
    <div id=fieldsetTableMatieres>
    <h2 style='color: white;'>Actualité :</h2>
    <p style='text-align: left;'>Le site TokeTa est en construction. Rendez-vous bientôt pour commencer des projets intéressants...</p>
</div>

<?php
if ($typePage != "pageWorkshop" and $typePage != "challenge" and $typePage != "index" and $typePage != "tirageEleve"){

    echo "<div id='fieldsetTableMatieres'>";   	
    	echo "<h2 style='color:white;'>".$nomClasse."</h2>";
    
    	echo "<nav>";
    	
    	switch ($nomClasse){

    		case "Sixieme":	
					break;

			case "Quatrieme":
                
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=ensembleNombres'>0 % - ENSEMBLE DE NOMBRES</a>";
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=racinesCarrees'>0 % - RACINES CARREES</a>";
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=trianglesRectangles'>0 % - TRIANGLES RECTANGLES</a>";
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=statistiques'>0 % - STATISTIQUES</a>";
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=calculLitteral'>0 % - CALCUL LITTERAL</a>";
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=equations'>0 % - EQUATIONS</a>";
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=theoremeThales'>0 % - THEOREME DE THALES</a>";
				echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=fonctions'>0% - FONCTIONS</a>";
                if ($typePage != "quizz"){
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=fonctions'>Fonctions - généralités</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence2&chapitre=fonctions'>Images et antécédents</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence3&chapitre=fonctions'>Courbe représentative</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence4&chapitre=fonctions'>Lecture de courbe</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence5&chapitre=fonctions'>Fonctions affines - généralités</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence6&chapitre=fonctions'>Fonctions affines - caractéristiques</a>";
                }
				echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=probabilites'>0 % - PROBABILITES</a>";
                echo "<p>______________________</p>";
                echo "<p style='color:#99ffcc'>Résultat global :0 %</p>";
                if ($typePage == "quizz"){
                    echo "<p>______________________</p>";
                    echo "<a href='challenge.php'>CHALLENGE</a>";

                }
				break;
			
        	case "Seconde":
				break;
	
    		case "SNT":
                echo "<br/><a href=''>LES VARIABLES</a>";
                echo "<br/><a href=''>LES STRING</a>";
                echo "<br/><a href=''>LES CONDITIONS</a>";
                echo "<br/><a href=''>LA BOUCLE FOR</a>";
                echo "<br/><a href=''>LES FONCTIONS</a>";
                echo "<br/><a href=''>LA BOUCLE WHILE</a>";
                echo "<br/><a href=''>LES TABLEAUX ET LISTES</a>";

				break;
    	}  
    	echo "</nav>";
    				
	echo "</div>";
}
echo "</aside>";
?>
