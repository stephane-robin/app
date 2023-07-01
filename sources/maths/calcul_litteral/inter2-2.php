<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];

echo "<h2>Apprendre à résoudre</h2>

<fieldset>
<!-- ETAPE 2 : ON ELIMINE b ou d -->
<!--------------------------------->

<h3>Etape 2</h3>

<p>Tu as choisi de faire :</p>";

if($a == 0){
    if($_POST['rep2-1'] == oppose($b)){
        echo afficherEquationModifiee($a, $b, $c, $d, $_POST['rep2-1']);
        $b = 0;
        $d += $_POST['rep2-1'];
        echo afficherEquation($a, $b, $c, $d).
        "<p>Bien, une partie des nombres ont été éliminés, mais on n'a pas 
        les \(x\) d'un côté et les nombres de l'autre.</p>
        <p>Tu devrais essayer de nouveau depuis le début.</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter1-0'>
                <button class='bouton' type='submit' style='margin-left:3%;'>&#128191; Recommencer</button>
        </form>
        </fieldset>

        <div class='barreProgression' style='width:25%;'>  25 %</div>";
    }
    else{
        if($_POST['rep2-1'] == oppose($d)){
            echo afficherEquationModifiee($a, $b, $c, $d, $_POST['rep2-1']);
            $b += $_POST['rep2-1'];
            $d = 0;
            echo afficherEquation($a, $b, $c, $d).
            "<p>Bien joué. Les \(x\) sont d'un côté de l'équation et les nombres de l'autre.</p>
            
            <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter3-0&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
                <button class='bouton' type='submit' style='margin-left:3%;'>&#128191; Etape suivante</button>
            </form>
            </fieldset>
            
            <div class='barreProgression' style='width:50%;'>  50 %</div>";

        }
        else{
            echo afficherEquationModifiee($a, $b, $c, $d, $_POST['rep2-1']);
            $b += $_POST['rep2-1'];
            $d += $_POST['rep2-1'];
        echo afficherEquation($a, $b, $c, $d).
        "<p>L'équation n'est pas plus simple à résoudre. Rien n'a été éliminé.</p>
        <p>Tu devrais essayer de nouveau depuis le début.</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter1-0'>
                <button class='bouton' type='submit' style='margin-left:3%;'>&#128191; Recommencer</button>
        </form>
        </fieldset>

        <div class='barreProgression' style='width:25%;'>  25%</div>";
        }
    }
}

if($c == 0){
    if($_POST['rep2-1'] == oppose($d)){
        echo afficherEquationModifiee($a, $b, $c, $d, $_POST['rep2-1']);
        $b += $_POST['rep2-1'];
        $d = 0;
        echo afficherEquation($a, $b, $c, $d).
        "<p>Bien, une partie des nombres ont été éliminés, mais on n'a pas 
        les \(x\) d'un côté et les nombres de l'autre.</p>
        <p>Tu devrais essayer de nouveau depuis le début.</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter1-0'>
                <button class='bouton' type='submit' style='margin-left:3%;'>&#128191; Recommencer</button>
        </form>
        </fieldset>

        <div class='barreProgression' style='width:25%;'>  25%</div>";
    }
    else{
        if($_POST['rep2-1'] == oppose($b)){
            echo afficherEquationModifiee($a, $b, $c, $d, $_POST['rep2-1']);
            $b = 0;
            $d += $_POST['rep2-1'];
            echo afficherEquation($a, $b, $c, $d).
            "<p>Bien joué. Les \(x\) sont d'un côté de l'équation et les nombres de l'autre.</p>
            
            <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter3-0&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
                <button class='bouton' type='submit' style='margin-left:3%;'>&#128191; Etape suivante</button>
            </form>
            </fieldset>
            
            <div class='barreProgression' style='width:50%;'>  50%</div>";
        }
        else{
            echo afficherEquationModifiee($a, $b, $c, $d, $_POST['rep2-1']);
            $b += $_POST['rep2-1'];
            $d += $_POST['rep2-1'];
        echo afficherEquation($a, $b, $c, $d).
        "<p>L'équation n'est pas plus simple à résoudre. Rien n'a été éliminé.</p>
        <p>Tu devrais essayer de nouveau depuis le début.</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter1-0'>
                <button class='bouton' type='submit' style='margin-left:3%;'>&#128191; Recommencer</button>
        </form>
        </fieldset>

        <div class='barreProgression' style='width:25%;'>  25%</div>";
        }
    }
}

?>