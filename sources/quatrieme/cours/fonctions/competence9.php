<h2>Quizz</h2>

<p>Testez vos connaissances sur les fonctions avec les questions suivantes :</p>

<?php
$nbrePoints = 0;

if(isset($_POST['validerFonctions'])){
  
  for ($i=1; $i<16; $i++){
    if(!empty($_POST['q'.$i])){
      if($_POST['q'.$i] == "True"){
        $nbrePoints += 1;
      }
    }
  }

  // results
  $pourcentage = round(100 * $nbrePoints / 15);
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
<label for="q1"><em>Question 1 :</em> une fonction peut associer à un élément de départ : </label><br/>
<input style="margin-top:2%;" type="radio" id="q1r1" name="q1" value="True">
<label style="margin-left:1%;" for="q1r1">un unique élément d'arrivée</label><br/>
<input type="radio" id="q1r2" name="q1" value="False">
<label style="margin-left:1%;" for="q1r2">deux éléments d'arrivée qu'on aura calculé</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q1r3" name="q1" value="False">
<label style="margin-left:1%;" for="q1r3">trois éléments d'arrivée qu'on aura calculé</label><br/>

<!-- Question 2 -->
<label for="q2"><em>Question 2 :</em> au départ d'une fonction deux éléments différents peuvent conduire à un même résultat </label><br/>
<input style="margin-top:2%;" type="radio" id="q2r1" name="q2" value="True">
<label style="margin-left:1%;" for="q2r1">vrai</label><br/>
<input type="radio" id="q2r2" name="q2" value="False">
<label style="margin-left:1%;" for="q2r2">ce n'est pas possible</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q2r3" name="q2" value="False">
<label style="margin-left:1%;" for="q2r3">c'est toujours le cas</label><br/>

<!-- Question 3 -->
<label for="q3" style="margin-top:2%;"><em>Question 3 :</em> l'ensemble de définition de la fonction \(f\) telle que \(f(x)=3x+7\) est :</label><br/> 
<input style="margin-top:2%;" type="radio" id="q3r1" name="q3" value="False">
<label style="margin-left:1%;" for="q3r1">\(\mathbb{R}-\{0\}\)</label><br/>
<input type="radio" id="q3r2" name="q3" value="False">
<label style="margin-left:1%;" for="q3r2">\(\mathbb{R}_{+}\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q3r3" name="q3" value="True">
<label style="margin-left:1%;" for="q3r3">\(\mathbb{R}\)</label><br/>

<!-- Question 4 -->
<label for="q4"><em>Question 4 :</em> pour la fonction \(f\) telle que \(f(x)=2x+3\) : </label><br/>
<input style="margin-top:2%;" type="radio" id="q4r1" name="q4" value="False">
<label style="margin-left:1%;" for="q4r1">\(f(5)=11\)</label><br/>
<input type="radio" id="q4r2" name="q4" value="True">
<label style="margin-left:1%;" for="q4r2">\(f(7)=17\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q4r3" name="q4" value="False">
<label style="margin-left:1%;" for="q4r3">l'antécédent de 3 par \(f\) est 1</label><br/>

<!-- Question 5 -->
<label for="q5"><em>Question 5 :</em> il est possible que plusieurs antécédents conduisent à la même image par une fonction :</label><br/>
<input style="margin-top:2%;" type="radio" id="q5r1" name="q5" value="True">
<label style="margin-left:1%;" for="q5r1">vrai</label><br/>
<input type="radio" id="q5r2" name="q5" value="False">
<label style="margin-left:1%;" for="q5r2">faux</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q5r3" name="q5" value="False">
<label style="margin-left:1%;" for="q5r3">uniquement pour une fonction affine</label><br/>

<!-- Question 6 -->
<label for="q6" style="margin-top:2%;"><em>Question 6 :</em> pour trouver une image il faut résoudre une équation :</label><br/> 
<input style="margin-top:2%;" type="radio" id="q6r1" name="q6" value="False">
<label style="margin-left:1%;" for="q6r1">vrai</label><br/>
<input type="radio" id="q6r2" name="q6" value="False">
<label style="margin-left:1%;" for="q6r2">c'est souvent vrai</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q6r3" name="q6" value="True">
<label style="margin-left:1%;" for="q6r3">faux, c'est pour trouver un antécédent qu'il faut résoudre une équation</label><br/>

<!-- Question 7 -->
<label for="q7"><em>Question 7 :</em> le point A(3; 4) est tel que : </label><br/>

<input style="margin-top:2%;" type="radio" id="q7r1" name="q7" value="False">
<label style="margin-left:1%;" for="q7r1">3 est l'ordonnée du point A</label><br/>
<input type="radio" id="q7r2" name="q7" value="True">
<label style="margin-left:1%;" for="q7r2">4 est l'ordonnée du point A</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q7r3" name="q7" value="False">
<label style="margin-left:1%;" for="q7r3">3 est la pente du point A</label><br/>

<!-- Question 8 -->
<label for="q8"><em>Question 8 :</em> la courbe d'une fonction \(f\) est :</label><br/>
<input style="margin-top:2%;" type="radio" id="q8r1" name="q8" value="True">
<label style="margin-left:1%;" for="q8r1">l'ensemble des points de coordonnées \((x; f(x))\)</label><br/>
<input type="radio" id="q8r2" name="q8" value="False">
<label style="margin-left:1%;" for="q8r2">l'ensemble des points de coordonnées \((f(x); x)\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q8r3" name="q8" value="False">
<label style="margin-left:1%;" for="q8r3">l'ensemble des points représentant x en abscisse et en ordonnée</label><br/>

<!-- Question 9 -->
<label for="q9" style="margin-top:2%;"><em>Question 9 :</em> dans la courbe ci-dessous :</label><br/> 
<img src="../../images/Quatrieme/pointCourbe.png" alt="points dans un repere" style="margin-top:2%;"><br/>
<input style="margin-top:2%;" type="radio" id="q9r1" name="q9" value="True">
<label style="margin-left:1%;" for="q9r1">4 est l'image de 2 par \(f\)</label><br/>
<input type="radio" id="q9r2" name="q9" value="False">
<label style="margin-left:1%;" for="q9r2">2 est l'image de 4 par \(f\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q9r3" name="q9" value="True">
<label style="margin-left:1%;" for="q9r3">2 est l'mage de 3 par \(f\)</label><br/>

<!-- Question 10 -->
<p>Pour chacune des 3 questions suivantes, on considère la courbe représentative de la fonction \(f\) suivante :</p>
<img src="../../images/Quatrieme/exerciceImageAntecedent.png" alt="exercice images antécédents" style="margin-bottom:1%;"><br/>
<label for="q10"><em>Question 10 :</em> quelle est l'image de 3 ? </label><br/>
<input style="margin-top:2%;" type="radio" id="q10r1" name="q10" value="False">
<label style="margin-left:1%;" for="q10r1">3</label><br/>
<input type="radio" id="q10r2" name="q10" value="False">
<label style="margin-left:1%;" for="q10r2">1</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q10r3" name="q10" value="True">
<label style="margin-left:1%;" for="q10r3">-1</label><br/>

<!-- Question 11 -->
<label for="q11"><em>Question 11 :</em> quelle est l'image de -2 ?</label><br/>
<input style="margin-top:2%;" type="radio" id="q11r1" name="q11" value="True">
<label style="margin-left:1%;" for="q11r1">0</label><br/>
<input type="radio" id="q11r2" name="q11" value="False">
<label style="margin-left:1%;" for="q11r2">-1</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q11r3" name="q11" value="False">
<label style="margin-left:1%;" for="q11r3">1</label><br/>

<!-- Question 12 -->
<label for="q12" style="margin-top:2%;"><em>Question 12 :</em> quel est l'antécédent de -3 ?</label><br/> 
<input style="margin-top:2%;" type="radio" id="q12r1" name="q12" value="False">
<label style="margin-left:1%;" for="q12r1">-4</label><br/>
<input type="radio" id="q12r2" name="q12" value="True">
<label style="margin-left:1%;" for="q12r2">-5</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q12r3" name="q12" value="False">
<label style="margin-left:1%;" for="q12r3">1</label><br/>

<!-- Question 13 -->
<label for="q13"><em>Question 13 :</em> une fonction affine peut s'écrire sous la forme \(f(x)=mx+p\) : </label><br/>
<input style="margin-top:2%;" type="radio" id="q13r1" name="q13" value="True">
<label style="margin-left:1%;" for="q13r1">vrai</label><br/>
<input type="radio" id="q13r2" name="q13" value="False">
<label style="margin-left:1%;" for="q13r2">faux</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q13r3" name="q13" value="True">
<label style="margin-left:1%;" for="q13r3">-on doit obligatoirement utiliser \(ax+b\)</label><br/>

<!-- Question 14 -->
<label for="q14"><em>Question 14 :</em> pour la fonction f définie par \(f(x)=3x-1\), la pente est de -1 :</label><br/>
<input style="margin-top:2%;" type="radio" id="q14r1" name="q14" value="False">
<label style="margin-left:1%;" for="q14r1">vrai</label><br/>
<input type="radio" id="q14r2" name="q14" value="True">
<label style="margin-left:1%;" for="q14r2">faux</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q14r3" name="q14" value="False">
<label style="margin-left:1%;" for="q14r3">en effet, 3 est l'ordonnée à l'origine</label><br/>

<!-- Question 15 -->
<label for="q15" style="margin-top:2%;"><em>Question 15 :</em> pour la fonction f définie par \(f(x)=x-2\), la pente est de 1, cela signifie que lorsque \(x\) augmente de 2, alors \(y\) augmente de 2 :</label><br/> 
<input style="margin-top:2%;" type="radio" id="q15r1" name="q15" value="False">
<label style="margin-left:1%;" for="q15r1">mais non lorsque \(x\) augmente de 1, alors \(y\) augmente de 2</label><br/>
<input type="radio" id="q15r2" name="q15" value="False">
<label style="margin-left:1%;" for="q15r2">faux</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q15r3" name="q15" value="True">
<label style="margin-left:1%;" for="q15r3">vrai</label><br/>


  <button class='bouton' name="validerFonctions" style="margin-left:1%; margin-top:4%;" type='submit'>Valider</button>

 </form>

