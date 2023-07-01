<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];

echo "<h2>Apprendre à résoudre</h2>

<fieldset>

<h3>Etape 1</h3>

<p>Tu as choisi de faire :</p>";

// L'UTILISATEUR SE TROMPE DE NOUVEAU. IL EST REDIRIGE VERS inter1-0
////////////////////////////////////////////////////////////////////

if($_POST['rep1-1'] != oppose($c) and $_POST['rep1-1'] != oppose($a)){
        echo afficherEquationModifieeX($a, $b, $c, $d, $_POST['rep1-1']);
        $a += $_POST['rep1-1'];
        $c += $_POST['rep1-1'];
        echo afficherEquation($a, $b, $c, $d).
        "<p>L'équation n'est pas plus simple à résoudre. Rien n'a été éliminé.</p>
        <p>Tu devrais essayer de nouveau depuis le début.</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter1-0'>
                <button class='bouton' type='submit' style='margin-left:3%;'>&#128191; Recommencer</button>
        </form>
        </fieldset>";
    }
    else{

        // L'UTILISATEUR ELIMINE c. IL CONTINUE VERS inter2-0
        /////////////////////////////////////////////////////

        if($_POST['rep1-1'] == oppose($c)){
            echo afficherEquationModifieeX($a, $b, $c, $d, $_POST['rep1-1']);
            $a += $_POST['rep1-1'];
            $c = 0;
            echo afficherEquation($a, $b, $c, $d).
            "<p>Bien joué. Les \(x\) ont été éliminés d'un côté de l'équation.</p>

            <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2-0&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
                <button class='bouton' type='submit' style='margin-left:3%;'>&#128191; Etape suivante</button>
            </form>
            </fieldset>
            
            <div class='barreProgression' style='width:33%;'>  33%</div>";
        }
        else{

            // L'UTILISATEUR ELIMINE a. IL CONTINUE VERS inter2-0
            /////////////////////////////////////////////////////

            echo afficherEquationModifieeX($a, $b, $c, $d, $_POST['rep1-1']);
            $a = 0;
            $c += $_POST['rep1-1'];
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