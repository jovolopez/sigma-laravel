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

searchIn.onclick = function () {
    searchBar.style.overflow = 'inherit';
    if (results.classList == 'results active'){
        results.className = 'results';
    } else {
        results.className = 'results active';
    }
}