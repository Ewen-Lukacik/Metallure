var burgerMenu = document.querySelector('#burger-menu');

var overlay = document.querySelector('.menu-navigation-container');

burgerMenu.addEventListener('click', function() {
  this.classList.toggle("close");
  overlay.classList.toggle("burger");
});
