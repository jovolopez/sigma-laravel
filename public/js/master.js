let hambButton = document.querySelector('.hamb');
let hambMenu = document.querySelector('.hamb-menu');
let searchIn = document.querySelector('#search');
let results = document.querySelector('.results');
let searchBar = document.querySelector('.search-bar');

hambButton.onclick = function () {
    if (hambMenu.classList == 'hamb-menu active'){
        hambMenu.className = 'hamb-menu';
    } else {
        hambMenu.className = 'hamb-menu active';
    }
}

searchIn.onfocus = function () {
    results.className = 'results active';
    searchBar.style.width = '450px';
    searchBar.style.overflow = 'inherit';
    searchBar.style.borderBottomLeftRadius = '0';
    searchBar.style.borderBottomRightRadius = '0';
}

searchIn.onblur = function () {
    results.className = 'results';
    searchBar.style.width = '350px';
    searchBar.style.overflow = 'hidden';
    searchBar.style.borderBottomLeftRadius = '5px';
    searchBar.style.borderBottomRightRadius = '5px';
}

 // añadir gif de carga
 