const toggleButton = document.getElementById('navbar-toggle');
const menu = document.getElementById('navbar-menu');

toggleButton.addEventListener('click', () => {
    menu.classList.toggle('active');
});
