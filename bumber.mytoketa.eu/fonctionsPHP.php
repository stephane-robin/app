<?php
function stringToListOfChar($chaine){

    $liste_renvoyee = [];

    for ($i=0; $i<strlen($chaine); $i++){
        array_push($liste_renvoyee, $chaine[$i]);
    }

    return $liste_renvoyee;
}

function yzx($chaine){
    $n = 143;
    $e = 7;
    $chaine = trim($chaine);
    $chaineRenvoyee = "";
    $listeRenvoyee = [];

    $listOfChar = stringToListOfChar($chaine);

    for ($i=0; $i<count($listOfChar); $i++){
        array_push($listeRenvoyee, (string)((ord($listOfChar[$i]) ** $e) % $n));
        if (strlen($listeRenvoyee[$i]) == 2){
            $listeRenvoyee[$i] = "0" . $listeRenvoyee[$i];
        }
        if (strlen($listeRenvoyee[$i]) == 1){
            $listeRenvoyee[$i] = "00" . $listeRenvoyee[$i];
        }
        $chaineRenvoyee .= $listeRenvoyee[$i];
    }

    return $chaineRenvoyee;
}

function stringToListOfThree($chaine){
    $listOfThree = [];

    for ($i=0; $i<strlen($chaine)-2; $i+=3){
        array_push($listOfThree, $chaine[$i] . $chaine[$i + 1] . $chaine[$i + 2]);
    }

    return $listOfThree;
}

function xyz($chaine){
    $n = 143;
    $d = 103;
    $chaine_renvoyee = "";

    $listOfThree = stringToListOfThree($chaine);

    foreach ($listOfThree as $element){
        $chaine_renvoyee = $chaine_renvoyee . chr((((int)($element)) ** $d) % $n);
    }

    return $chaine_renvoyee;
}

?>