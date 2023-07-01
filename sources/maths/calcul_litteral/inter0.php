<?php


$a = avecSigne($_GET['a']);
$b = avecSigne($_GET['b']);
$c = avecSigne($_GET['c']);
$d = avecSigne($_GET['d']);


<!-- SI L'UTILISATEUR A REPONDU A LA QUESTION 1 -->
<!------------------------------------------------>";

if(!empty($_POST['rep1'])){
    
}
else{
    if(isset($_GET['valeurChoisie'])){
        $valeurChoisie = avecSigne($_GET['valeurChoisie']);
        echo "<p>\(".$a."x".$b.$valeurChoisie."x=".$c."x".$d.$valeurChoisie."x\)</p>";
        $a = somme($a, $valeurChoisie);
        $c = somme($c, $valeurChoisie);
        echo "<p>\(".$a."x".$b."=".$c."x".$d."\)</p>
        <p>L'équation n'est pas plus simple à résoudre. Rien n'a été éliminé.</p>
        <p>Que faut-il faire maintenant ?</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter1&valeurChoisie=".$valeurChoisie."'>
            <button class='bouton' type='submit' name='rep2' value='".oppose($c)."' style='margin-left:3%;'>&#128191; ".oppose($c)."x</button>
            <button class='bouton' type='submit' name='rep2' value='".$c."' style='margin-left:3%;'>&#128191; ".$c."x</button>
            <button class='bouton' type='submit' name='rep2' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".oppose($d)."x</button>
            <button class='bouton' type='submit' name='rep2' value='".$d."' style='margin-left:3%;'>&#128191; ".$d."x</button>
            <button class='bouton' type='submit' name='rep2' value='".oppose($a)."' style='margin-left:3%;'>&#128191; ".oppose($a)."x</button>
        <button class='bouton' type='submit' name='rep2' value='".$a."' style='margin-left:3%;'>&#128191; ".$a."x</button>
        <button class='bouton' type='submit' name='rep2' value='".oppose($b)."' style='margin-left:3%;'>&#128191; ".oppose($b)."x</button>
        <button class='bouton' type='submit' name='rep2' value='".$b."' style='margin-left:3%;'>&#128191; ".$b."x</button>
        </form>"; 
    }    
}

echo "<!-- SI L'UTILISATEUR A REPONDU A LA QUESTION 2 -->
      <!------------------------------------------------>";

if(isset($_POST['rep2'])){
    if($_POST['rep2'] != oppose($c) and $_POST['rep2'] != oppose($a)){
        
            echo "<p>\(".$a."x".$b.$_POST['rep2']."x=".$c."x".$d.$_POST['rep2']."x\)</p>";
            $a = somme($a, $_POST['rep2']);
            $c = somme($c, $_POST['rep2']);
            echo "<p>\(".$a."x".$b."=".$c."x".$d."\)</p>
            <p>L'équation n'est pas plus simple à résoudre. Rien n'a été éliminé.</p>";
    }
    else{
        if($_POST['rep2'] == oppose($c)){
            echo "<p>\(".$a."x".$b.$_POST['rep2']."x=".$c."x".$d.$_POST['rep2']."x\)</p>";
            $a = somme($a, $_POST['rep2']);
            echo "<p>\(".$a."x".$b."=".$d."\)</p>
            <p>Bien joué. Les \(x\) ont été éliminés d'un côté de l'équation.</p>
            <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
                <button class='bouton' type='submit' name='etape2' style='margin-left:3%;'>&#128191; Etape suivante</button>
            </form>";
        }
        else{
            echo "<p>\(".$a."x".$b.$_POST['rep2']."x=".$c."x".$d.$_POST['rep2']."x\)</p>";
            $c = somme($c, $_POST['rep2']);
            echo "<p>\(".$b."=".$c."x".$d."\)</p>
            <p>Bien joué. Les \(x\) ont été éliminés d'un côté de l'équation.</p>
            <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter2&a=".$a."&b=".$b."&c=".$c."&d=".$d."'>
                <button class='bouton' type='submit' name='etape2' style='margin-left:3%;'>&#128191; Etape suivante</button>
            </form>";
        }          
    }
}

