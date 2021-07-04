<?php
// connection to the bdd
function connexionBdd($classe){
    /**
     * connects to the bdd $classe, 'ATTR_ERRMODE' prints the SQL request error if necessary, 'catch' prints an error if the connection fails.
     **/
    try{
        return new PDO("mysql:host=localhost;dbname=".$classe.";charset=utf8", "root", "root", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e){
        die("Erreur : ".$e->getMessage());
    }
}

function renvoyer_membres_groupe($classe, $groupe){
    /**
     * returns a string containing the members of a group in a class
     **/
    $bdd = connexionBdd($classe);
    $reponse = $bdd->query("SELECT * FROM eleves WHERE groupe='".$groupe."'");
 
    $resultat = "";

    while($obj = $reponse->fetch()){
        $resultat = $resultat." ".$obj['nom'].", ";       
    }

    $reponse->closeCursor();
    return $resultat;
}

function renvoyer_note_groupe($classe, $groupe){
    /**
     * returns the grade of $groupe in $class.
     **/
    $bdd = connexionBdd($classe);
    $reponse = $bdd->query("SELECT * FROM groupesWorkshop WHERE ID='".$groupe."'");

    while($obj = $reponse->fetch()){
            $reponse->closeCursor();
            return $obj['note'];   
    }  
}

function initialiser_note($classe){
    /**
     * sets the notes of all students to 0
     */
    $bdd = connexionBdd($classe);

    $reponse = $bdd->prepare("UPDATE groupesWorkshop SET note=:note");
    $reponse->execute(array('note' => 0));
    $reponse->closeCursor();
}

function initialiser_participation($classe){
    /**
     * sets the participation of all students to 0
     */
    $bdd = connexionBdd($classe);

    $reponse = $bdd->prepare("UPDATE eleves SET participation=:participation");
    $reponse->execute(array('participation' => 0));
    $reponse->closeCursor();
}

function initialiser_penalite($classe){
    /**
     * sets the penalty of all the students to 0
     **/
    $bdd = connexionBdd($classe);

    $reponse = $bdd->prepare("UPDATE eleves SET penalite=:penalite");
    $reponse->execute(array('penalite' => 0));
    $reponse->closeCursor();
}

function renvoyer_membres_penalite1($classe){
    /**
     * returns a string containing the students in the class who have a penalty number 1
     **/
    $bdd = connexionBdd($classe);
    $reponse = $bdd->query("SELECT * FROM eleves WHERE penalite=1");
 
    $resultat = "";

    while($obj = $reponse->fetch()){
        $resultat = $resultat." ".$obj['nom'].", ";     
    }

    $reponse->closeCursor();
    return $resultat;
}

function renvoyer_membres_penalite2($classe){
    /**
     * returns a stirng containing the students from the class who have a penalty nimber 2
     **/
    $bdd = connexionBdd($classe);
    $reponse = $bdd->query("SELECT * FROM eleves WHERE penalite=2");
 
    $resultat = "";

    while($obj = $reponse->fetch()){
        $resultat = $resultat." ".$obj['nom'].", ";    
    }

    $reponse->closeCursor();
    return $resultat;
}

function changer_participation_eleve($classe, $eleve, $valeur){
    /**
     * changes the participation of a student in a class by $valeur points (increasing or reducing it depending on the sign)
     */
    $bdd = connexionBdd($classe);

    $resultat = NULL;

    $reponse = $bdd->query("SELECT * 
        FROM eleves
        WHERE eleves.nom='".$eleve."'");
    
    while($obj = $reponse->fetch()){
        $resultat = $obj['participation']; 
        $reponse->closeCursor();  
    }

    $reponse = $bdd->prepare("UPDATE eleves 
        SET participation=:participation 
        WHERE nom='".$eleve."'");
    $reponse->execute(array('participation' => $resultat + $valeur));
    $reponse->closeCursor();
}

function changer_note_groupe($classe, $eleve, $valeur){
    /**
     changes the note of a group in a class by $valeur points (increasing or reducing it depending on the sign), after the success of a student from the group.
     **/
    $bdd = connexionBdd($classe);

    $groupe = NULL;

    $reponse = $bdd->query("SELECT *
        FROM groupesWorkshop
        JOIN eleves 
        ON eleves.groupe = groupesWorkshop.ID 
        WHERE eleves.nom='".$eleve."'");
    
    while($obj = $reponse->fetch()){
        $note = $obj['note']; 
        $reponse->closeCursor();  
    }

    $reponse = $bdd->prepare("UPDATE groupesWorkshop
        JOIN eleves
        ON eleves.groupe = groupesWorkshop.ID  
        SET groupesWorkshop.note=:note 
        WHERE eleves.nom='".$eleve."'");
    $reponse->execute(array('note' => $note + $valeur));
    $reponse->closeCursor();
}

function definir_participation_eleve($classe, $eleve, $valeur){
    /**
    sets the participation of a student to $valeur, can be used to reset the participation or to set the value to -1 when the student belongs to a small group.
     **/
    $bdd = connexionBdd($classe);

    $reponse = $bdd->prepare("UPDATE eleves SET participation=:participation WHERE nom='".$eleve."'");
    $reponse->execute(array('participation' => $valeur));
    $reponse->closeCursor();
}

function renvoyer_participation_eleve($classe, $eleve){
    /**
     * returns the grade of $groupe in $class.
     **/
    $bdd = connexionBdd($classe);
    $reponse = $bdd->query("SELECT * FROM eleves WHERE nom='".$eleve."'");

    while($obj = $reponse->fetch()){
            $reponse->closeCursor();
            return $obj['participation'];   
    }  
}

function renvoyer_penalite_eleve($classe, $eleve){
    /**
     * returns the penalty of a student : 1 or 2 
     **/
    $bdd = connexionBdd($classe);
    $reponse = $bdd->query("SELECT * FROM eleves WHERE nom='".$eleve."'");

    while($obj = $reponse->fetch()){
        $reponse->closeCursor();
        return $obj['penalite'];      
    } 
}

function changer_penalite_eleve($classe, $eleve, $valeur){
    /**
     * changes the penalty of a student in a class by $valeur points (increasing or reducing it depending on the sign)
     */
    $bdd = connexionBdd($classe);

    $resultat = NULL;

    $reponse = $bdd->query("SELECT * 
        FROM eleves
        WHERE eleves.nom='".$eleve."'");
    
    while($obj = $reponse->fetch()){
        $resultat = $obj['penalite']; 
        $reponse->closeCursor();  
    }

    $reponse = $bdd->prepare("UPDATE eleves 
        SET penalite=:penalite 
        WHERE nom='".$eleve."'");
    $reponse->execute(array('penalite' => $resultat + $valeur));
    $reponse->closeCursor();
}

function choisir_eleve($classe){
    /**
     * picks randomly the name of a student from the table eleves, increases by 1 the column 'participation' of this student in the table. 
     -> If afterwards his participation is at 0, 1 ou 2, the function returns his name.
     -> If his participation is at 3, the function calls for choisirEleveFaibleParticipation(). 
     -> If his participation is at 4, his participation is set to 0 and the function calls for choisirEleveFaibleParticipation()
     **/
    $eleveHasard = NULL;
    $bdd = connexionBdd($classe);

	# choix au hasard
	$reponse = $bdd->query("SELECT SQL_NO_CACHE * FROM eleves ORDER BY RAND() LIMIT 1");

    while($obj = $reponse->fetch()){
        $reponse->closeCursor();
        $eleveHasard = $obj['nom'];      
    }

    # raise participation of $eleveChoisi by 1 point
    changer_participation_eleve($classe, $eleveHasard, 1);
    $participation = renvoyer_participation_eleve($classe, $eleveHasard);

    if ($participation < 3){
        return $eleveHasard;
    }
    else if($participation == 3){
        return choisir_eleve_faibleParticipation($classe);
    }
    else{
        definir_participation_eleve($classe, $eleveHasard, 0);
        return choisir_eleve_faibleParticipation($classe);
    }    
}

function choisir_eleve_faibleParticipation($classe){
    /**
    returns randomly the name of a student from the table eleves, whose participation is < 2, increases by 1 the column 'participation' of this student in the table.
    **/
    $eleveHasard = NULL;
    $bdd = connexionBdd($classe);

    # choix au hasard
    $reponse = $bdd->query("SELECT SQL_NO_CACHE * FROM eleves WHERE participation<2 ORDER BY RAND() LIMIT 1");

    while($obj = $reponse->fetch()){
        $reponse->closeCursor();
        $eleveHasard = $obj['nom'];      
    }

    # raises participation of $eleveChoisi by 1 point
    changer_participation_eleve($classe, $eleveHasard, 1);

    return $eleveHasard; 
}

function enregistrer_resultats_starter($classe, $eleve, $pourcentage, $chapitre, $competence){
    $bdd = connexionBdd($classe);
    // join
    $reponse = $bdd->prepare("UPDATE starterFonctions SET competence1=:competence WHERE nom='".$eleve."'");
    $reponse->execute(array('competence' => $pourcentage));
    $reponse->closeCursor();
}

function formater_nomClasse($classe){
    $prefixe = substr($classe, 0, 1);
    $suffixe = substr($classe, 1);

    switch ($prefixe) {
        case '6':
            $niveau = 'sixieme';
            break;
        case '5':
            $niveau = 'cinquieme';
            break;
        case '4':
            $niveau = 'quatrieme';
            break;
        case '3':
            $niveau = 'troisieme';
            break;
        case '2':
            $niveau = 'seconde';
            break;
    }
    return $niveau.'_'.$suffixe;
    
}

function transformer_nomClasseFormate_niveau($classe){
    $position = strpos($classe, '_');
    return substr($classe, 0, $position);
}

function transformer_nomClasseFormate_nomClasse($classe){
    $position = strpos($classe, '_');
    $prefixe = substr($classe, 0, $position);
    $suffixe = substr($classe, $position + 1);
    $niveau = Null;
    
    switch ($prefixe) {
        case 'sixieme':
            $niveau = '6';
            break;
        case 'cinquieme':
            $niveau = '5';
            break;
        case 'quatrieme':
            $niveau = '4';
            break;
        case 'troisieme':
            $niveau = '3';
            break;
        case 'seconde':
            $niveau = '2';
            break;
    }
    return $niveau.$suffixe;
}

?>







<?php
// anciennes fonctions avec la bdd json
function initialiser_noteI(){
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

function afficher_noteI($classe, $groupe){
    /**
     * Give the grade of the group $groupe.
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    if ($classe == 'Quatrieme'){
        foreach ($obj->{'groupes4eme'} as $v){
            if ($v->{'nom'} == $groupe){
                return $v->{'note'};
            }
        }
    }
    elseif ($classe == 'Sixieme'){
        foreach ($obj->{'groupes6eme'} as $v){
            if ($v->{'nom'} == $groupe){
                return $v->{'note'};
            }
        }
    }
}

function calculTailleClasseI($classe){
    /**
     * Give the number of occurrences in the array bdd.json->4eme
     * which corresponds to the number of students in the class.
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    return count($obj->{$classe});  
}

function lister_membres_groupeI($classe, $groupe){
    /**
     * Iterate the occurrences of the array bdd.json->groupes4eme->$groupe
     * which corresponds to the names of the students of the group $groupe.
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);
    $resultat = "";

    if ($classe == 'Quatrieme'){
        foreach ($obj->{'groupes4eme'} as $v){
            if ($v->{'nom'} == $groupe){    
                foreach ($v->{'membres'} as $valeur){
                    $resultat = $resultat." ".$valeur.", "; 
                }
            }
        }
    }
    elseif ($classe == 'Sixieme'){
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

function renvoyer_penaliteI($nom){
    /* print the penalty of the student named $nom */
    $bdd = connexionBdd($classe);
    $reponse = $bdd->query('SELECT * FROM eleves WHERE nom='.$nom);

    while($obj = $reponse->fetch()){
        $reponse->closeCursor();
        return $obj['penalite'];      
    } 
}
function augmenter_penaliteI($classe, $nom){
    /**
     * increases the penalty of a student in a class by 1 point
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
function annuler_penaliteI($classe, $nomEleve){
    /** 
     * Set penalty to 0 for $nomEleve in $niveau
     */
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{$classe} as $v){
        if ($v->{'nom'} == $nomEleve){
            if ($v->{'penalite'} > 0){
                $v->{'penalite'} = 0;
            }       
        }
    }
    $nouveau_json = json_encode($obj, JSON_PRETTY_PRINT);
    file_put_contents($_SESSION['bdd'], $nouveau_json);
}

function initialiser_penaliteI($classe){
    /**
     * sets the penalty of all the students to 0
     **/
    $json = file_get_contents($_SESSION['bdd']);
    $obj = json_decode($json);

    foreach ($obj->{$classe} as $v){
        $v->{'penalite'} = 0;
    }
    $nouveau_json = json_encode($obj, JSON_PRETTY_PRINT);
    file_put_contents($_SESSION['bdd'], $nouveau_json);
}

function choisirEleveI($classe){
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


?>


