<h2>Quizz</h2>

<p>Testez vos connaissances sur les puissances avec les questions suivantes :</p>

<?php
$nbrePoints = 0;

if(isset($_POST['validerPuissances'])){
  
  for ($i=1; $i<15; $i++){
    if(!empty($_POST['q'.$i])){
      if($_POST['q'.$i] == "True"){
        $nbrePoints += 1;
      }
    }
  }

  // results
  $pourcentage = round(100 * $nbrePoints / 14);
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
<label for="q1"><em>Question 1 :</em> \(a^0 = ...\) </label><br/>
<input style="margin-top:2%;" type="radio" id="q1r1" name="q1" value="False">
<label style="margin-left:1%;" for="q1r1">0</label><br/>
<input type="radio" id="q1r2" name="q1" value="False">
<label style="margin-left:1%;" for="q1r2">a</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q1r3" name="q1" value="True">
<label style="margin-left:1%;" for="q1r3">1</label><br/>

<!-- Question 2 -->
<label for="q2"><em>Question 2 :</em> \(5^3\times 5^2 = ...\) </label><br/>
<input style="margin-top:2%;" type="radio" id="q2r1" name="q2" value="True">
<label style="margin-left:1%;" for="q2r1">\(5^5\)</label><br/>
<input type="radio" id="q2r2" name="q2" value="False">
<label style="margin-left:1%;" for="q2r2">\(5^6\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q2r3" name="q2" value="False">
<label style="margin-left:1%;" for="q2r3">ce n'est pas possible</label><br/>

<!-- Question 3 -->
<label for="q3" style="margin-top:2%;"><em>Question 3 :</em> \((\frac{-1}{3})^3 = ...\)</label><br/> 
<input style="margin-top:2%;" type="radio" id="q3r1" name="q3" value="False">
<label style="margin-left:1%;" for="q3r1">\(\frac{1}{3}\)</label><br/>
<input type="radio" id="q3r2" name="q3" value="False">
<label style="margin-left:1%;" for="q3r2">\(\frac{1}{27}\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q3r3" name="q3" value="True">
<label style="margin-left:1%;" for="q3r3">\(-\frac{1}{27}\)</label><br/>

<!-- Question 4 -->
<label for="q4"><em>Question 4 :</em> \((-4)^{-5}\times (-4)^2= ...\) </label><br/>
<input style="margin-top:2%;" type="radio" id="q4r1" name="q4" value="True">
<label style="margin-left:1%;" for="q4r1">\(\frac{-1}{64}\)</label><br/>
<input type="radio" id="q4r2" name="q4" value="False">
<label style="margin-left:1%;" for="q4r2">\(\frac{1}{64}\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q4r3" name="q4" value="False">
<label style="margin-left:1%;" for="q4r3">\(-64\)</label><br/>

<!-- Question 5 -->
<label for="q5"><em>Question 5 :</em> \((\frac{-3}{9})^2\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q5r1" name="q5" value="False">
<label style="margin-left:1%;" for="q5r1">\(9\)</label><br/>
<input type="radio" id="q5r2" name="q5" value="False">
<label style="margin-left:1%;" for="q5r2">\(\frac{-1}{3}\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q5r3" name="q5" value="True">
<label style="margin-left:1%;" for="q5r3">\(\frac{1}{9}\)</label><br/>

<!-- Question 6 -->
<label for="q6" style="margin-top:2%;"><em>Question 6 :</em> \((\frac{-3}{9})^{-2}\)</label><br/> 
<input style="margin-top:2%;" type="radio" id="q6r1" name="q6" value="False">
<label style="margin-left:1%;" for="q6r1">\(\frac{-1}{3}\)</label><br/>
<input type="radio" id="q6r2" name="q6" value="True">
<label style="margin-left:1%;" for="q6r2">9</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q6r3" name="q6" value="False">
<label style="margin-left:1%;" for="q6r3">\(\frac{1}{9}\)</label><br/>

<!-- Question 7 -->
<label for="q7"><em>Question 7 :</em> \(6^5\times 3^5 = ...\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q7r1" name="q7" value="False">
<label style="margin-left:1%;" for="q7r1">\(9^5\)</label><br/>
<input type="radio" id="q7r2" name="q7" value="True">
<label style="margin-left:1%;" for="q7r2">\(18^5\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q7r3" name="q7" value="False">
<label style="margin-left:1%;" for="q7r3">\(6^{10}\)</label><br/>

<!-- Question 8 -->
<label for="q8"><em>Question 8 :</em> \(3^{-4}\times 5^4 = ...\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q8r1" name="q8" value="True">
<label style="margin-left:1%;" for="q8r1">\((\frac{5}{3})^4\)</label><br/>
<input type="radio" id="q8r2" name="q8" value="False">
<label style="margin-left:1%;" for="q8r2">\(3^0\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q8r3" name="q8" value="False">
<label style="margin-left:1%;" for="q8r3">\(8^{-4}\)</label><br/>

<!-- Question 9 -->
<label for="q9" style="margin-top:2%;"><em>Question 9 :</em> \(\frac{8^7\times 5^3}{8^2\times 5^8} = ...\)</label><br/> 
<input style="margin-top:2%;" type="radio" id="q9r1" name="q9" value="True">
<label style="margin-left:1%;" for="q9r1">\(\frac{5^5}{8^5}\)</label><br/><br/>
<input type="radio" id="q9r2" name="q9" value="False">
<label style="margin-left:1%;" for="q9r2">\(\frac{40^{10}}{40^{10}}=1\)</label><br/><br/>
<input style="margin-bottom:4%;" type="radio" id="q9r3" name="q9" value="True">
<label style="margin-left:1%;" for="q9r3">\((\frac{8}{5})^5\)</label><br/>

<!-- Question 10 -->
<label for="q10"><em>Question 10 :</em> \(\frac{8^7\times 6^2 \times 2^7}{8^2\times 3^8} = ...\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q10r1" name="q10" value="True">
<label style="margin-left:1%;" for="q10r1">\(\frac{8^5\times 2^9}{3^6}\)</label><br/><br/>
<input type="radio" id="q10r2" name="q10" value="False">
<label style="margin-left:1%;" for="q10r2">\(\frac{8^5\times 2^9}{3^1}\)</label><br/><br/>
<input style="margin-bottom:4%;" type="radio" id="q10r3" name="q10" value="False">
<label style="margin-left:1%;" for="q10r3">\(\frac{2^14}{3^6}\)</label><br/>

<!-- Question 11 -->
<label for="q11"><em>Question 11 :</em> \(\frac{3^7\times 2^2 \times 5^{-7}}{6^2\times 5^2} = ...\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q11r1" name="q11" value="False">
<label style="margin-left:1%;" for="q11r1">\(\frac{3^5\times 2^4 \times 5^{-7}}{6^2\times 5^{-9}}\)</label><br/><br/>
<input type="radio" id="q11r2" name="q11" value="True">
<label style="margin-left:1%;" for="q11r2">\(\frac{3^5 \times 5^{-7}}{6^2\times 5^{9}}\)</label><br/><br/>
<input style="margin-bottom:4%;" type="radio" id="q11r3" name="q11" value="False">
<label style="margin-left:1%;" for="q11r3">\(\frac{3^9\times 2^4 \times 5^{-9}}{6^2}\)</label><br/>

<!-- Question 12 -->
<label for="q12" style="margin-top:2%;"><em>Question 12 :</em> \(\frac{3^{-7}\times 2^{-2} \times 5^5}{6^2\times 5^{-3}} = ...\)</label><br/> 
<input style="margin-top:2%;" type="radio" id="q12r1" name="q12" value="True">
<label style="margin-left:1%;" for="q12r1">\(\frac{5^8}{3^9\times 2^4}\)</label><br/>
<input type="radio" id="q12r2" name="q12" value="False">
<label style="margin-left:1%;" for="q12r2">\(1\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q12r3" name="q12" value="False">
<label style="margin-left:1%;" for="q12r3">\(\frac{3^{-5}}{5^2\times 2^4}\)</label><br/>

<!-- Question 13 -->
<label for="q13"><em>Question 13 :</em> \((7^2)^{-3} = ...\) </label><br/>
<input style="margin-top:2%;" type="radio" id="q13r1" name="q13" value="True">
<label style="margin-left:1%;" for="q13r1">\(7^{-6}\)</label><br/>
<input type="radio" id="q13r2" name="q13" value="False">
<label style="margin-left:1%;" for="q13r2">\(-7^6\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q13r3" name="q13" value="True">
<label style="margin-left:1%;" for="q13r3">\(7^{-1}\)</label><br/>

<!-- Question 14 -->
<label for="q14"><em>Question 14 :</em> \((-7^2)^{-3} = ...\)</label><br/>
<input style="margin-top:2%;" type="radio" id="q14r1" name="q14" value="True">
<label style="margin-left:1%;" for="q14r1">\(\frac{-1}{7^6}\)</label><br/>
<input type="radio" id="q14r2" name="q14" value="False">
<label style="margin-left:1%;" for="q14r2">\(7^{-6}\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q14r3" name="q14" value="False">
<label style="margin-left:1%;" for="q14r3">\(-7^{-1}\)</label><br/>

<button class='bouton' name="validerPuissances" style="margin-left:1%; margin-top:4%;" type='submit'>Valider</button>

 </form>

