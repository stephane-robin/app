

<?php $compteurQuestion += 1; ?>
<label for="q1"><em>Question <?php echo $compteurQuestion; ?> :</em> une fonction peut associer à un élément de départ : </label><br/>

<input style="margin-top:2%;" type="radio" id="q1r1" name="q1" value="True">
<label style="margin-left:1%;" for="q1r1">un unique élément d'arrivée</label><br/>
<input type="radio" id="q1r2" name="q1" value="False">
<label style="margin-left:1%;" for="q1r2">deux éléments d'arrivée qu'on aura calculé</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q1r3" name="q1" value="False">
<label style="margin-left:1%;" for="q1r3">trois éléments d'arrivée qu'on aura calculé</label><br/>

<?php $compteurQuestion += 1; ?>
<label for="q2"><em>Question <?php echo $compteurQuestion; ?> :</em> au départ d'une fonction deux éléments différents peuvent conduire à un même résultat </label><br/>

<input style="margin-top:2%;" type="radio" id="q2r1" name="q2" value="True">
<label style="margin-left:1%;" for="q2r1">vrai</label><br/>
<input type="radio" id="q2r2" name="q2" value="False">
<label style="margin-left:1%;" for="q2r2">ce n'est pas possible</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q2r3" name="q2" value="False">
<label style="margin-left:1%;" for="q2r3">c'est toujours le cas</label><br/>

<?php $compteurQuestion += 1; ?>
<label for="q3" style="margin-top:2%;"><em>Question <?php echo $compteurQuestion; ?> :</em> l'ensemble de définition de la fonction \(f\) telle que \(f(x)=3x+7\) est :</label><br/> 

<input style="margin-top:2%;" type="radio" id="q3r1" name="q3" value="False">
<label style="margin-left:1%;" for="q3r1">\(\mathbb{R}-\{0\}\)</label><br/>
<input type="radio" id="q3r2" name="q3" value="False">
<label style="margin-left:1%;" for="q3r2">\(\mathbb{R}_{+}\)</label><br/>
<input style="margin-bottom:4%;" type="radio" id="q3r3" name="q3" value="True">
<label style="margin-left:1%;" for="q3r3">\(\mathbb{R}\)</label><br/>
 	
 	



