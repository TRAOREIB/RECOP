
var compte = 0;

function numoperation() {
    //  alert('ole');
    if (document.getElementById("operation").value == "") {

        alert('Vous devriez choisir une operation de recensement');

        return false;
    } else
        return true;
}


function salutation() {

    alert('il est dans allo');
}


function supprimerContenu(element) {
    if (element != null) {
        while (element.firstChild)
            element.removeChild(element.firstChild);
    }
}

function remplacerContenu(id, texte) {
    // alert("on rentre bien dans remplacer contenu");
    var element = document.getElementById(id);
    if (element != null) {
        supprimerContenu(element);
        var nouveauContenu = document.createTextNode(texte);
        element.appendChild(nouveauContenu);
    }
}


function nouvelleLigne() {

    let nationalite = document.getElementById("autrenationalite");
    let resultat = nationalite.selectedIndex;
    let texte = nationalite.options[resultat].value;
    let element = document.getElementById("othernationalite");
    if (texte == "Oui") {
        element.innerHTML = "<div class=' form-group row'><label class='col-sm-3 col-form-label'>SAISIR L'AUTRE NATIONALITE<span style='color:red'>*</span></label><div class='col-sm-7'><input type='text' value='' class='form-control' name='autrenationalite' required></div></div>";
    }
    if (texte == "Non") {
        element.innerHTML = null;
    }


}
