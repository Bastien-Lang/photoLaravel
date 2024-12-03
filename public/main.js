const images = document.querySelectorAll(".photos img");
const photosDiv = document.querySelectorAll(".photos");
const album = document.querySelector("#album")
const overlay = document.querySelector('#overlay')
const overlayImg = document.querySelector("#overlay img")
const imageAgrandie = document.querySelector('#imageAgrandie-container')


for (let image of images) {
    image.addEventListener("click", function(){
        overlay.classList.add("show")
        overlay.classList.remove("hide")
        overlayImg.src = image.src
        overlay.addEventListener("click", function(){
            overlayImg.src = ""
            overlay.classList.add("hide")
            overlay.classList.remove("show")
        })
    });
}




