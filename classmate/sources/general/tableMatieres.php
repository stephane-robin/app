<aside id='table_matieres'>
    <div id=fieldsetTableMatieres>
    <h2 style='color: white;'>Actualité :</h2>
    <p style='text-align: left;'>Le site TokeTa est en construction. Rendez-vous bientôt pour commencer des projets intéressants...</p>
</div>

<?php
if ($typePage != "pageWorkshop" and $typePage != "challenge" and $typePage != "index" and $typePage != "tirageEleve"){

    echo "<div id='fieldsetTableMatieres'>";   	
    	echo "<h2 style='color:white;'>".$nomClasse."</h2>";

        if ($typePage == "modelePage"){
            echo "<form style='margin-left:20%; margin-top:1%; margin-bottom:1%;' action='starter.php?nomClasse=".$nomClasse."&chapitre=".$chapitre."&nomPage=".$nomPage."' method='post'>";
            echo "<button class='bouton' style='margin-left:3%; margin-top:2%; margin-bottom:2%;' type='submit'>Starter</button>";
            echo "</form>";
        }
    
    	echo "<nav>";
    	
    	switch ($nomClasse){

    		case "Sixieme":	
					break;

			case "Quatrieme":
                if ($typePage == "quizz"){
                    echo "<p style='color:#99ffcc'>Niveau de jeu :<br/><span style='color:white';>élémentaire &#128123;</span></p>";
                    echo "<p style='color:#99ffcc'>Ton grade actuel :<br/><span style='color:white';>ceinture blanche de math-jitsu</span></p>";
                    echo "<p style='color:#99ffcc'>Résultats :<br/><span style='color:white;'>- chapitre Fonctions : 0 %<br/>- tous chapitres : 0 %</span></p>";
                    echo "<p>______________________</p>";
                }
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=ensembleNombres'>ENSEMBLE DE NOMBRES</a>";
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=racinesCarrees'>RACINES CARREES</a>";
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=trianglesRectangles'>TRIANGLES RECTANGLES</a>";
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=statistiques'>STATISTIQUES</a>";
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=calculLitteral'>CALCUL LITTERAL</a>";
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=equations'>EQUATIONS</a>";
                echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=theoremeThales'>THEOREME DE THALES</a>";
				echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=fonctions'>FONCTIONS</a>";
                if ($typePage != "quizz"){
                    echo "<a href='".$typePage.".php?nomPage=competence1&chapitre=fonctions'>Fonctions - généralités</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence2&chapitre=fonctions'>Images et antécédents</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence3&chapitre=fonctions'>Courbe représentative</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence4&chapitre=fonctions'>Lecture de courbe</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence5&chapitre=fonctions'>Fonctions affines - généralités</a>";
                    echo "<a href='".$typePage.".php?nomPage=competence6&chapitre=fonctions'>Fonctions affines - caractéristiques</a>";
                }
				echo "<br/><a href='".$typePage.".php?nomPage=competence1&chapitre=probabilites'>PROBABILITES</a>";
                if ($typePage == "quizz"){
                    echo "<p>______________________</p>";
                    echo "<a href='challenge.php'>CHALLENGE</a>";
                }
				break;
			
        	case "Seconde":
				break;
	
    		case "SNT":
				break;
    	}  
    	echo "</nav>";
    				
	echo "</div>";
}
echo "</aside>";
?>
