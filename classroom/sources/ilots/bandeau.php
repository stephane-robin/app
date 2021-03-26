<!-- bandeau.php is a block of code within pages -->

<!-- Define $_POST['objectif'] coming from the page starter.php as a session variable -->
<?php 
if (isset($_POST["objectif"])){
	$_SESSION['objectif'] = $_POST['objectif'];
}
?>

<!-- BANDEAU SOUS TITRE -->
<div id="bandeau_sousTitre">
    <p>Goal of the day: <?php echo "'".$_SESSION['objectif']."'"; ?></p>
</div>

<!-- BANDEAU CONTENU -->
<div id="bandeau_contenu">
    <p class="sp"><?php echo date('F j, Y')."   &#9201;    " ?><span id='txt'></span></p>     
</div>

<!-- BANDEAU CONTROLE -->
<div id="bandeau_controle">	
	<!-- GOAL -->
	<form style="margin-left:1%; margin-top:1%; margin-bottom:1%;" action="pageWorkshop.php" method="post">
  		<input type="text" id="objectif" name="objectif" style="width:98%;"><br/>
      	<button class='bouton' style="margin-top:1%;" type='submit'> &#9201; Goal</button>
    </form>

    <!-- ABSENT STUDENTS -->
	<form style="margin-left:3%; margin-top:1%; margin-bottom:1%;" action="pageWorkshop.php" method="post">
  		<input type="text" id="absent" name="absent"><br/>
		<button class="bouton" style='margin-top: 1%;' type="submit">&#128218; Absent</button>
	</form>

    <!-- SESSION -->
    <form style="margin-left:5%; margin-top:3%; margin-bottom:1%;">
      	<button class='bouton' style="margin-top:1%;" type='button' onclick='var $mavar = start_session(45);'> &#9201; Start session</button>
      	<button class='bouton' style="margin-top:1%;" type='button'> &#10062; End session</button>
    </form>



	<!-- WHITE PAGE -->
	<form method='post' action='pageBlanche.php' style="margin-left:5%; margin-top:3%; margin-bottom:1%;">
		<button class='bouton' type='submit'>&#9898; White board</button>
	</form>
</div>