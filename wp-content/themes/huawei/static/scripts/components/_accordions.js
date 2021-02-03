const selectorContent = "[js-accordion-content]";
const selectorTitle = "[js-accordion-title]";
const toggleClass = "is-open";
const transitionCSSTime = 250;
const accordions = document.querySelectorAll('[js-accordion]');
const canOpenMultiple = false;


function close(current = null) {
    accordions.forEach((accordion) => {
        if ((current !== accordion && !canOpenMultiple) || (current === accordion && canOpenMultiple)) {
            accordion.classList.remove(toggleClass);

            const content = accordion.querySelector(selectorContent);
            content.style.height = `${content.scrollHeight}px`;
            //content.style.paddingBottom = `0`;

            setTimeout(() => {
                content.style.height = 0;
            }, 1);
        }
    });
}

function open(el) {

    if (el.classList.contains(toggleClass)) {
        close(canOpenMultiple ? el : null);
        return;
    }

    if (!canOpenMultiple) {
        close(el);
    }

    el.classList.add(toggleClass);

    const content = el.querySelector(selectorContent);
    content.style.height = `${content.scrollHeight}px`;
    //  content.style.paddingBottom = `16px`;

    setTimeout(() => {
        content.style.height = 'auto';
    }, transitionCSSTime);

}

accordions.forEach((accordion) => {
    // open(accordion);
    accordion.querySelector(selectorTitle).addEventListener('click', () => open(accordion));
});

