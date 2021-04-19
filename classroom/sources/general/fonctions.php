<?php  
function interdireParticipationConsecutive(){
}

# ================================
# GRADES

function augmenter_note($classe, $eleve){
    /**
     * Increase by 1 point the grade of the group in which the student $eleve
     * belongs to. The script iterates in bdd.json->4eme to find the name of the 
     * group associated to $eleve and records this name in the variable $groupe.
     * Then the script iterates in bdd.jdon->groupes to find $groupe and add 1 point
     * to the grade 'note'.
     */
    $groupe = "";
    $note="";
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);
    
    foreach ($obj->{$classe} as $v){
        if ($v->{'nom'} == $eleve){
            $groupe = $v->{'groupe'};
        }
    }

    if ($classe == 'quatrieme'){
        foreach ($obj->{'groupes4eme'} as $v){
            if ($v->{'nom'} == $groupe){
                $v->{'note'} = $v->{'note'} + 1;
            }
        }
    }
    elseif ($classe == 'sixieme'){
        foreach ($obj->{'groupes6eme'} as $v){
            if ($v->{'nom'} == $groupe){
                $v->{'note'} = $v->{'note'} + 1;
            }
        }
    }
    
    $nouveau_json = json_encode($obj, JSON_PRETTY_PRINT);
    file_put_contents($_SESSION['bdd'], $nouveau_json);
}


function initialiser_note(){
    /**
     * Initialize all the grades of the students to 8 / 20 in bdd.json
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{'groupes4eme'} as $v){
    	$v->{'note'} = 8;
    }
    $nouveau_json = json_encode($obj, JSON_PRETTY_PRINT);
    file_put_contents($_SESSION['bdd'], $nouveau_json);
}


function afficher_note($classe, $groupe){
    /**
     * Give the grade of the group $groupe.
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    if ($classe == 'quatrieme'){
        foreach ($obj->{'groupes4eme'} as $v){
            if ($v->{'nom'} == $groupe){
                return $v->{'note'};
            }
        }
    }
    elseif ($classe == 'sixieme'){
        foreach ($obj->{'groupes6eme'} as $v){
            if ($v->{'nom'} == $groupe){
                return $v->{'note'};
            }
        }
    }
}


# ==================================
# WORK ON THE DATABASE 

function calculTailleClasse($classe){
    /**
     * Give the number of occurrences in the array bdd.json->4eme
     * which corresponds to the number of students in the class.
     */
    $json = file_get_contents($_SESSION['bdd']);
	$obj = json_decode($json);

	return count($obj->{$classe});	
}


function lister_membres_groupe($classe, $groupe){
    /**
     * Iterate the occurrences of the array bdd.json->groupes4eme->$groupe
     * which corresponds to the names of the students of the group $groupe.
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);
    $resultat = "";

    if ($classe == 'quatrieme'){
        foreach ($obj->{'groupes4eme'} as $v){
            if ($v->{'nom'} == $groupe){    
                foreach ($v->{'membres'} as $valeur){
                    $resultat = $resultat." ".$valeur.", "; 
                }
            }
        }
    }
    elseif ($classe == 'sixieme'){
        foreach ($obj->{'groupes6eme'} as $v){
            if ($v->{'nom'} == $groupe){    
                foreach ($v->{'membres'} as $valeur){
                    $resultat = $resultat." ".$valeur.", "; 
                }
            }
        }
    }
    return $resultat;
}

function afficherMembresPenalite2($classe){
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{$classe} as $v){
        if ($v->{'penalite'} == 2){
            echo $v->{'nom'}.", ";
        }
    }
}

function afficherMembresPenalite1($classe){
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{$classe} as $v){
        if ($v->{'penalite'} == 1){
            echo $v->{'nom'}.", ";
        }
    }
}

# ======================================
# CHOOSE A STUDENT

function renvoyer_penalite($nom){
    /* print the penalty of the student named $nom */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{'quatrieme'} as $v){
        if ($v->{'nom'} == $nom){
            return $v->{'penalite'};
        }
    }
}

