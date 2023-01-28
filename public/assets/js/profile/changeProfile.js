function changeImage(file){
    var image = document.querySelector(".js-image");
    image.src = URL.createObjectURL(file);
}