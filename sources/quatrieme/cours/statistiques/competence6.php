<h2>Quizz</h2>

<p>Testez vos connaissances sur les statistiques avec les questions suivantes :</p>

<?php
$nbrePoints = 0;

if(isset($_POST['validerFractions'])){
  
  for ($i=1; $i<16; $i++){
    if(isset($_POST['q'.$i])){
      if($_POST['q'.$i] == True){
        $nbrePoints += 1;
      }
    }
    else{
      $_POST['q'.$i] = False;
    }
  }

  // results
  $pourcentage = round(100 * $nbrePoints / 10);
  echo "<p style='margin-left:3%; color:green;'>".$pourcentage." % de réponses justes.</p>"; 

  if ($pourcentage < 30){
    echo "<p>Vous devriez bien relire le cours avant de ré-essayer le quizz. &#128163;</p>";
  }
  else if ($pourcentage >= 30 and $pourcentage < 60){
    echo "<p>Continuez vos efforts et essayez d'obtenir un meilleur score... &#127916;</p>";
  }
  else if ($pourcentage >= 60 and $pourcentage < 80){
    echo "<p>Bien joué... Vous pouvez encore améliorer votre score. &#127937;</p>";
  }
  else {
    echo "<p>Félicitations &#127881;</p>";
  }
}
?>

<!-----------------
     QUESTIONS 
------------------->

<form style="margin-left:3%; margin-top:1%; margin-bottom:1%;" action="" method="post">

<!-- Question 1 -->
<label for="q1"><em>Question 1 :</em> la moyenne de la série suivante 8; 11; 12; 9; 9; 10; 12; 13; 11; 19 est : </label><br/>
<input style="margin-top:2%;" type="radio" id="q1r1" name="q1" value="False">
<label style="margin-left:1%;" for="q1r1">11,2</label><br/>
<input style="margin-top:2%;"type="radio" id="q1r2" name="q1" value="True">
<label style="margin-left:1%;" for="q1r2">11,4</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q1r3" name="q1" value="False">
<label style="margin-left:1%;" for="q1r3">12</label><br/>

<!-- Question 2 -->
<label for="q2" style="margin-top:5%;"><em>Question 2 :</em> la médiane de la série suivante 8; 11; 12; 9; 9; 10; 12; 13; 11; 19 est :</label><br/>
<input style="margin-top:2%;" type="radio" id="q2r1" name="q2" value="True">
<label style="margin-left:1%;" for="q2r1">11</label><br/>
<input  style="margin-top:2%;" type="radio" id="q2r2" name="q2" value="False">
<label style="margin-left:1%;" for="q2r2">12</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q2r3" name="q2" value="False">
<label style="margin-left:1%;" for="q2r3">11,5</label><br/>

<!-- Question 3 -->
<label for="q3" style="margin-top:5%;"><em>Question 3 :</em> le 1er quartile de la série suivante  8; 11; 12; 9; 9; 10; 12; 13; 11; 19 est :</label><br/> 
<input style="margin-top:2%;" type="radio" id="q3r1" name="q3" value="True">
<label style="margin-left:1%;" for="q3r1">9,25</label><br/>
<input style="margin-top:2%;" type="radio" id="q3r2" name="q3" value="False">
<label style="margin-left:1%;" for="q3r2">9</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q3r3" name="q3" value="False">
<label style="margin-left:1%;" for="q3r3">8,25</label><br/>

<!-- Question 4 -->
<label for="q4"><em>Question 4 :</em> le 3ème quartile de la série suivante  8; 11; 12; 9; 9; 10; 12; 13; 11; 19 est :</label><br/>
<input style="margin-top:2%;" type="radio" id="q4r1" name="q4" value="True">
<label style="margin-left:1%;" for="q4r1">12</label><br/>
<input style="margin-top:2%;" type="radio" id="q4r2" name="q4" value="False">
<label style="margin-left:1%;" for="q4r2">12,2</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q4r3" name="q4" value="False">
<label style="margin-left:1%;" for="q4r3">11,2</label><br/>

