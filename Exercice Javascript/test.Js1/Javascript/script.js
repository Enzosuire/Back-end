let monAge = 0;
const CLE_SECRET = "dfdfdgd4564dfsdf4sd";

function construireNomComplet(nom, prenom) {
    let nomComplet = nom + " " + prenom;
    return nomComplet;
}
let inputPrenom = "Alain";
let inputNom = "ORLUK";
let nomCompletConstruit = "";
nomCompletConstruit = construireNomComplet(inputNom, inputPrenom);
console.log(nomCompletConstruit);