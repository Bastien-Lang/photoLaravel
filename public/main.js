// Sélectionne tous les éléments <img> dans la div .photos
const images = document.querySelectorAll(".photos img");
const photosDiv = document.querySelectorAll(".photos");
const album = document.querySelector("#album")
const overlay = document.querySelector('#overlay')
const imageAgrandie = document.querySelector('#imageAgrandie')
// Boucle sur chaque image pour ajouter un écouteur d'événement
for (let image of images) {
    image.addEventListener("click", function(){
        let div = document.createElement("div")
        div.classList.add ("overlay")
        div.id = "overlay"
        div.innerHTML = `<img src="${image.src}" alt="${image.alt}" id="imageAgrandie">`
        album.append(div)
        for (let photoDiv of photosDiv){
            photoDiv.classList.toggle("blurred")
            photoDiv.classList.toggle("default")
        }
        console.log(image.id);
    });
}

    if (overlay!= null) {
        overlay.addEventListener("click", function(){
        overlay.innerHTML = ""
    })
}
