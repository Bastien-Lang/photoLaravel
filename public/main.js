// Sélectionne tous les éléments <img> dans la div .photos
const images = document.querySelectorAll(".photos img");
const photosDiv = document.querySelectorAll(".photos");
const album = document.querySelector("#album")
const overlay = document.querySelector('#overlay')
const imageAgrandie = document.querySelector('#imageAgrandie-container')
// Boucle sur chaque image pour ajouter un écouteur d'événement
for (let image of images) {
    image.addEventListener("click", function(){
            let div =document.getElementById('overlay')
            div.classList.add('overlay')
            div.innerHTML = `<img src="${image.src}" alt="${image.alt}" id="imageAgrandie">`

            div.addEventListener("click", function(){
                div.innerHTML = ""
                console.log(div.innerHTML)
            })
        
        console.log(image.id);
    });
}




