<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];

echo "<h2>Apprendre à résoudre</h2>

<fieldset>

<h3>Etape 2</h3>

<p>Tu as obtenu l'équation ".afficherEquation($a, $b, $c, $d)."</p>
<p>On veut va maintenant obtenir les \(x\) d'un côté de l'équation et les nombres de l'autre.</p>
</fieldset>

<p>Que faut-il faire ?</p>";

// SI L'EQUATION N'A PLUS DE a
//////////////////////////////

if($a == 0){

    // SI CERTAINS COEFFICIENTS SONT IDENTIQUES ON NE LES PROPOSE PAS 2 FOIS DANS LES BOUTONS
    /////////////////////////////////////////////////////////////////////////////////////////

    if($b == $c or $b == $d or $b == oppose($c) or $b == oppose($d)){
        echo "<form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2-1&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
        <button class='bouton' type='submit' name='rep2-0' value='".oppose($c)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($c))."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".$c."' style='margin-left:3%;'>&#128191; ".avecSigne($c)."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($d))."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".$d."' style='margin-left:3%;'>&#128191; ".avecSigne($d)."</button>
        </form>";
    }
    else{

        // SI TOUS LES COEFFICIENTS SONT DIFFERENTS
        ///////////////////////////////////////////

        echo "<form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2-1&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
        <button class='bouton' type='submit' name='rep2-0' value='".oppose($b)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($b))."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".$b."' style='margin-left:3%;'>&#128191; ".avecSigne($b)."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".oppose($c)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($c))."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".$c."' style='margin-left:3%;'>&#128191; ".avecSigne($c)."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($d))."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".$d."' style='margin-left:3%;'>&#128191; ".avecSigne($d)."</button>
        </form>";
    }
}

// SI L'EQUATION N'A PLUS DE c
//////////////////////////////

else{

    // SI CERTAINS COEFFICIENTS SONT IDENTIQUES ON NE LES PROPOSE PAS 2 FOIS DANS LES BOUTONS
    /////////////////////////////////////////////////////////////////////////////////////////

    if($a == $b or $a == $d or $a == oppose($b) or $a == oppose($d)){
        echo "<form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2-1&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
        <button class='bouton' type='submit' name='rep2-0' value='".oppose($b)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($b))."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".$b."' style='margin-left:3%;'>&#128191; ".avecSigne($b)."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($d))."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".$d."' style='margin-left:3%;'>&#128191; ".avecSigne($d)."</button>
        </form>";
    }
    else{

        // SI TOUS LES COEFFICIENTS SONT DIFFERENTS
        ///////////////////////////////////////////

         echo "<form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2-1&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
        <button class='bouton' type='submit' name='rep2-0' value='".oppose($a)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($a))."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".$a."' style='margin-left:3%;'>&#128191; ".avecSigne($a)."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".oppose($b)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($b))."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".$b."' style='margin-left:3%;'>&#128191; ".avecSigne($b)."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($d))."</button>
        <button class='bouton' type='submit' name='rep2-0' value='".$d."' style='margin-left:3%;'>&#128191; ".avecSigne($d)."</button>
        </form>";   
    }  
}

echo "<div class='barreProgression' style='width:33%;'>  33%</div>";

?>