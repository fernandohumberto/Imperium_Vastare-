/* Configurações do menu Hamburguer */
const toggleButton = document.getElementById('navbar-toggle');
const menu = document.getElementById('navbar-menu');

toggleButton.addEventListener('click', () => {
    menu.classList.toggle('active');
});

document.addEventListener('click', (event) => {
    if (!menu.contains(event.target) && !toggleButton.contains(event.target)) {
        menu.classList.remove('active');
    }
});

window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
        menu.classList.remove('active');
    }
});

