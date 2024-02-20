
function suivant(coordonnees) {
    let button = document.querySelectorAll(".bouton");
    let fieldset = document.querySelectorAll(".fieldset");

    button.forEach(button => {
        button.addEventListener("click", () => {
            fieldset.forEach(fieldset => {
                fieldset.style.display = "block";
            });
        });
    });
}