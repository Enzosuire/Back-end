console.log("script chargé");

let element = document.querySelector("select");
const selectElement = document.querySelector("select");

function NomPokemon() {
  const Api = `https://pokebuildapi.fr/api/v1/pokemon/`;

  //liaison api pokemon//

  fetch(Api)
    .then((response) => response.json())
    .then((data) => {
      // Parcourez les données pour créer des options dans le select
      data.forEach((pokemon) => {
        const option = document.createElement("option");
        option.value = pokemon.name; // Assurez-vous que "name" correspond au nom du Pokémon dans les données
        option.textContent = pokemon.name;
        selectElement.appendChild(option);
      });
    });
}

NomPokemon();
function getValues(event) {
  event.preventDefault();

  let element = document.querySelector("select");
  const selectedPokemon = selectElement.value;

  const Api2 = `https://pokebuildapi.fr/api/v1/pokemon/${selectedPokemon}`;

  //liaison api pokemon//

  fetch(Api2)
    .then((response) => response.json())
    .then((data) => {
      document.querySelector(
        "h2"
      ).textContent = `Voici les informations de ${selectedPokemon}`;
      document.querySelector("img").setAttribute("src", data.image);
      let arrayP = document.querySelectorAll(".resultat>p");
      arrayP[0].textContent = `Élement: ${data.apiTypes[0].name}`;
     

      document.querySelector("#details").style.visibility = "visible";
   
    arrayP[1].textContent = `Évolution: ${data.apiEvolutions[0].name}`;
});
}

const FElement = document.querySelector("form");
FElement.addEventListener("submit", getValues);
