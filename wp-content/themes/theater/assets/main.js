let flkty = new Flickity('.products__carousel', {
    // prevNextButtons: false,
    pageDots: false,
    cellAlign: 'left',
    selectedAttraction: 0.2,
    friction: 0.8,
    draggable: false,
});

let phoneMask = IMask(document.getElementById('phone-mask'), {
    mask: '+{7} (000) 000-00-00',
});

let menu = document.querySelector('.mobile-menu');
let burger = document.querySelector('.header__burger');
let menuClose = document.querySelector('.mobile-menu__close');

burger.addEventListener('click', () => {
    if (!menu.classList.contains('mobile-menu--show')) {
        menu.classList.add('mobile-menu--show');
    }
});

menuClose.addEventListener('click', () => {
    if (menu.classList.contains('mobile-menu--show')) {
        menu.classList.remove('mobile-menu--show');
    }
});

let posters = document.querySelectorAll('.poster > .poster__image');
let activePoster = 0;
let posterPrev = document.getElementById('posterPrev');
let posterNext = document.getElementById('posterNext');

document.addEventListener('DOMContentLoaded', () => {
    if (posters.length >= 0) {
        posters[0].classList.add('poster__image--active');
    }
});

posterPrev.addEventListener('click', () => {
    posters[activePoster].classList.remove('poster__image--active');
    if (activePoster === 0) {
        activePoster = posters.length - 1;
    } else {
        activePoster -= 1;
    }
    posters[activePoster].classList.add('poster__image--active');
});

posterNext.addEventListener('click', () => {
    posters[activePoster].classList.remove('poster__image--active');
    if (activePoster === posters.length - 1) {
        activePoster = 0;
    } else {
        activePoster += 1;
    }
    posters[activePoster].classList.add('poster__image--active');
});

const links = document.querySelectorAll('.menu > a, .mobile-menu__nav > a');
for (let link of links) {
    link.addEventListener('click', (e) => {
        e.preventDefault();

        const blockId = link.getAttribute('href').substr(1);

        document.getElementById(blockId).scrollIntoView({
            behavior: 'auto',
            block: 'start',
        });
    });
}