<!-- Question 5 -->
<label for="q5"><em>Question 5 :</em> la moyenne de la série suivante  8; 10; 12; 9; 9; 10; 9; 12; 11; 19; 20 est :</label><br/>
<input style="margin-top:2%;" type="radio" id="q5r1" name="q5" value="False">
<label style="margin-left:1%;" for="q5r1">11,5</label><br/>
<input style="margin-top:2%;" type="radio" id="q5r2" name="q5" value="False">
<label style="margin-left:1%;" for="q5r2">11,2</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q5r3" name="q5" value="True">
<label style="margin-left:1%;" for="q5r3">11,7</label><br/>

<!-- Question 6 -->
<label for="q6" style="margin-top:2%;"><em>Question 6 :</em> la médiane de la série suivante  8; 10; 12; 9; 9; 10; 9; 12; 11; 19; 20 est :</label><br/> 
<input style="margin-top:2%;" type="radio" id="q6r1" name="q6" value="False">
<label style="margin-left:1%;" for="q6r1">11</label><br/>
<input style="margin-top:2%;" type="radio" id="q6r2" name="q6" value="True">
<label style="margin-left:1%;" for="q6r2">10</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q6r3" name="q6" value="False">
<label style="margin-left:1%;" for="q6r3">10,5</label><br/>

<!-- Question 7 -->
<label for="q7"><em>Question 7 :</em> dans la série ci-dessus, l'écart entre la moyenne et la médiane peut s'expliquer car :</label><br/>
<input style="margin-top:2%;" type="radio" id="q7r1" name="q7" value="False">
<label style="margin-left:1%;" for="q7r1">il existe une importante dispersion entre chacun des termes de la série</label><br/>
<input style="margin-top:2%;" type="radio" id="q7r2" name="q7" value="True">
<label style="margin-left:1%;" for="q7r2">la moyenne est augmentée par rapport à la médiane à cause des deux valeurs 19 et 20 qui sont bien au-dessus du reste de la série</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q7r3" name="q7" value="False">
<label style="margin-left:1%;" for="q7r3">c'est le hasard des calculs</label><br/>

<!-- Question 8 -->
<label for="q8"><em>Question 8 :</em> le 1er quartile de la série suivante  8; 10; 12; 9; 9; 10; 9; 12; 11; 19; 20 est :</label><br/>
<input style="margin-top:2%;" type="radio" id="q8r1" name="q8" value="True">
<label style="margin-left:1%;" for="q8r1">9</label><br/>
<input style="margin-top:2%;" type="radio" id="q8r2" name="q8" value="False">
<label style="margin-left:1%;" for="q8r2">9,25</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q8r3" name="q8" value="False">
<label style="margin-left:1%;" for="q8r3">8</label><br/>

<!-- Question 9 -->
<label for="q9" style="margin-top:5%;"><em>Question 9 :</em> le 3ème quartile de la série suivante  8; 10; 12; 9; 9; 10; 9; 12; 11; 19; 20 est :</label><br/> 
<input style="margin-top:2%;" type="radio" id="q9r1" name="q9" value="False">
<label style="margin-left:1%;" for="q9r1">13</label><br/>
<input style="margin-top:2%;" type="radio" id="q9r2" name="q9" value="True">
<label style="margin-left:1%;" for="q9r2">12</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q9r3" name="q9" value="False">
<label style="margin-left:1%;" for="q9r3">13,25</label><br/>

<!-- Question 10 -->
<label for="q10"><em>Question 10 :</em> dans la série ci-dessus, le faible écart entre le 1er quartile et la médiane peut s'expliquer car :</label><br/>
<input style="margin-top:2%;" type="radio" id="q10r1" name="q10" value="False">
<label style="margin-left:1%;" for="q10r1">ils s'obtiennent par des calculs très similaires</label><br/>
<input style="margin-top:2%;" type="radio" id="q10r2" name="q10" value="False">
<label style="margin-left:1%;" for="q10r2">la série est très dispersée</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q10r3" name="q10" value="True">
<label style="margin-left:1%;" for="q10r3">la plupart des termes de la série sont concentrés autour des mêmes valeurs</label><br/>

<button class='bouton' name="validerFractions" style="margin-left:1%; margin-top:4%;" type='submit'>Valider</button>

 </form>
