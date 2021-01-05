const openMenuSelector = '[js-menu-open]';
const closeMenuSelector = '[js-menu-close]';
const contentMenuSelector = '[js-menu-content]';
const headerSelector = '[js-header]';

const activeClass = 'active'

const openMenu = document.querySelector(openMenuSelector);
const closeMenu = document.querySelector(closeMenuSelector);
const contentMenu = document.querySelector(contentMenuSelector);
const header = document.querySelector(headerSelector);

openMenu.addEventListener('click', ()=> {
    contentMenu.classList.toggle(activeClass);
    document.body.classList.toggle('menu-open');
    header.classList.toggle('menu-open');
})
closeMenu.addEventListener('click', ()=> {
    contentMenu.classList.toggle(activeClass);
    document.body.classList.toggle('menu-open');
    header.classList.toggle('menu-open');
})