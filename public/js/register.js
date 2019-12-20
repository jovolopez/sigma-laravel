var nombre = document.querySelector('#nombre');
var nombrefeedback = document.querySelector('#nombrefeedback');
var apellido = document.querySelector('#apellido');
var apellidofeedback = document.querySelector('#apellidofeedback');
var email = document.querySelector('#email');
var emailfeedback = document.querySelector('#emailfeedback');

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

nombre.onblur = function () {
  validar(nombre, nombrefeedback);
}

apellido.onblur = function () {
  validar(apellido, apellidofeedback);
}

email.onblur = function () {
  validar(email, emailfeedback);
}

// Password Meter Bar
var strength = {
  0: "Muy insegura",
  1: "Insegura",
  2: "Débil",
  3: "Parece buena",
  4: "Fuerte :)"
}

var password = document.getElementById('pass');
var meter = document.getElementById('password-strength-meter');
var text = document.getElementById('password-strength-text');

password.addEventListener('input', function() {
  var val = password.value;
  var result = zxcvbn(val);

  // Update the password strength meter
  meter.value = result.score;

  // Update the text indicator
  if (val !== "") {
    text.innerHTML = "Contraseña: " + strength[result.score];
  } else {
    text.innerHTML = "";
  }
});

// End password meter Bar
// Password coinciden?
var rpassword = document.querySelector('#rpass');
var passwordfeedback = document.querySelector('#passwordfeedback');

rpassword.onblur = function () {
  if (rpassword.value != password.value) {
    rpassword.classList.add('is-invalid');
    password.classList.add('is-invalid');
    passwordfeedback.style.display = "inherit";
  }
  else {
    rpassword.classList.remove('is-invalid');
    password.classList.remove('is-invalid');
    passwordfeedback.style.display = "none";
  }
}

// end password coinciden?
// Prevent Default.
var form = document.querySelector('#form');
var terms = document.querySelector('#terms').checked;

form.onsubmit = function (event) {
  if (nombre.value.trim() == '' || apellido.value.trim() == '' || email.value.trim() == '') {
    event.preventDefault();
    alert('Verifique que el formulario esté bien completado.')
  }
  if (password.value.trim() != rpassword.value.trim()) {
    event.preventDefault();
    alert('Las contraseñas no coinciden');
  }
  // if (terms == false) {
  //   alert('Debe aceptar los terminos y condiciones del sitio.');
  //   event.preventDefault();
  // }
}
