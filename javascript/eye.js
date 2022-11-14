const input = document.getElementById("input");
const eye_opfen = document.getElementById("eye_opfen");
const eye_close = document.getElementById("eye_close");
eye_opfen.addEventListener("click", function(){
    eye_opfen.classList.add("hidden");
    eye_close.classList.remove("hidden");
    
    input.setAttribute("type", "password");
} );
eye_close.addEventListener("click", function(){
    eye_opfen.classList.remove("hidden");
    eye_close.classList.add("hidden");
    input.setAttribute("type", "text");
} );
