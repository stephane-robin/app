<aside id="table_matieres">
    <div id="fieldsetTableMatieres">
    	<?php 
    	if ($nomPage == "index"){
    		echo "<h2 style='color:white;'>Actualité : </h2>";
    		echo "<p style='text-align: left;'>Le site TokeTa est en construction. Rendez-vous bientôt pour commencer des projets intéressants... </p>";
    	}
    	else {
    		echo "<h2 style='color:white;'>".$nomClasse."</h2>";
    		echo "<nav>";
    	
    		switch ($nomClasse){
    			case "Sixieme":
    			
					break;
				case "Quatrieme":
					echo "<a href='modelePage.php?nomPage=fonction_competence1'>FONCTIONS</a>";
					echo "<a href='modelePage.php?nomPage=fonction_competence1'>Fonctions - généralités</a>";
					echo "<a href='modelePage.php?nomPage=fonction_competence2'>Images et antécédents</a>";
					echo "<a href='modelePage.php?nomPage=fonction_competence3'>Courbe représentative</a>";
					echo "<a href='modelePage.php?nomPage=fonction_competence4'>Lecture de courbe</a>";
					echo "<a href='modelePage.php?nomPage=fonction_competence5'>Fonctions affines - généralités</a>";
					echo "<a href='modelePage.php?nomPage=fonction_competence6'>Fonctions affines - caractéristiques</a>";
					echo "<p></p>";
					break;
				case "Seconde":
					break;
				case "SNT":
					break;
    		}  
    		echo "</nav>";
    	}		
		?>
	</div>
</aside>

