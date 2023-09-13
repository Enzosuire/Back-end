console.log("script chargé");

function getValues(event) {
  event.preventDefault(); 

let element= document.querySelector('select');

for (let i = 0; i < array.length; i++) {
    

      
}


//liaison api pokemon//

fetch(`https://pokebuildapi.fr/api/v1/pokemon/${FormPokemon}`)
      .then(response => response.json())
      .then(data => {

      

      console.log(`Détails de ${FormPokemon}:`);
      console.log(`Nom: ${data.name}`);
      console.log(`Image: ${data.image}`);
      console.log(`Element: ${data.apiTypes[0].name}`);
      console.log(`Evolue: ${data.apiEvolutions[0].name}`);


      document.querySelector("h2").textContent = `Voici les informations de ${FormPokemon}`;
      document.querySelector("img").setAttribute("src", data.image);
      let arrayP = document.querySelectorAll(".resultat>p");
      arrayP[0].textContent = `Element: ${data.apiTypes[0].name}`;
      arrayP[1].textContent = `Evolue: ${data.apiEvolutions[0].name}`;

      
      })
     
    
}

      let monFormulaire = document.forms["FormPokemon"];
      console.log(monFormulaire);
      monFormulaire.addEventListener("submit", getValues); // Remarquez que l'on n'envoie rien et que l'on appelle la fonction sans les parenthèses
      

