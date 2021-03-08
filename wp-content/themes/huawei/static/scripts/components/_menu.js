const openMenuSelector = '[js-menu-open]';
const closeMenuSelector = '[js-menu-close]';
const contentMenuSelector = '[js-menu-content]';
const headerSelector = '[js-header]';

const activeClass = 'active'

const openMenu = document.querySelector(openMenuSelector);
const closeMenu = document.querySelector(closeMenuSelector);
const contentMenu = document.querySelector(contentMenuSelector);
const header = document.querySelector(headerSelector);

const stickyOffset = 300;

openMenu.addEventListener('click', () => {
    contentMenu.classList.toggle(activeClass);
    document.body.classList.toggle('menu-open');
    header.classList.toggle('menu-open');
})
closeMenu.addEventListener('click', () => {
    contentMenu.classList.toggle(activeClass);
    document.body.classList.toggle('menu-open');
    header.classList.toggle('menu-open');
})


function _handleSticky(element) {

    let sticky = element;


    let lastScrollTop = 0;

    document.addEventListener('scroll', () => {

        let st = window.pageYOffset || document.documentElement.scrollTop;

        if (st > sticky.clientHeight + stickyOffset) {
            document.body.classList.add('header-is-sticky');


            sticky.classList.add('sticky-up');
            if (st > lastScrollTop) {
                if (!sticky.classList.contains('scroll--down')) {
                    document.body.classList.add('scroll--down');
                    document.body.classList.remove('scroll--up');
                    sticky.classList.add('scroll--down');
                    sticky.classList.remove('scroll--up');
                   // document.body.style.paddingTop = sticky.clientHeight + "px";
                    setTimeout(() => {
                        sticky.classList.add('scroll');
                    }, 50);

                }
            } else {
                if (!sticky.classList.contains('scroll--up')) {
                    document.body.classList.add('scroll--up');
                    document.body.classList.remove('scroll--down');
                    sticky.classList.add('scroll--up');
                    sticky.classList.remove('scroll--down');
                }
            }

        }

        if (st < 2) {
            document.body.style.paddingTop = 0;

            sticky.classList.remove('sticky-up');
            sticky.classList.remove('scroll--up');
            sticky.classList.remove('scroll');
            document.body.classList.remove('scroll--up');


            document.body.classList.remove('header-is-sticky');

        }

        lastScrollTop = st <= 0 ? 0 : st;

    });
}

_handleSticky(header);