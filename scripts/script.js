function suivant() {
    let element = document.getElementById("options");
    let element2 = document.getElementById("reservation");
    element.style.display = "flex";
    element2.style.display = "none";
    element.style.transition = "opacity 2s ease";

}



let bouton = document.querySelector(".bouton");
bouton.addEventListener("click", suivant);

function suivant2() {
    let element = document.getElementById("coordonnees");
    let element2 = document.getElementById("options");
    element.style.display = "flex";
    element2.style.display = "none";
}
let bouton2 = document.querySelector(".bouton2");
bouton2.addEventListener("click", suivant2);

//apparition en cochant

// Récupère la case à cocher
const checkbox = document.getElementById('tarifReduit');
const checkboxEnfantsOui = document.getElementById('enfantsOui');
// Récupère la div
const divTarifReduit = document.querySelector('.tarifReduit');
const divEnfant = document.querySelector('.enfant');

checkbox.addEventListener('change', () => {
    if (checkbox.checked) {
        divTarifReduit.style.display = 'block';
        console.log(checkbox.checked)
    } else {
        divTarifReduit.style.display = 'none';
    }
});

checkboxEnfantsOui.addEventListener('change', function () {

    if (checkboxEnfantsOui.checked) {
        divEnfant.style.display = 'block';
        console.log(checkboxEnfantsOui.checked)
    } else {
        divEnfant.style.display = 'none';
    }
});