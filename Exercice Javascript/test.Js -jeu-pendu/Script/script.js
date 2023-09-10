console.log("script chargé");

const UNELettre = document.createElement("div");


const UNELettrearray = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
console.log(UNELettre);

for (let i = 0; i < UNELettrearray.length; i++) {
   console.log("button");

   let malettrebutton = document.createElement("button");
   malettrebutton.innerText = UNELettrearray[i];
   UNELettre.appendChild(malettrebutton);

   malettrebutton.classList.add("casecache");
   malettrebutton.addEventListener("click",(eventdetail)=> {
      const lettreCliquee= eventdetail.target.innerText;
      UNELettre.appendChild(lettreCliquee);
   });
   

}


document.body.appendChild(UNELettre);
function afficherLettre(lettre) {
   const lettreDiv = document.createElement("div");
   lettreDiv.innerText = lettre;
  afficherLettre(lettreCliquee);

}

document.querySelectorAll("button").forEach((i) =>
   UNELettre.addEventListener("click", (eventdetail) => {
      eventdetail.target.disabled = true;



   })
);

let buttonElt = document.createElement("button");
UNELettre.appendChild(buttonElt);
buttonElt.innerText = "ENVOYER";


