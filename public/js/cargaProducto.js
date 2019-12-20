var nombre = document.querySelector('#inputNombre');
var nombrefeedback = document.querySelector('#nombrefeedback');
var precio = document.querySelector('#inputPrecio');
var preciofeedback = document.querySelector('#preciofeedback');
var detalle = document.querySelector('#inputDetalle');
var detallefeedback = document.querySelector('#detallefeedback');
var imagen = document.querySelector('#inputImagen');
var imagenfeedback = document.querySelector('#imagenfeedback');
var categoria = document.querySelector('#inputCategoria');
var categoriafeedback = document.querySelector('#categoriafeedback');
var stock = document.querySelector('#inputStock');
var stockfeedback = document.querySelector('#stockfeedback');

function validar (input, feedback) {
    if (input.value.trim() == '') {
      input.classList.add('is-invalid');
    }
    else {
      input.classList.remove('is-invalid');
      feedback.style.display = "none";
    }
}

nombre.onblur = function () {
  validar(nombre, nombrefeedback);
}

precio.onblur = function () {
  validar(precio, preciofeedback);
}

detalle.onblur = function () {
  validar(detalle, detallefeedback);
}

stock.onblur = function () {
  validar(stock, stockfeedback);
}

var formulario = document.querySelector('#formulario');

formulario.onsubmit = function () {
  if (nombre.value.trim() == "" || precio.value.trim() == "" || detalle.value.trim() == "" || stock.value.trim() == "" || imagen == '') {
    alert("Rellena el formulario para poder enviarlo.");
    event.preventDefault();
  }
}
