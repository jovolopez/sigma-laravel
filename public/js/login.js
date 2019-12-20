var email = document.querySelector('#email');
var emailfeedback = document.querySelector('#nombrefeedback');
var password = document.querySelector('#password');
var passwordfeedback = document.querySelector('#passwordfeedback');
var form = document.querySelector('#form');

function validar (input, feedback) {
    if (input.value.trim() == '') {
      input.classList.add('is-invalid');
      feedback.style.display = "inherit";
    }
    else {
      input.classList.remove('is-invalid');
      feedback.style.display = "none";
    }
}

email.onblur = function () {
  validar(email, emailfeedback);
}

password.onblur = function () {
  validar(password, passwordfeedback);
}

form.onsubmit = function (event) {
  if (email.value.trim() == "" || password.value.trim() == "") {
    alert('Rellena el formulario para poder ingresar.');
    event.preventDefault();
  }
}
