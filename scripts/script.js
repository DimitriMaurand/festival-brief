
function suivant() {
    let element = document.getElementById("options");
    element.style.display = "block";
}



let bouton = document.querySelector(".bouton");
bouton.addEventListener("click", suivant);

function suivant2() {
    let element = document.getElementById("coordonnees");
    element.style.display = "block";
}
let bouton2 = document.querySelector(".bouton2");
bouton2.addEventListener("click", suivant2);