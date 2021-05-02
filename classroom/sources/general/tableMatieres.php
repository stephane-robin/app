<aside id="table_matieres">
    <div id="fieldsetTableMatieres">
    	<h2 style="color:white;"><?php echo $nomClasse; ?></h2>
    	<nav>
    	<?php
    	switch ($nomClasse){
    		case "Sixieme":
    			
				break;
			case "Quatrieme":
				echo "<a href='modelePage.php?nomPage=quatrieme_generalitesFonctions.html'>FONCTIONS</a>";
				echo "<a href='modelePage.php?nomPage=quatrieme_generalitesFonctions.html'>Fonctions - généralités</a>";
				echo "<a href='modelePage.php?nomPage=quatrieme_imagesTableau.html'>Images et antécédents</a>";
				echo "<a href='modelePage.php?nomPage=quatrieme_courbeFonction.html'>Courbe représentative</a>";
				echo "<a href='modelePage.php?nomPage=quatrieme_imagesGraphe.html'>Lecture de courbe</a>";
				echo "<a href='modelePage.php?nomPage=quatrieme_generaliteFonctionAffine.html'>Fonctions affines - généralités</a>";
				echo "<a href='modelePage.php?nomPage=quatrieme_penteFonctionAffine.html'>Fonctions affines - caractéristiques</a>";
				echo "<p></p>";
				break;
			case "Seconde":
				break;
			case "SNT":
				break;
    	}  	
		?>
		</nav>
	</div>
</aside>