////////////////////////////////////////////

echo "<h2>Apprendre à résoudre</h2>

<p>Cherchons à résoudre l'équation de degré 1 suivante : \(+3x-4=+7x+5\)</p>

<!-- ETAPE 2 : ON ELIMINE b ou d -->
<!--------------------------------->

<h3>Etape 2</h3>
<p>Nous avons obtenu \(".afficherEquation($a, $b, $c, $d)."\)</p>
<p>Que faut-il faire pour éliminer les valeurs sans \(x\) d'un côté de l'équation ?</p>

<form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter1'>
        <button class='bouton' type='submit' name='rep1' value='".oppose($c)."' style='margin-left:3%;'>&#128191; ".oppose($c)."</button>
        <button class='bouton' type='submit' name='rep1' value='".$c."' style='margin-left:3%;'>&#128191; ".$c."</button>
        <button class='bouton' type='submit' name='rep1' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".oppose($d)."</button>
        <button class='bouton' type='submit' name='rep1' value='".$d."' style='margin-left:3%;'>&#128191; ".$d."</button>
        <button class='bouton' type='submit' name='rep1' value='".oppose($a)."' style='margin-left:3%;'>&#128191; ".oppose($a)."</button>
        <button class='bouton' type='submit' name='rep1' value='".$a."' style='margin-left:3%;'>&#128191; ".$a."</button>
        <button class='bouton' type='submit' name='rep1' value='".oppose($b)."' style='margin-left:3%;'>&#128191; ".oppose($b)."</button>
        <button class='bouton' type='submit' name='rep1' value='".$b."' style='margin-left:3%;'>&#128191; ".$b."</button>
    </form>

<!-- SI L'UTILISATEUR A REPONDU A LA QUESTION 1 -->
<!------------------------------------------------>";

