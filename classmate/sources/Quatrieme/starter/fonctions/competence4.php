<?php $compteurQuestion += 1; ?>
<label for="q1"><em>Question <?php echo $compteurQuestion; ?> :</em> le point A(3; 4) est tel que : </label><br/>

<input style="margin-top:2%;" type="radio" id="q1r1" name="q1" value="False">
<label style="margin-left:1%;" for="q1r1">3 est l'ordonnée du point A</label><br/>
<input type="radio" id="q1r2" name="q1" value="True">
<label style="margin-left:1%;" for="q1r2">4 est l'ordonnée du point A</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q1r3" name="q1" value="False">
<label style="margin-left:1%;" for="q1r3">3 est la pente du point A</label><br/>

<?php $compteurQuestion += 1; ?>
<label for="q2"><em>Question <?php echo $compteurQuestion; ?> :</em> la courbe d'une fonction \(f\) est :</label><br/>

<input style="margin-top:2%;" type="radio" id="q2r1" name="q2" value="True">
<label style="margin-left:1%;" for="q2r1">l'ensemble des points de coordonnées \((x; f(x))\)</label><br/>
<input type="radio" id="q2r2" name="q2" value="False">
<label style="margin-left:1%;" for="q2r2">l'ensemble des points de coordonnées \((f(x); x)\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q2r3" name="q2" value="False">
<label style="margin-left:1%;" for="q2r3">l'ensemble des points représentant x en abscisse et en ordonnée</label><br/>

<?php $compteurQuestion += 1; ?>
<label for="q3" style="margin-top:2%;"><em>Question <?php echo $compteurQuestion; ?> :</em> dans la courbe ci-dessous :</label><br/> 
<img src="../../images/Quatrieme/pointCourbe.png" alt="points dans un repere" style="margin-top:2%;"><br/>

<input style="margin-top:2%;" type="radio" id="q3r1" name="q3" value="True">
<label style="margin-left:1%;" for="q3r1">4 est l'image de 2 par \(f\)</label><br/>
<input type="radio" id="q3r2" name="q3" value="False">
<label style="margin-left:1%;" for="q3r2">2 est l'image de 4 par \(f\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q3r3" name="q3" value="True">
<label style="margin-left:1%;" for="q3r3">2 est l'mage de 3 par \(f\)</label><br/>
 	
 	



