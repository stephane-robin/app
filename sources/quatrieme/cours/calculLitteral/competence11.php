<h2>Quizz</h2>

<p>Testez vos connaissances sur le calcul littéral avec les questions suivantes :</p>

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
<label for="q1"><em>Question 1 :</em> \(x(2x-x^2)= ...\) </label><br/>
<input style="margin-top:2%;" type="radio" id="q1r1" name="q1" value="False">
<label style="margin-left:1%;" for="q1r1">\(2x^2-x^3\)</label><br/>
<input style="margin-top:2%;"type="radio" id="q1r2" name="q1" value="False">
<label style="margin-left:1%;" for="q1r2">\(2x^2-2x^3\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q1r3" name="q1" value="True">
<label style="margin-left:1%;" for="q1r3">\(2x^2-x^3\)</label><br/>

<!-- Question 2 -->
<label for="q2" style="margin-top:5%;"><em>Question 2 :</em> \((x-3)(2x-7)= ...\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q2r1" name="q2" value="True">
<label style="margin-left:1%;" for="q2r1">\(2x^2-13x+21\)</label><br/>
<input  style="margin-top:2%;" type="radio" id="q2r2" name="q2" value="False">
<label style="margin-left:1%;" for="q2r2">\(2^2+13x-21\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q2r3" name="q2" value="False">
<label style="margin-left:1%;" for="q2r3">\(x^2-13x+27\)</label><br/>

<!-- Question 3 -->
<label for="q3" style="margin-top:5%;"><em>Question 3 :</em> \((5-x)(2x-3)= ...\)</label><br/> 
<input style="margin-top:2%;" type="radio" id="q3r1" name="q3" value="False">
<label style="margin-left:1%;" for="q3r1">\(-2x^2+7x-15\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q3r2" name="q3" value="True">
<label style="margin-left:1%;" for="q3r2">\(-2x^2+13x-15\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q3r3" name="q3" value="False">
<label style="margin-left:1%;" for="q3r3">\(2x^2-13x-15\)</label><br/>

<!-- Question 4 -->
<label for="q4"><em>Question 4 :</em> \(81-4x^2= ...\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q4r1" name="q4" value="True">
<label style="margin-left:1%;" for="q4r1">\((9-2x)(9+2x)\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q4r2" name="q4" value="False">
<label style="margin-left:1%;" for="q4r2">\((9-x)(9+x)\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q4r3" name="q4" value="False">
<label style="margin-left:1%;" for="q4r3">\((x-9)(x+9)\)</label><br/>

<!-- Question 5 -->
<label for="q5"><em>Question 5 :</em> \((2x-7)^2= ...\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q5r1" name="q5" value="False">
<label style="margin-left:1%;" for="q5r1">\(4x^2+28x+49\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q5r2" name="q5" value="False">
<label style="margin-left:1%;" for="q5r2">\(4x^2-28x-49\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q5r3" name="q5" value="True">
<label style="margin-left:1%;" for="q5r3">\(4x^2-28x+49\)</label><br/>

<!-- Question 6 -->
<label for="q6" style="margin-top:2%;"><em>Question 6 :</em> \((5x+3)^2= ...\)</label><br/> 
<input style="margin-top:2%;" type="radio" id="q6r1" name="q6" value="True">
<label style="margin-left:1%;" for="q6r1">\(25x^2+30x+9\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q6r2" name="q6" value="False">
<label style="margin-left:1%;" for="q6r2">\(5x^2+30x+9\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q6r3" name="q6" value="False">
<label style="margin-left:1%;" for="q6r3">\(25x^2+15x+9\)</label><br/>

<!-- Question 7 -->
<label for="q7"><em>Question 7 :</em> \((x-1)(x+3)-(x-1)(2x-18)= ...\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q7r1" name="q7" value="False">
<label style="margin-left:1%;" for="q7r1">\((x-1)(-x-15)\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q7r2" name="q7" value="True">
<label style="margin-left:1%;" for="q7r2">\((x-1)(-x+21)\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q7r3" name="q7" value="False">
<label style="margin-left:1%;" for="q7r3">\((x-1)(3x-54)\)</label><br/>

<!-- Question 8 -->
<label for="q8"><em>Question 8 :</em> \(25x^2-70x+49= ...\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q8r1" name="q8" value="False">
<label style="margin-left:1%;" for="q8r1">\((x-9)^2\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q8r2" name="q8" value="True">
<label style="margin-left:1%;" for="q8r2">\((5x-9)^2\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q8r3" name="q8" value="False">
<label style="margin-left:1%;" for="q8r3">\((-x+3)^2\)</label><br/>

<!-- Question 9 -->
<label for="q9" style="margin-top:5%;"><em>Question 9 :</em> \(x^2-(x-7)^2= ...\)</label><br/> 
<input style="margin-top:2%;" type="radio" id="q9r1" name="q9" value="True">
<label style="margin-left:1%;" for="q9r1">\(7(2x-7)\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q9r2" name="q9" value="False">
<label style="margin-left:1%;" for="q9r2">\(x(2x-7)\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q9r3" name="q9" value="False">
<label style="margin-left:1%;" for="q9r3">\((x-7)(2x-7)\)</label><br/>

<!-- Question 10 -->
<label for="q10"><em>Question 10 :</em> \((x-2)^2-(2x-5)^2\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q10r1" name="q10" value="False">
<label style="margin-left:1%;" for="q10r1">\((3x-7)(3-x)\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q10r2" name="q10" value="False">
<label style="margin-left:1%;" for="q10r2">\((3-x)(5-x)\)</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q10r3" name="q10" value="True">
<label style="margin-left:1%;" for="q10r3">\((3x-3)^2\)</label><br/>

<button class='bouton' name="validerFractions" style="margin-left:1%; margin-top:4%;" type='submit'>Valider</button>

 </form>
