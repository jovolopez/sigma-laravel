let hambButton = document.querySelector('.hamb');
let hambMenu = document.querySelector('.hamb-menu');
let searchIn = document.querySelector('#search');
let results = document.querySelector('.results');
let searchBar = document.querySelector('.search-bar');

let header = document.querySelector('header');
let body = document.querySelector('body');

hambButton.onclick = function () {
    if (hambMenu.classList == 'hamb-menu active'){
        hambMenu.className = 'hamb-menu';
    } else {
        hambMenu.className = 'hamb-menu active';
    }
}

searchIn.onfocus = function () {
    results.className = 'results active';
    searchBar.className = 'search-bar active';
}

searchIn.onblur = function () {
    results.className = 'results';
    searchBar.className = 'search-bar';
}

 // añadir gif de carga
 
 window.onkeypress = function (e) {
     console.log(e);
     if (e.key == 'w') {
         body.style.background = '#ffffff';
         header.style.background = '#ffffff';
         header.style.borderBottom = '1px solid #e4e4e4'; 
     } 
     if (e.key == 'g') {
        body.style.background = 'rgb(251,251,251)';
        header.style.background = '#ffffff';
        header.style.borderBottom = '1px solid #e4e4e4'; 
     }
 }