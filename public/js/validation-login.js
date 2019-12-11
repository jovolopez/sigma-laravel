window.onload = function(){

  var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var formulario = document.querySelector('.login-form');
  formulario.onsubmit = function (evento) {
    console.log(formulario)
  }

}
