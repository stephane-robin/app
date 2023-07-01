<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];

echo "<h2>Apprendre à résoudre</h2>

<fieldset>

<h3>Etape 2</h3>

<p>Tu as choisi de faire :</p>";

// SI L'EQUATION N'A PLUS DE a
//////////////////////////////

if($a == 0){
    if($_POST['rep2-0'] == oppose($b)){
        echo afficherEquationModifiee($a, $b, $c, $d, $_POST['rep2-0']);
        $b = 0;
        $d += $_POST['rep2-0'];
        echo afficherEquation($a, $b, $c, $d).
        "<p>Bien, une partie des nombres ont été éliminés, mais on n'a pas 
        les \(x\) d'un côté et les nombres de l'autre.</p>

        <p>Que faut-il faire maintenant ?</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2-2&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
            <button class='bouton' type='submit' name='rep2-1' value='".oppose($c)."' style='margin-left:3%;'>&#128191; ".oppose($c)."</button>
            <button class='bouton' type='submit' name='rep2-1' value='".$c."' style='margin-left:3%;'>&#128191; ".$c."</button>
            <button class='bouton' type='submit' name='rep2-1' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".oppose($d)."</button>
            <button class='bouton' type='submit' name='rep2-1' value='".$d."' style='margin-left:3%;'>&#128191; ".$d."</button>
        </form>
        </fieldset>

        <div class='barreProgression' style='width:25%;'>  25%</div>";
    }
    else{
        if($_POST['rep2-0'] == oppose($d)){
            echo afficherEquationModifiee($a, $b, $c, $d, $_POST['rep2-0']);
            $b += $_POST['rep2-0'];
            $d = 0;
            echo afficherEquation($a, $b, $c, $d).
            "<p>Bien joué. Les \(x\) sont d'un côté de l'équation et les nombres de l'autre.</p>
            
            <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter3-0&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
                <button class='bouton' type='submit' style='margin-left:3%;'>&#128191; Etape suivante</button>
            </form>
            </fieldset>

            <div class='barreProgression' style='width:25%;'>  25%</div>";
        }
        else{
            echo afficherEquationModifiee($a, $b, $c, $d, $_POST['rep2-0']);
            $b += $_POST['rep2-0'];
            $d += $_POST['rep2-0'];
        echo afficherEquation($a, $b, $c, $d).
        "<p>L'équation n'est pas plus simple à résoudre. Rien n'a été éliminé.</p>
        <p>Que faut-il faire maintenant ?</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2-2&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
            <button class='bouton' type='submit' name='rep2-1' value='".oppose($b)."' style='margin-left:3%;'>&#128191; ".oppose($b)."</button>
            <button class='bouton' type='submit' name='rep2-1' value='".$b."' style='margin-left:3%;'>&#128191; ".$b."</button>
            <button class='bouton' type='submit' name='rep2' value='".oppose($c)."' style='margin-left:3%;'>&#128191; ".oppose($c)."</button>
            <button class='bouton' type='submit' name='rep2-1' value='".$c."' style='margin-left:3%;'>&#128191; ".$c."</button>
            <button class='bouton' type='submit' name='rep2-1' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".oppose($d)."</button>
            <button class='bouton' type='submit' name='rep2-1' value='".$d."' style='margin-left:3%;'>&#128191; ".$d."</button>
        </form>
        </fieldset>";
        }
    }
}

// SI L'EQUATION N'A PLUS DE c
//////////////////////////////

if($c == 0){
    if($_POST['rep2-0'] == oppose($d)){
        echo afficherEquationModifiee($a, $b, $c, $d, $_POST['rep2-0']);
        $b += $_POST['rep2-0'];
        $d = 0;
        echo afficherEquation($a, $b, $c, $d).
        "<p>Bien, une partie des nombres ont été éliminés, mais on n'a pas 
        les \(x\) d'un côté et les nombres de l'autre.</p>

        <p>Que faut-il faire maintenant ?</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2-2&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
            <button class='bouton' type='submit' name='rep2-1' value='".oppose($a)."' style='margin-left:3%;'>&#128191; ".oppose($a)."</button>
            <button class='bouton' type='submit' name='rep2-1' value='".$a."' style='margin-left:3%;'>&#128191; ".$a."</button>
            <button class='bouton' type='submit' name='rep2-1' value='".oppose($b)."' style='margin-left:3%;'>&#128191; ".oppose($b)."</button>
            <button class='bouton' type='submit' name='rep2-1' value='".$b."' style='margin-left:3%;'>&#128191; ".$b."</button>
        </form>
        </fieldset>

        <div class='barreProgression' style='width:25%;'>  25%</div>";
    }
    else{
        if($_POST['rep2-0'] == oppose($b)){
            echo afficherEquationModifiee($a, $b, $c, $d, $_POST['rep2-0']);
            $b = 0;
            $d += $_POST['rep2-0'];
            echo afficherEquation($a, $b, $c, $d).
            "<p>Bien joué. Les \(x\) sont d'un côté de l'équation et les nombres de l'autre.</p>

            <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter3-0&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
                <button class='bouton' type='submit' style='margin-left:3%;'>&#128191; Etape suivante</button>
            </form>
            </fieldset>

            <div class='barreProgression' style='width:25%;'>  25%</div>";
        }
        else{
            echo afficherEquationModifiee($a, $b, $c, $d, $_POST['rep2-0']);
            $b += $_POST['rep2-0'];
            $d += $_POST['rep2-0'];
        echo afficherEquation($a, $b, $c, $d).
        "<p>L'équation n'est pas plus simple à résoudre. Rien n'a été éliminé.</p>

        <p>Que faut-il faire maintenant ?</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2-2&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
            <button class='bouton' type='submit' name='rep2' value='".oppose($b)."' style='margin-left:3%;'>&#128191; ".oppose($b)."</button>
            <button class='bouton' type='submit' name='rep2' value='".$b."' style='margin-left:3%;'>&#128191; ".$b."</button>
            <button class='bouton' type='submit' name='rep2' value='".oppose($a)."' style='margin-left:3%;'>&#128191; ".oppose($a)."</button>
            <button class='bouton' type='submit' name='rep2' value='".$a."' style='margin-left:3%;'>&#128191; ".$a."</button>
            <button class='bouton' type='submit' name='rep2' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".oppose($d)."</button>
            <button class='bouton' type='submit' name='rep2' value='".$d."' style='margin-left:3%;'>&#128191; ".$d."</button>
        </form>
        </fieldset>";
        }
    }
}

?>