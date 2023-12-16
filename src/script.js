const btnInicio = document.getElementById("singin"),
btnRegistro = document.getElementById("singup")
formRegistre = document.querySelector(".register"),
formLogin = document.querySelector(".login");

btnInicio.addEventListener("click", e => {
    formRegistre.classList.remove("hide3");
    formRegistre.classList.add("hide1");
    formLogin.classList.remove("hide2");
    formLogin.classList.add("hide3");
   

})

btnRegistro.addEventListener("click", e => {
    formLogin.classList.remove("hide3");
    formLogin.classList.add("hide2");
    formRegistre.classList.add("hide3");
})

//scripts del modal

