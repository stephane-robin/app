<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];

echo "<h2>Apprendre à résoudre</h2>

<fieldset>

<h3>Etape 1</h3>

<p>Tu as choisi de faire :</p>";

// L'UTILISATEUR FAIT UN MAUVAIS CHOIX, IL EST REDIRIGE VERS inter1-2
/////////////////////////////////////////////////////////////////////

if($_POST['rep1-0'] != oppose($c) and $_POST['rep1-0'] != oppose($a)){
        echo afficherEquationModifieeX($a, $b, $c, $d, $_POST['rep1-0']);
        $a += $_POST['rep1-0'];
        $c += $_POST['rep1-0'];
        echo afficherEquation($a, $b, $c, $d).
        "<p>L'équation n'est pas plus simple à résoudre. Rien n'a été éliminé.</p>

        <p>Que faut-il faire maintenant ?</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter1-2&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
            <button class='bouton' type='submit' name='rep1-1' value='".oppose($c)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($c))."x</button>
            <button class='bouton' type='submit' name='rep1-1' value='".$c."' style='margin-left:3%;'>&#128191; ".avecSigne($c)."x</button>
            <button class='bouton' type='submit' name='rep1-1' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($d))."x</button>
            <button class='bouton' type='submit' name='rep1-1' value='".$d."' style='margin-left:3%;'>&#128191; ".avecSigne($d)."x</button>
            <button class='bouton' type='submit' name='rep1-1' value='".oppose($a)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($a))."x</button>
        <button class='bouton' type='submit' name='rep1-1' value='".$a."' style='margin-left:3%;'>&#128191; ".avecSigne($a)."x</button>
        <button class='bouton' type='submit' name='rep1-1' value='".oppose($b)."' style='margin-left:3%;'>&#128191; ".avecSigne(oppose($b))."x</button>
        <button class='bouton' type='submit' name='rep1-1' value='".$b."' style='margin-left:3%;'>&#128191; ".avecSigne($b)."x</button>
        </form>
        </fieldset>";
}
else{

    // L'UTILISATEUR ELIMINE c. IL CONTINUE VERS inter2-0
    /////////////////////////////////////////////////////

    if($_POST['rep1-0'] == oppose($c)){
            echo afficherEquationModifieeX($a, $b, $c, $d, $_POST['rep1-0']);
            $a += $_POST['rep1-0'];
            $c = 0;
            echo afficherEquation($a, $b, $c, $d).
            "<p>Bien joué. Les \(x\) ont été éliminés d'un côté de l'équation.</p>

            <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2-0&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
                <button class='bouton' type='submit' style='margin-left:3%;'>&#128191; Etape suivante</button>
            </form>
            </fieldset>
            
            <div class='barreProgression' style='width:33%;'>  33%</div>";
    }

    // L'UTILISATEUR ELIMINE a. IL CONTINUE VERS inter2-0
    /////////////////////////////////////////////////////

    else{
            echo afficherEquationModifieeX($a, $b, $c, $d, $_POST['rep1-0']);
            $a = 0;
            $c += $_POST['rep1-0'];
            echo afficherEquation($a, $b, $c, $d).
            "<p>Bien joué. Les \(x\) ont été éliminés d'un côté de l'équation.</p>
           
            <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2-0&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
                <button class='bouton' type='submit' style='margin-left:3%;'>&#128191; Etape suivante</button>
            </form>
            </fieldset>
            
            <div class='barreProgression' style='width:33%;'>  33%</div>";
    }      
}

?>