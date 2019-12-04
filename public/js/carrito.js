/* Title Fix: El siguiente codigo corrige el "text truncate max width de Bootstrap"
segun el viewport del usuario. */
var viewportWidth = window.innerWidth;
var productTitle = document.querySelectorAll('.text-truncate');

console.log(viewportWidth);

if (viewportWidth < 370) {
  for (var i = 0; i < productTitle.length; i++) {
    productTitle[i].style.maxWidth = "100px";
  }
}

if (viewportWidth >= 500) {
  for (var i = 0; i < productTitle.length; i++) {
    productTitle[i].style.maxWidth = "250px";
  }
}

if (viewportWidth >= 768) {
  for (var i = 0; i < productTitle.length; i++) {
    productTitle[i].style.maxWidth = "400px";
  }
}
/* <- END Title Fix -> */

/* IMG Fix: EL siguiente codigo corrige el tamaño de la imagen del producto
para que al verlo en celulares no "descarrile". */
var imgProduct = document.querySelectorAll('.img-fluid');

if (viewportWidth <= 410) {
  for (var i = 0; i < imgProduct.length; i++) {
    imgProduct[i].width = "35";
  }
}
/* <- END IMG Fix -> */

/* <-  -> */
var div = document.querySelectorAll('.totalDiv');

if (viewportWidth >= 992) {
  for (var i = 0; i < div.length; i++) {
    div[i].classList.add('ml-4');
  }
}
/* <-  -> */
