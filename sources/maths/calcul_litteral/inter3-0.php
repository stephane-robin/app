<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];

echo "<h2>Apprendre à résoudre</h2>

<fieldset>
<!-- ETAPE 3 : ON TROUVE LA SOLUTION -->
<!------------------------------------->

<h3>Etape 3</h3>
<p>Tu as obtenu l'équation ".afficherEquation($a, $b, $c, $d)."</p>
<p>On veut maintenant connaître la valeur de \(x\).</p>

<p>Que faut-il faire ?</p>";

if($a == 0){
        echo "<form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter3-1&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
        <button class='bouton' type='submit' name='rep3-0' value='".$c."' style='margin-left:3%;'>&#128191; \( \div(".$c.")\)</button>
        <button class='bouton' type='submit' name='rep3-0' value='".oppose($c)."' style='margin-left:3%;'>&#128191; \(\div(".oppose($c).")\)</button>
        <button class='bouton' type='submit' name='rep3-0' value='".$b."' style='margin-left:3%;'>&#128191; \(\div(".$b.")\)</button>
        <button class='bouton' type='submit' name='rep3-0' value='".oppose($b)."' style='margin-left:3%;'>&#128191; \(\div(".oppose($b).")\)</button>
        </form>";
}
else{
    echo "<form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter3-1&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
        <button class='bouton' type='submit' name='rep3-0' value='".$a."' style='margin-left:3%;'>&#128191; \(\div(".$a.")\)</button>
        <button class='bouton' type='submit' name='rep3-0' value='".oppose($a)."' style='margin-left:3%;'>&#128191; \(\div(".oppose($a).")\)</button>
        <button class='bouton' type='submit' name='rep3-0' value='".$d."' style='margin-left:3%;'>&#128191; \(\div(".$d.")\)</button>
        <button class='bouton' type='submit' name='rep3-0' value='".oppose($d)."' style='margin-left:3%;'>&#128191; \(\div(".oppose($d).")\)</button>
        </form>"; 
}

echo "</fieldset>

<div class='barreProgression' style='width:66%;'>  66%</div>";

?>