var menu = document.querySelector('#menu-icon');
var navbar = document.querySelector('.navbar');
var btnContainer = document.getElementById("navbar");
var btns = btnContainer.getElementsByClassName("button");

for(var i = 0; i < btns.length; i++){
    btns[i].addEventListener('click', function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active");
        this.className += " active";
    })
}

menu.onclick = () =>{
    menu.classList.toggle('bi-x');
    navbar.classList.toggle('open');
}