function tester_penalite1($niveau, $nom){
    /** 
     * Returns True if penalty equals 1 for $nom in $niveau.
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    $resultat = False;

    foreach ($obj->{$niveau} as $v){
        if ($v->{'nom'} == $nom){
            if ($v->{'penalite'} == 1){
                $resultat = True;
            }
        }
    }

    return $resultat;
}

function augmenter_penalite($classe, $nom){
    /**
     * Increase penalty of $nom in $classe by 1 point
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{$classe} as $v){
        if ($v->{'nom'} == $nom){
            $v->{'penalite'} = $v->{'penalite'} + 1;
        }
    }
    $nouveau_json = json_encode($obj, JSON_PRETTY_PRINT);
    file_put_contents($_SESSION['bdd'], $nouveau_json);
}

function diminuer_penalite($classe, $nom){
    /**
     * Decrease penalty of $nom in $classe by 1 point
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{$classe} as $v){
        if ($v->{'nom'} == $nom){
            $v->{'penalite'} = $v->{'penalite'} - 1;
        }
    }
    $nouveau_json = json_encode($obj, JSON_PRETTY_PRINT);
    file_put_contents($_SESSION['bdd'], $nouveau_json);
}

function annuler_penalite($niveau, $nomEleve){
    /** 
     * Set penalty to 0 for $nomEleve in $niveau
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{$niveau} as $v){
        if ($v->{'nom'} == $nomEleve){
            if ($v->{'penalite'} > 0){
                $v->{'penalite'} = 0;
            }       
        }
    }
    $nouveau_json = json_encode($obj, JSON_PRETTY_PRINT);
    file_put_contents($_SESSION['bdd'], $nouveau_json);
}

function initialiser_penalite($classe){
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{$classe} as $v){
        $v->{'penalite'} = 0;
    }
    $nouveau_json = json_encode($obj, JSON_PRETTY_PRINT);
    file_put_contents($_SESSION['bdd'], $nouveau_json);
}

function augmenter_participation($nom){
    /**
     * Raise participation of $nom by 1 point
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{$_SESSION['niveau']} as $v){
        if ($v->{'nom'} == $nom){
            $v->{'participation'} = $v->{'participation'} + 1;
        }
    }
    $nouveau_json = json_encode($obj, JSON_PRETTY_PRINT);
    file_put_contents($_SESSION['bdd'], $nouveau_json);
}

function annuler_participation($nom){
    /**
     * Bring participation of $nom to 0
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{$_SESSION['niveau']} as $v){
        if ($v->{'nom'} == $nom){
            $v->{'participation'} = 0;      
        }
    }
    $nouveau_json = json_encode($obj, JSON_PRETTY_PRINT);
    file_put_contents($_SESSION['bdd'], $nouveau_json);
}

function diminuer_participation($nom){
    /**
     * Lower participation of $nom by 1 point
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{$_SESSION['niveau']} as $v){
        if ($v->{'nom'} == $nom){
            $v->{'participation'} = -1;       
        }
    }
    $nouveau_json = json_encode($obj, JSON_PRETTY_PRINT);
    file_put_contents($_SESSION['bdd'], $nouveau_json);
}

function initialiser_participation($classe){
    /**
     * Set participation of all students to 0
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{$classe} as $v){
        $v->{'participation'} = 0;
    }
    $nouveau_json = json_encode($obj, JSON_PRETTY_PRINT);
    file_put_contents($_SESSION['bdd'], $nouveau_json);
}

function choisirEleve($classe){
	$json = file_get_contents($_SESSION['bdd']);
	$obj = json_decode($json);

	# find the size of the class
	$tailleClasse = calculTailleClasse($classe);

	# provide a number between 0 and the number of students in $classe
	$choix_nbreHasard = rand(0, $tailleClasse-1);
    # choose a student in $classe based on $choix_nbreHasard
    $eleveHasard = $obj->{$classe}[$choix_nbreHasard]->{'nom'};

    # raise participation of $eleveChoisi by 1 point
    augmenter_participation($eleveHasard);

    if ($obj->{$classe}[$choix_nbreHasard]->{'participation'} < 2){      
        return $eleveHasard;
    } 
    elseif ($obj->{$classe}[$choix_nbreHasard]->{'participation'} > 3){
        annuler_participation($eleveHasard);
        return $eleveHasard;
    }
    else {
        return choisirEleve($classe);
    }
    
}



function calculNbreStarters($classe){
    /**
     * Give the number of occurrences in the array bdd.json->starters
     * which corresponds to the number of starters.
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    return count($obj->{'starters'}->{$classe});   
}

function choisirStarter($classe){
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    # find the number of starters
    $nbreStarters = calculNbreStarters($classe);

    # provide a number between 0 and the number of starters in starters - 1
    $choix_nbreHasard = rand(0, $nbreStarters - 1);

    return $obj->{'starters'}->{$classe}[$choix_nbreHasard]; 
}



?>


