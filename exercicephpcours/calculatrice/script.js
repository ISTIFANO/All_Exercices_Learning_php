var dat = [];   // le tableau dat qui contien l'ensemble des valeurs
function Data(val) {
    // la fonction getData(val) permet d'ajouter l'element cliquer sur dand l'input
    var place = document.getElementById('result');  // acceder a l'element input qui a le id = result
    dat.push(val);  // ajouter l'element val au tableau
    place.value += val; // faire apparaitre l'element val das l'input
    
}
function clearParag() {
    // la fonction clearParag() qui permet de effacer tout le contenue 
    var place = document.getElementById('result');
    place.value = '';
    dat = [];
}
function clearlast() {
    // la fonction clearlast() permet d'effacer le dernier element
    var place = document.getElementById('result');
    var d = place.value;
    var t = dat.pop();  // la fonction pop() de supprimer le dernier element du tableau
    var lastIndex = d.lastIndexOf(t); // la fonction  lastIndexOf() donne l'indice du dernier element
    var result = d.substring(0, lastIndex); // la fonction substring() permet de couper une partie d'une chaine de caractére
    place.value = result;
}

var exp;
function valid() {
    // la fonction permet de valider les expressions saisie 
    var place = document.getElementById('result');
    var d = place.value;
    var operInd1 = d.indexOf('+');
    var operInd2 = d.indexOf('-');
    var operInd3 = d.indexOf('/');
    var operInd4 = d.indexOf('*');
    var firstPar = d.indexOf("(");
    var lastPar = d.indexOf(")");
    var num = d.slice(firstPar+1, lastPar); // la fonction slice permet de couper une partie d'une chaine
    // verifier si l'expression se termine par un operateur
    if (operInd1 === d.length - 1 || operInd2 === d.length - 1 
        || operInd3 === d.length - 1 || operInd4 === d.length - 1) {
            clearParag();
        alert("Erreur:vous ne pouvez pas terminer par un opérateur !");
        }
    // verifier si l'expression se commence par un operateur
    if (operInd3 === 0 || operInd4 === 0) {
        clearParag();
        alert("Erreur:vous ne pouvez pas commencer par un opérateur !");
    }
    // verifier si l'operateur est de division et la division est sur 0
    if (operInd3 !== -1 && d.substring(operInd3 + 1) === '0') {
        clearParag();
        alert("Erreur:vous ne pouvez pas divisez sur 0 !");
    }
    // verifier si le nombre entre parenthese est positive et numerique
    if(d.indexOf('sqrt') != -1){
        if(num <0){
        clearParag();
        alert("Erreur:la racine n'accepte pas les nombre negatives");
        }
        else if (isNaN(num)){
        clearParag();
        alert("Erreur:expression non valid"); 
        }
    }
    // verifier si l'expression de sin et du cos est valid
   if(d.indexOf('sin')!= -1 || d.indexOf('cos')!= -1){
        if(isNaN(num)){
        clearParag();
        alert("Erreur:expression non valid"); 
    }
   }
    // verifier si l'expression de tan est valid
   if(d.indexOf('tan') != -1){
    if(isNaN(num) && num !="PI"){
        clearParag();
        alert("Erreur:expression non valid"); 
    }
    else if(num == (Math.PI/2) || num == (-(Math.PI/2))){
        clearParag();
        alert("Erreur:expression non valid"); 
    }
   }
    // verifier si l'expression de log valid
   if(d.indexOf('log') != -1){
        if(num<=0){
        clearParag();
        alert("Erreur:expression non valid");    
        }
   }
}

    var url = document.URL; // obtenir l'URL 
    var index = url.indexOf('?'); // obtenir l'indice de ?
    if (index !== -1) { // si index1 est different de -1 cela veut dire que le code est executer par le serveur php et le resultat est
        // redirectionner vers l'html 
      var index1 = url.indexOf('=', index); // obtenir l'indice du = dans l'URL pour obtenir le resulat
      var result = url.slice(index1 + 1); // couper la partie apres = pour obtenir le resultat
      result = result.replaceAll('%20', ' '); 
    var place = document.getElementById('result');
    place.value = result;
    }

