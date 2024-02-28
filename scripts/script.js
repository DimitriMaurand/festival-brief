// changement de none à block en appuyant sur suivant

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
const checkboxUnJour = document.getElementById('pass1jour');
// Récupère la div
const divTarifReduit = document.querySelector('.tarifReduit');
const divEnfant = document.querySelector('.enfant');
const sectionPass1jourDate = document.getElementById('pass1jourDate');

checkbox.addEventListener('change', () => {
    if (checkbox.checked) {
        divTarifReduit.style.display = 'block';

    } else {
        divTarifReduit.style.display = 'none';

        // choixJour1.checked = false;
        // choixJour2.checked = false;
        // choixJour3.checked = false;
    }
});



checkboxEnfantsOui.addEventListener('change', function () {

    if (checkboxEnfantsOui.checked) {
        divEnfant.style.display = 'block';

    } else {
        divEnfant.style.display = 'none';
        // nombreCasquesEnfants.checked = 0;
        // NombreLugesEte.checked = 0;
    }
});

checkboxUnJour.addEventListener('change', function () {

    if (checkboxUnJour.checked) {
        sectionPass1jourDate.style.display = 'block';

    } else {
        sectionPass1jourDate.style.display = 'none';
    }

});

// choix unique de checkbox
let pass1jour = document.getElementById('pass1jour');

pass1jour.addEventListener('change', () => {
    if (pass1jour.checked) {
        document.getElementById('pass1jourDate').style.display = "block";
    } else {
        document.getElementById('pass1jourDate').style.display = "none";
        choixJour1.checked = false;
        choixJour2.checked = false;
        choixJour3.checked = false;
    }
})

