
<h2>Quizz</h2>


<p>Testez vos capacités de calcul avec les racines carrées.</p>

<?php
$nbrePoints = 0;

if(isset($_POST['validerRacines'])){ 

  // checking answers question 1
  if (!empty($_POST['q1'])){
    if ($_POST['q1'] == "True"){
      $nbrePoints += 1;
    }
  }

  // checking answers question 2
  if (!empty($_POST['q2'])){
    if ($_POST['q2'] == "True"){
      $nbrePoints += 1;
    }
  }
  
  // checking answers question 3
  if (!empty($_POST['q3_dehors']) and !empty($_POST['q3_radical'])){
    if ($_POST['q3_dehors'] == 3 and $_POST['q3_radical'] == 10){
      $nbrePoints += 1;
    }
  }

  // checking answers question 4
  if (!empty($_POST['q4_dehors']) and !empty($_POST['q4_radical'])){
    if ($_POST['q4_dehors'] == 2 and $_POST['q4_radical'] == 33){
      $nbrePoints += 1;
    }
  }  

  // checking answers question 5
  if (!empty($_POST['q5_dehors']) and !empty($_POST['q5_radical'])){
    if ($_POST['q5_dehors'] == 3 and $_POST['q5_radical'] == 5){
      $nbrePoints += 1;
    }
  }

  // checking answers question 6
  if (!empty($_POST['q6_dehors']) and !empty($_POST['q6_radical'])){
    if ($_POST['q6_dehors'] == 2 and $_POST['q6_radical'] == 11){
      $nbrePoints += 1;
    }
  }

  // checking answers question 7
  if (!empty($_POST['q7_dehors']) and !empty($_POST['q7_radical'])){
    if ($_POST['q7_dehors'] == 6 and $_POST['q7_radical'] == 2){
      $nbrePoints += 1;
    }
  }

  // checking answers question 8
  if (!empty($_POST['q8_numerateur']) and !empty($_POST['q8_denominateur'])){
    if ($_POST['q8_numerateur'] == 2 and $_POST['q8_denominateur'] == 2){
      $nbrePoints += 1;
    }
  }

  // checking answers question 9
  if (!empty($_POST['q9_dehors']) and !empty($_POST['q9_denominateur']) and !empty($_POST['q9_radical'])){
    if ($_POST['q9_dehors'] == 4 and $_POST['q9_denominateur'] == 3 and $_POST['q9_radical'] == 3){
      $nbrePoints += 1;
    }
  }

  // checking answers question 10
  if (!empty($_POST['q10_numerateur']) and !empty($_POST['q10_denominateur'])){
    if ($_POST['q10_numerateur'] == 3 and $_POST['q10_denominateur'] == 3){
      $nbrePoints += 1;
    }
  }

  // checking answers question 11
  if (!empty($_POST['q11_numerateur']) and !empty($_POST['q11_denominateur'])){
    if ($_POST['q11_numerateur'] == 15 and $_POST['q11_denominateur'] == 6){
      $nbrePoints += 1;
    }
  }

  // checking answers question 12
  if (!empty($_POST['q12_numerateur']) and !empty($_POST['q12_denominateur'])){
    if ($_POST['q12_numerateur'] == 5 and $_POST['q12_denominateur'] == 5){
      $nbrePoints += 1;
    }
  }

  // checking answers question 13
  if (!empty($_POST['q13_numerateur']) and !empty($_POST['q13_denominateur'])){
    if ($_POST['q13_numerateur'] == 15 and $_POST['q13_denominateur'] == 5){
      $nbrePoints += 1;
    }
  }

  // checking answers question 14
  if (!empty($_POST['q14_numerateur']) and !empty($_POST['q14_denominateur'])){
    if ($_POST['q14_numerateur'] == 61 and $_POST['q14_denominateur'] == 61){
      $nbrePoints += 1;
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
<p><em>Question 1 : </em> décomposer 56 en facteurs premiers</p>
<input style="margin-top:2%;" type="radio" id="q1r1" name="q1" value="False">
<label style="margin-left:1%;" for="q1r1">\(2^2\times14\)</label><br/>
<input type="radio" id="q1r2" name="q1" value="False">
<label style="margin-left:1%;" for="q1r2">\(2^4\times7\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q1r3" name="q1" value="True">
<label style="margin-left:1%;" for="q1r3">\(2^3\times7\)</label>

<!-- Question 2 -->
<p style="margin-top:5%;"><em>Question 2 : </em>décomposer 148 en facteurs premiers</p>
<input style="margin-top:2%;" type="radio" id="q2r1" name="q2" value="True">
<label style="margin-left:1%;" for="q2r1">\(2^2\times37\)</label><br/>
<input type="radio" id="q2r2" name="q2" value="False">
<label style="margin-left:1%;" for="q2r2">\(2^2\times14\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q2r3" name="q2" value="False">
<label style="margin-left:1%;" for="q2r3">\(2^3\times23\)</label>

<!-- Question 3 -->
<p style="margin-top:5%;"><em>Question 3 : </em>simplifier en proposant le plus petit nombre possible sous le radical</p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:2%;" for="q3">\(\sqrt{90} = \)</label>
  <input type="text" id="q3_dehors" name="q3_dehors" size="5">
  <p>\(\sqrt{}\)</p>
  <input type="text" id="q3_radical" name="q3_radical" size="5">
</div>

<!-- Question 4 -->
<p style="margin-top:5%;"><em>Question 4 :</em>simplifier en proposant le plus petit nombre possible sous le radical</p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:2%;" for="q4">\(\sqrt{132} = \)</label>
  <input type="text" id="q4_dehors" name="q4" size="5">
  <p>\(\sqrt{}\)</p>
  <input type="text" id="q4_radical" name="q4" size="5">
</div>

<!-- Question 5 -->
<p style="margin-top:5%;"><em>Question 5 : </em>simplifier en proposant le plus petit nombre possible sous le radical</p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:2%;" for="q5">\(\sqrt{45} = \)</label>
  <input type="text" id="q5_dehors" name="q5" size="5">
  <p>\(\sqrt{}\)</p>
  <input type="text" id="q5_radical" name="q5" size="5">
</div>

<!-- Question 6 -->
<p style="margin-top:5%;"><em>Question 6 : </em>simplifier en proposant le plus petit nombre possible sous le radical</p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:2%;" for="q6">\(\sqrt{44} = \)</label>
  <input type="text" id="q6_dehors" name="q6" size="5">
  <p>\(\sqrt{}\)</p>
  <input type="text" id="q6_radical" name="q6" size="5">
</div>

<!-- Question 7 -->
<p style="margin-top:5%;"><em>Question 7 : </em>simplifier en proposant le plus petit nombre possible sous le radical</p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:2%;" for="q7">\(\sqrt{72} = \)</label>
  <input type="text" id="q7_dehors" name="q7" size="5">
  <p>\(\sqrt{}\)</p>
  <input type="text" id="q7_radical" name="q7" size="5">
</div>

<!-- Question 8 -->
<p style="margin-top:5%;"><em>Question 8 :</em> écrivez la fraction sans radical au dénominateur et avec le plus petit nombre possible sous le radical du numérateur</p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:5%;" for="q8">\(\frac{\sqrt{90}}{\sqrt{180}} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <p style="margin-bottom:-2%;">\(\sqrt{}\)
      <input type="text" id="q8_numerateur" name="q8_numerateur" size="5"></p>
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
<p style="margin-top:5%;"><em>Question 9 :</em> écrivez la fraction sans radical au dénominateur et avec le plus petit nombre possible sous le radical du numérateur</p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:5%;" for="q9">\(\frac{\sqrt{128}}{\sqrt{12}} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <p style="margin-bottom:-2%;"><input type="text" id="q9_dehors" name="q9_dehors" size="5"> \(\sqrt{}\)
      <input type="text" id="q9_radical" name="q9_radical" size="5"></p>
    </div>
    <div>
    <?php echo"________________";?>
    </div>
    <div>
      <input type="text" id="q9_denominateur" name="q9_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>
</div>

<!-- Question 10 -->
<p style="margin-top:5%;"><em>Question 10 :</em> écrivez la fraction sans radical au dénominateur et avec le plus petit nombre possible sous le radical du numérateur</p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:5%;" for="q10">\(\frac{1}{\sqrt{3}} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <p style="margin-bottom:-2%;">\(\sqrt{}\)
      <input type="text" id="q10_numerateur" name="q10_numerateur" size="5"></p>
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
<p style="margin-top:5%;"><em>Question 11 :</em> écrivez la fraction sans radical au dénominateur et avec le plus petit nombre possible sous le radical du numérateur</p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:5%;" for="q11">\(\frac{\sqrt{5}}{\sqrt{12}} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <p style="margin-bottom:-2%;">\(\sqrt{}\)
      <input type="text" id="q11_numerateur" name="q11_numerateur" size="5"></p>
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q11_denominateur" name="q11_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>
</div>

<!-- Question 12 -->
<p style="margin-top:5%;"><em>Question 12 :</em> écrivez la fraction sans radical au dénominateur et avec le plus petit nombre possible sous le radical du numérateur</p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:5%;" for="q12">\(\frac{\sqrt{3}}{\sqrt{15}} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <p style="margin-bottom:-2%;">\(\sqrt{}\)
      <input type="text" id="q12_numerateur" name="q12_numerateur" size="5"></p>
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
<p style="margin-top:5%;"><em>Question 13 :</em> écrivez la fraction sans radical au dénominateur et avec le plus petit nombre possible sous le radical du numérateur</p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:5%;" for="q13">\(\frac{\sqrt{3}}{\sqrt{5}} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <p style="margin-bottom:-2%;">\(\sqrt{}\)
      <input type="text" id="q13_numerateur" name="q13_numerateur" size="5"></p>
    </div>
    <div>
    <?php echo"______";?>
    </div>
    <div>
      <input type="text" id="q13_denominateur" name="q13_denominateur" size="5" style="margin-top:20%;">
    </div>
  </div>
</div>
</div>

<!-- Question 14 -->
<p style="margin-top:5%;"><em>Question 14 :</em> écrivez la fraction sans radical au dénominateur et avec le plus petit nombre possible sous le radical du numérateur</p>
<div class="bloc_ligne" style="margin-left:3%;">
  <label style="margin-left:1%; margin-top:5%;" for="q14">\(\frac{\sqrt{2}}{\sqrt{122}} = \)</label>
  <div class="bloc_colonne" style="margin-left:1%;">
    <div>
      <p style="margin-bottom:-2%;">\(\sqrt{}\)
      <input type="text" id="q14_numerateur" name="q14_numerateur" size="5"></p>
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

<button class='bouton' name="validerRacines" style="margin-left:1%; margin-top:4%;" type='submit'>Valider</button>

 </form>

