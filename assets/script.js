AOS.init();
let navbar = document.getElementById('ieu');

window.addEventListener('scroll', function () {
    let scroll = window.scrollY;

    if (scroll > 50) {
        navbar.classList.add('bg-light');
    } else {
        navbar.classList.remove('bg-light');
    }
});

window.addEventListener('scroll', () => {
    console.log('Scrolled!');
});