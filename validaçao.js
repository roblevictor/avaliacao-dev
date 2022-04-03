var campoNome = document.querySelector("#nome")
var campoEmail = document.querySelector("#email")
var campoMensagem = document.getElementById("mensagem")

function validarInputs(event) {

   
    event.preventDefault()

    if (campoNome.value.length == 0) {
        document.querySelector("#erroNome").style.display = "flex"

        campoNome.style.border = "1px solid red"

    } else {
        document.querySelector("#erroNome").style.display = "none"

        campoNome.style.border = "1px solid green"

    }

    if (campoEmail.value.length == 0) {
        document.querySelector("#erroEmail").style.display = "flex"

        campoEmail.style.border = "1px solid red"

    } else {

        document.querySelector("#erroEmail").style.display = "none"

        campoEmail.style.border = "1px solid green"

    }

    if (campoMensagem.value.length == 0) {

        document.querySelector("#erroMensagem").style.display = "flex"

        campoMensagem.style.border = "1px solid red"

    } else {

        document.querySelector("#erroMensagem").style.display = "none"

        campoMensagem.style.border = "1px solid green"

    }
}