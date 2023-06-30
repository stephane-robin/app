/**
 * Affiche le QCM et montre les resultats quand l'utilisateur soumet ses reponses.
 * @param {obj} qcm 
 * @param {obj} quizzContainer : objet contenant une chaine des questions et reponses
 * possibles au format HTML
 * @param {obj} resultatsContainer : objet contenant une chaine des reponses choisies au
 * format HTML
 * @param {*} boutonValider 
 */
function genererQuizz(qcm, quizzContainer, boutonValider, resultatsContainer){
    
    /**
     * La fonction genere un quizz a partir du dictionnaire qcm et le 
     * place dans la variable quizzContainer de type string.
     * Pour chaque question on commence par recuperer les reponses 
     * possibles qu'on place sous forme de string avec des tags HTML de 
     * boutons radio dans la liste temporaire reponsesPossibles.
     * On se retrouve avec une liste reponsesPossibles par question.
     * Puis on stocke sous forme de string chaque question avec ses 
     * reponses possibles dans la liste output (construite donc a partir)
     * des listes temporaires reponsesPossibles.
     * Finalement on remplit l'objet quizzContainer avec une chaine de code HTML en 
     * regroupant tous les elements de la liste output.
     * @param {obj} qcm : liste de dictionnaires contenant les questions et reponses
     * possibles du quizz
     * @param {obj} quizzContainer : objet lie a la classe HTML quizz, contenant une chaine 
     * de questions et reponses possibles au format HTML
     */
	function afficherQuizz(qcm, quizzContainer){
        // liste permettant d'afficher toutes les questions / reponses possibles
        var output = [];
    
        for(var i = 0; i < qcm.length; i++){ 
            // liste des reponses possibles pour une question           
            var reponsesPossibles = [];
            for(letter in qcm[i].choix){    
                reponsesPossibles.push(
                    '<p id="test'+i+letter+'"><span style="font-weight:bold;">' + letter + '. </span>\
                    <input type="radio" name="question' + i + '" id="question' + i + letter + '" \
                    value="' + i + letter + '"><label for="question' + i + letter + '"> ' + 
                    qcm[i].choix[letter] + '</label></p>');
            }    
            output.push(
                '<div class="question"><h3>Question ' + (i + 1) + '</h3><p>' + 
                qcm[i].question + '</p></div>' + '<form class="blocReponses" style="padding-left:2%;">' + 
                reponsesPossibles.join('') + '</form><p class="commentaireReponse"></p>');
        }
        quizzContainer.innerHTML = output.join('');
    }

    /**
     * Recupere les reponses sous forme de liste resultatsContainer a partir de l'objet
     * quizzContainer.
     * On enregistre dans une liste reponsesChoisies toutes les reponses fournies par 
     * l'utilisateur a partir de resultatsContainer.
     * Pour chaque question on cherche la reponse choisie et si celle-ci est correcte,
     * nbCorrect est incremente, la question est coloriee en vert, si celle-ci est fausse
     * la question est coloriee en rouge.
     * On remplit l'objet resultatsContainer avec une chaine de code HTML constituee du
     * pourcentage de reponses correctes.
     * @param {obj} qcm : liste de dictionnaires contenant les questions et reponses
     * possibles du quizz
     * @param {obj} quizzContainer : objet lie a la classe HTML quizz, contenant une chaine 
     * de questions et reponses possibles au format HTML
     * @param {obj} resultatsContainer : objet lie a la classe HTML score, contenant
     * une chaine de pourcentages de reussite au quizz
     */
	function afficherResultats(qcm, quizzContainer, resultatsContainer){
	
        var reponsesContainer = quizzContainer.querySelectorAll('.blocReponses');
        var commentairesContainer = quizzContainer.querySelectorAll('.commentaireReponse');
        var reponsesChoisies = '';
        var nbCorrect = 0;

        for(var i = 0; i < qcm.length; i++){   

            reponsesChoisies = (reponsesContainer[i].querySelector(
                'input[name=question' + i + ']:checked') || {}).value;

            if(reponsesChoisies === i + qcm[i].correct){
                nbCorrect++; 
                //reponsesContainer[i].style.backgroundColor = '#32a852';
            }
            else{
                reponsesContainer[i].style.backgroundColor = '#a83e32';
            }
            commentairesContainer[i].innerHTML = qcm[i].commentaire;
        } 
        resultatsContainer.innerHTML = nbCorrect / qcm.length * 100 + '% de réponses correctes.';
    }

	afficherQuizz(qcm, quizzContainer);
	boutonValider.onclick = function(){
		afficherResultats(qcm, quizzContainer, resultatsContainer);
	}
}

var titreContainer = document.getElementById('titre');
var quizzContainer = document.getElementById('quizz');
var boutonValider = document.getElementById('soumettre');
var resultatsContainer = document.getElementById('score');

titreContainer.innerHTML = "Quiz - " + titreQcm;
genererQuizz(qcm, quizzContainer, boutonValider, resultatsContainer);
