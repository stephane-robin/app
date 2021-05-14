<?php $compteurQuestion += 1; ?>
<label for="q1"><em>Question <?php echo $compteurQuestion; ?> :</em> pour la fonction \(f\) telle que \(f(x)=2x+3\) : </label><br/>

<input style="margin-top:2%;" type="radio" id="q1r1" name="q1" value="False">
<label style="margin-left:1%;" for="q1r1">\(f(5)=11\)</label><br/>
<input type="radio" id="q1r2" name="q1" value="True">
<label style="margin-left:1%;" for="q1r2">\(f(7)=17\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q1r3" name="q1" value="False">
<label style="margin-left:1%;" for="q1r3">l'antécédent de 3 par \(f\) est 1</label><br/>

<?php $compteurQuestion += 1; ?>
<label for="q2"><em>Question <?php echo $compteurQuestion; ?> :</em> il est possible que plusieurs antécédents conduisent à la même image par une fonction :</label><br/>

<input style="margin-top:2%;" type="radio" id="q2r1" name="q2" value="True">
<label style="margin-left:1%;" for="q2r1">vrai</label><br/>
<input type="radio" id="q2r2" name="q2" value="False">
<label style="margin-left:1%;" for="q2r2">faux</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q2r3" name="q2" value="False">
<label style="margin-left:1%;" for="q2r3">uniquement pour une fonction affine</label><br/>

<?php $compteurQuestion += 1; ?>
<label for="q3" style="margin-top:2%;"><em>Question <?php echo $compteurQuestion; ?> :</em> pour trouver une image il faut résoudre une équation :</label><br/> 

<input style="margin-top:2%;" type="radio" id="q3r1" name="q3" value="False">
<label style="margin-left:1%;" for="q3r1">vrai</label><br/>
<input type="radio" id="q3r2" name="q3" value="False">
<label style="margin-left:1%;" for="q3r2">c'est souvent vrai</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q3r3" name="q3" value="True">
<label style="margin-left:1%;" for="q3r3">faux, c'est pour trouver un antécédent qu'il faut résoudre une équation</label><br/>
 	
 	



