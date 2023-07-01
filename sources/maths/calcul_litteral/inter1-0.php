<?php

// CHOIX DES VALEURS INITIALES DE a, b, c, d
////////////////////////////////////////////

do{
    $a = rand(-12, 12);
}while(in_array($a, array(0)));

do{
    $b = rand(-12, 12);
}while(in_array($b, array(0)));

do{
    $c = rand(-12, 12);
}while(in_array($c, array($a, 0)));

do{
    $d = rand(-12, 12);
}while(in_array($d, array($b, 0)));


// ON ENVOIE LES REPONSES A inter1-1
////////////////////////////////////

echo "<h2>Apprendre à résoudre</h2>

<p>Cherchons à résoudre l'équation de degré 1 suivante :</p>";
echo afficherEquation($a, $b, $c, $d).

"<fieldset>

<h3>Etape 1</h3>

<p>On veut avoir les nombres d'un côté et les \(x\) de l'autre.</p>
<p>On commence par éliminer les \(x\) d'un côté de l'équation.</p>

<p>Que faut-il faire ?</p>

<form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter1-1&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
        <button class='bouton' type='submit' name='rep1-0' value='".oppose($a)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($a))."x</button>
        <button class='bouton' type='submit' name='rep1-0' value='".$a."' style='margin-left:3%;'>&#128191; ".avecSigne($a)."x</button>
        <button class='bouton' type='submit' name='rep1-0' value='".oppose($b)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($b))."x</button>
        <button class='bouton' type='submit' name='rep1-0' value='".$b."' style='margin-left:3%;'>&#128191; ".avecSigne($b)."x</button>
        <button class='bouton' type='submit' name='rep1-0' value='".oppose($c)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($c))."x</button>
        <button class='bouton' type='submit' name='rep1-0' value='".$c."' style='margin-left:3%;'>&#128191; ".avecSigne($c)."x</button>
        <button class='bouton' type='submit' name='rep1-0' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($d))."x</button>
        <button class='bouton' type='submit' name='rep1-0' value='".$d."' style='margin-left:3%;'>&#128191; ".avecSigne($d)."x</button>
</form>
</fieldset>";

?>