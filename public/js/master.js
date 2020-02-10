let hambButton = document.querySelector('.hamb');
let hambMenu = document.querySelector('.hamb-menu');
console.log(hambButton);

hambButton.onclick = function () {
    if (hambMenu.style.display == 'block'){
        hambMenu.style.display = 'none';
    } else {
        hambMenu.style.display = 'block';
    }
}