if(!empty($_POST['rep1'])){
    if($_POST['rep1'] != oppose($c) and $_POST['rep1'] != oppose($a)){
        echo "<p>\(".$a."x".$b.$_POST['rep1']."x=".$c."x".$d.$_POST['rep1']."x\)</p>";
        $a = somme($a, $_POST['rep1']);
        $c = somme($c, $_POST['rep1']);
        echo "<p>\(".$a."x".$b."=".$c."x".$d."\)</p>
        <p>L'équation n'est pas plus simple à résoudre. Rien n'a été éliminé.</p>
        <p>Que faut-il faire maintenant ?</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter1&valeurChoisie=".$_POST['rep1']."'>
            <button class='bouton' type='submit' name='rep2' value='".oppose($c)."' style='margin-left:3%;'>&#128191; ".oppose($c)."x</button>
            <button class='bouton' type='submit' name='rep2' value='".$c."' style='margin-left:3%;'>&#128191; ".$c."x</button>
            <button class='bouton' type='submit' name='rep2' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".oppose($d)."x</button>
            <button class='bouton' type='submit' name='rep2' value='".$d."' style='margin-left:3%;'>&#128191; ".$d."x</button>
            <button class='bouton' type='submit' name='rep2' value='".oppose($a)."' style='margin-left:3%;'>&#128191; ".oppose($a)."x</button>
        <button class='bouton' type='submit' name='rep2' value='".$a."' style='margin-left:3%;'>&#128191; ".$a."x</button>
        <button class='bouton' type='submit' name='rep2' value='".oppose($b)."' style='margin-left:3%;'>&#128191; ".oppose($b)."x</button>
        <button class='bouton' type='submit' name='rep2' value='".$b."' style='margin-left:3%;'>&#128191; ".$b."x</button>
        </form>";
    }
    else{
        if($_POST['rep1'] == oppose($c)){
            echo "<p>\(".$a."x".$b.$_POST['rep1']."x=".$c."x".$d.$_POST['rep1']."x\)</p>";
            $a = somme($a, $_POST['rep1']);
            echo "<p>\(".$a."x".$b."=".$d."\)</p>
            <p>Bien joué. Les \(x\) ont été éliminés d'un côté de l'équation.</p>";
        }
        else{
            echo "<p>\(".$a."x".$b.$_POST['rep1']."x=".$c."x".$d.$_POST['rep1']."x\)</p>";
            $c = somme($c, $_POST['rep1']);
            echo "<p>\(".$b."=".$c."x".$d."\)</p>
            <p>Bien joué. Les \(x\) ont été éliminés d'un côté de l'équation.</p>";
        }
        
    }
}
else{
    if(isset($_GET['valeurChoisie'])){
        $valeurChoisie = avecSigne($_GET['valeurChoisie']);
        echo "<p>\(".$a."x".$b.$valeurChoisie."x=".$c."x".$d.$valeurChoisie."x\)</p>";
        $a = somme($a, $valeurChoisie);
        $c = somme($c, $valeurChoisie);
        echo "<p>\(".$a."x".$b."=".$c."x".$d."\)</p>
        <p>L'équation n'est pas plus simple à résoudre. Rien n'a été éliminé.</p>
        <p>Que faut-il faire maintenant ?</p>

        <form method='post' action='modeleInteractif.php?niveau=".$niveau."&chapitre=".$chapitre."&nomPage=inter1&valeurChoisie=".$valeurChoisie."'>
            <button class='bouton' type='submit' name='rep2' value='".oppose($c)."' style='margin-left:3%;'>&#128191; ".oppose($c)."x</button>
            <button class='bouton' type='submit' name='rep2' value='".$c."' style='margin-left:3%;'>&#128191; ".$c."x</button>
            <button class='bouton' type='submit' name='rep2' value='".oppose($d)."' style='margin-left:3%;'>&#128191; ".oppose($d)."x</button>
            <button class='bouton' type='submit' name='rep2' value='".$d."' style='margin-left:3%;'>&#128191; ".$d."x</button>
            <button class='bouton' type='submit' name='rep2' value='".oppose($a)."' style='margin-left:3%;'>&#128191; ".oppose($a)."x</button>
        <button class='bouton' type='submit' name='rep2' value='".$a."' style='margin-left:3%;'>&#128191; ".$a."x</button>
        <button class='bouton' type='submit' name='rep2' value='".oppose($b)."' style='margin-left:3%;'>&#128191; ".oppose($b)."x</button>
        <button class='bouton' type='submit' name='rep2' value='".$b."' style='margin-left:3%;'>&#128191; ".$b."x</button>
        </form>"; 
    }    
}

echo "<!-- SI L'UTILISATEUR A REPONDU A LA QUESTION 2 -->
      <!------------------------------------------------>";

if(isset($_POST['rep2'])){
    if($_POST['rep2'] != oppose($c) and $_POST['rep2'] != oppose($a)){
        
            echo "<p>\(".$a."x".$b.$_POST['rep2']."x=".$c."x".$d.$_POST['rep2']."x\)</p>";
            $a = somme($a, $_POST['rep2']);
            $c = somme($c, $_POST['rep2']);
            echo "<p>\(".$a."x".$b."=".$c."x".$d."\)</p>
            <p>L'équation n'est pas plus simple à résoudre. Rien n'a été éliminé.</p>";
    }
    else{
        if($_POST['rep2'] == oppose($c)){
            echo "<p>\(".$a."x".$b.$_POST['rep2']."x=".$c."x".$d.$_POST['rep2']."x\)</p>";
            $a = somme($a, $_POST['rep2']);
            echo "<p>\(".$a."x".$b."=".$d."\)</p>
            <p>Bien joué. Les \(x\) ont été éliminés d'un côté de l'équation.</p>";
        }
        else{
            echo "<p>\(".$a."x".$b.$_POST['rep2']."x=".$c."x".$d.$_POST['rep2']."x\)</p>";
            $c = somme($c, $_POST['rep2']);
            echo "<p>\(".$b."=".$c."x".$d."\)</p>
            <p>Bien joué. Les \(x\) ont été éliminés d'un côté de l'équation.</p>";
        }          
    }
}

?>