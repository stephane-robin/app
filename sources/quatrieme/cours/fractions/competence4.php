
<h2>Quizz</h2>


<p>Testez vos capacités de calcul avec les fractions suivantes :</p>

<?php
$nbrePoints = 0;

if(isset($_POST['validerFractions'])){

  // checking answers question 1
  if (!empty($_POST['q1_numerateur']) and !empty($_POST['q1_denominateur'])){
    if (floatval(valider_saisie($_POST['q1_numerateur'])) / floatval(valider_saisie($_POST['q1_denominateur'])) == 28 / 5){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q1_numerateur'] = 1;
    $_POST['q1_denominateur'] = 1;
  }

  // checking answers question 2
  if (!empty($_POST['q2_numerateur']) and !empty($_POST['q2_denominateur'])){
    if (floatval(valider_saisie($_POST['q2_numerateur'])) / floatval(valider_saisie($_POST['q2_denominateur'])) == 7 / 6){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q2_numerateur'] = 1;
    $_POST['q2_denominateur'] = 1;
  }
  
  // checking answers question 3
  if (!empty($_POST['q3_numerateur']) and !empty($_POST['q3_denominateur'])){
    if (floatval(valider_saisie($_POST['q3_numerateur'])) / floatval(valider_saisie($_POST['q3_denominateur'])) == - 40 / 21){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q3_numerateur'] = 1;
    $_POST['q3_denominateur'] = 1;
  } 

  // checking answers question 4
  if (!empty($_POST['q4_numerateur']) and !empty($_POST['q4_denominateur'])){
    if (floatval(valider_saisie($_POST['q4_numerateur'])) / floatval(valider_saisie($_POST['q4_denominateur'])) == 21 / 2){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q4_numerateur'] = 1;
    $_POST['q4_denominateur'] = 1;
  }   

  // checking answers question 5
  if (!empty($_POST['q5_numerateur']) and !empty($_POST['q5_denominateur'])){
    if (floatval(valider_saisie($_POST['q5_numerateur'])) / floatval(valider_saisie($_POST['q5_denominateur'])) == 43 / 69){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q5_numerateur'] = 1;
    $_POST['q5_denominateur'] = 1;
  }

  // checking answers question 6
  if (!empty($_POST['q6_numerateur']) and !empty($_POST['q6_denominateur'])){
    if (floatval(valider_saisie($_POST['q6_numerateur'])) / floatval(valider_saisie($_POST['q6_denominateur'])) == 126 / 125){
      $nbrePoints += 1;
    }
  }
  else{
    $_POST['q6_numerateur'] = 1;
    $_POST['q6_denominateur'] = 1;
  }

  // checking answers question 7
  if (!empty($_POST['q7_numerateur']) and !empty($_POST['q7_denominateur'])){
    if (floatval(valider_saisie($_POST['q7_numerateur'])) / floatval(valider_saisie($_POST['q7_denominateur'])) == 464 / 195){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q7_numerateur'] = 1;
    $_POST['q7_denominateur'] = 1;
  }

  // checking answers question 8
  if (!empty($_POST['q8_numerateur']) and !empty($_POST['q8_denominateur'])){
    if (floatval(valider_saisie($_POST['q8_numerateur'])) / floatval(valider_saisie($_POST['q8_denominateur'])) == 326 / 15){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q8_numerateur'] = 1;
    $_POST['q8_denominateur'] = 1;
  }

  // checking answers question 9
  if (!empty($_POST['q9_numerateur']) and !empty($_POST['q9_denominateur'])){
    if (floatval(valider_saisie($_POST['q9_numerateur'])) / floatval(valider_saisie($_POST['q9_denominateur'])) == 14 / 9){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q9_numerateur'] = 1;
    $_POST['q9_denominateur'] = 1;
  }

  // checking answers question 10
  if (!empty($_POST['q10_numerateur']) and !empty($_POST['q10_denominateur'])){
    if (floatval(valider_saisie($_POST['q10_numerateur'])) / floatval(valider_saisie($_POST['q10_denominateur'])) == 17 / 42){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q10_numerateur'] = 1;
    $_POST['q10_denominateur'] = 1;
  }

  // checking answers question 11
  if (!empty($_POST['q11_numerateur']) and !empty($_POST['q11_denominateur'])){
    if (floatval(valider_saisie($_POST['q11_numerateur'])) / floatval(valider_saisie($_POST['q11_denominateur'])) == -8 / 3){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q11_numerateur'] = 1;
    $_POST['q11_denominateur'] = 1;
  }

  // checking answers question 12
  if (!empty($_POST['q12_numerateur']) and !empty($_POST['q12_denominateur'])){
    if (floatval(valider_saisie($_POST['q12_numerateur'])) / floatval(valider_saisie($_POST['q12_denominateur'])) == -5 / 6){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q12_numerateur'] = 1;
    $_POST['q12_denominateur'] = 1;
  }

  // checking answers question 13
  if (!empty($_POST['q13_numerateur']) and !empty($_POST['q13_denominateur'])){
    if (floatval(valider_saisie($_POST['q13_numerateur'])) / floatval(valider_saisie($_POST['q13_denominateur'])) == 21 / 16){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q13_numerateur'] = 1;
    $_POST['q13_denominateur'] = 1;
  }

  // checking answers question 14
  if (!empty($_POST['q14_numerateur']) and !empty($_POST['q14_denominateur'])){
    if (floatval(valider_saisie($_POST['q14_numerateur'])) / floatval(valider_saisie($_POST['q14_denominateur'])) == -1 / 4){
    $nbrePoints += 1;
    }
  }
  else{
    $_POST['q14_numerateur'] = 1;
    $_POST['q14_denominateur'] = 1;
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
<div class="bloc_ligne">
<p><em>Question 1 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q1">\(\frac{21}{5}+\frac{7}{5} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q1_numerateur" name="q1_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q1_denominateur" name="q1_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>

<!-- Question 2 -->
<p style="margin-left:10%;"><em>Question 2 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q2">\(\frac{2}{3}+\frac{1}{2} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q2_numerateur" name="q2_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q2_denominateur" name="q2_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>
</div>

<!-- Question 3 -->
<div class="bloc_ligne" style="margin-top:5%;">
<p><em>Question 3 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q3">\(\frac{3}{7}-\frac{7}{3} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q3_numerateur" name="q3_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q3_denominateur" name="q3_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>

<!-- Question 4 -->
<p style="margin-left:10%;"><em>Question 4 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q4">\(\frac{21}{4}\times\frac{6}{3} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q4_numerateur" name="q4_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q4_denominateur" name="q4_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>
</div>

<!-- Question 5 -->
<div class="bloc_ligne" style="margin-top:5%;">
<p><em>Question 5 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q5">\(\frac{2}{3}-\frac{1}{23} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q5_numerateur" name="q5_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q5_denominateur" name="q5_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>

<!-- Question 6 -->
<p style="margin-left:10%;"><em>Question 6 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q6">\(\frac{6}{5}\div\frac{25}{21} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q6_numerateur" name="q6_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q6_denominateur" name="q6_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>
</div>

<!-- Question 7 -->
<div class="bloc_ligne" style="margin-top:5%;">
<p><em>Question 7 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q7">\(\frac{24}{13}+\frac{8}{15} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q7_numerateur" name="q7_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q7_denominaateur" name="q7_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>

<!-- Question 8 -->
<p style="margin-left:10%;"><em>Question 8 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q8">\(\frac{67}{3}-\frac{3}{5} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q8_numerateur" name="q8_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q8_denominateur" name="q8_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>
</div>

<!-- Question 9 -->
<div class="bloc_ligne" style="margin-top:5%;">
<p><em>Question 9 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q9">\(\frac{8}{9}\times\frac{21}{12} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q9_numerateur" name="q9_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q9_denominateur" name="q9_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>

<!-- Question 10 -->
<p style="margin-left:10%;"><em>Question 10 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q10">\(\frac{5}{6}-\frac{3}{7} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q10_numerateur" name="q10_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q10_denominateur" name="q10_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>
</div>

<!-- Question 11 -->
<div class="bloc_ligne" style="margin-top:5%;">
<p><em>Question 11 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q11">\(\frac{-2}{7}\div\frac{3}{28} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q11_numerateur" name="q11_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q11_denominateur" name="q11_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>

<!-- Question 12 -->
<p style="margin-left:10%;"><em>Question 12 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q12">\(\frac{-1}{3}-\frac{1}{2} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q12_numerateur" name="q12_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q12_denominateur" name="q12_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>
</div>

<!-- Question 13 -->
<div class="bloc_ligne" style="margin-top:5%;">
<p><em>Question 13 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q13">\(\frac{21}{8}\times\frac{1}{2} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q13_numerateur" name="q13_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q13_denominateur" name="q13_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>

<!-- Question 14 -->
<p style="margin-left:10%;"><em>Question 14 :</em></p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:14%;" for="q14">\(\frac{-7}{12}+\frac{1}{3} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <input type="text" id="q14_numerateur" name="q14_numerateur" size="5" style="margin-bottom:-5%;">
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q14_denominateur" name="q14_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>
</div>

  <button class='bouton' name="validerFractions" style="margin-left:1%; margin-top:4%;" type='submit'>Valider</button>

 </form>

