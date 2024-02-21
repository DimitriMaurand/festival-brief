
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
const sectionEnfant = document.querySelector('.enfant');

checkbox.addEventListener('change', () => {
    if (checkbox.checked) {
        divTarifReduit.style.display = 'block';
    } else {
        divTarifReduit.style.display = 'none';
    }
});

checkboxEnfantsOui.addEventListener('change', () => {
    if (checkboxEnfantsOui.checked) {
        sectionEnfant.style.display = 'block';
    } else {
        sectionEnfant.style.display = 'none';
    }
});