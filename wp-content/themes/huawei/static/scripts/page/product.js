const backgroundSelector = '[js-bg-color]';
const background = document.querySelector(backgroundSelector);

let calcImageMargin = () => {
    const imgContainerSelector = '[js-main-image]';

    const imgContainer = document.querySelector(imgContainerSelector);

    if (window.innerWidth < 960) {
        background.style.width = 100 + '%';
        let imgHeight = imgContainer.clientHeight;
        let imgTop = imgContainer.getBoundingClientRect().top;
        var bgHeight = imgHeight/2 + imgTop;
        background.style.height = bgHeight + 'px';
    } else {
        background.style.height = 100 + '%';
        let imgWidth = imgContainer.clientWidth;
        let imgLeft = imgContainer.getBoundingClientRect().left;
        var bgWidth = imgWidth/2 + imgLeft;
        background.style.width = bgWidth + 'px';

    }
}

calcImageMargin();
window.onresize = calcImageMargin;

let gestColor = () => {


    const colorOptionsSelector = '[js-color-choice]';
    const activeClass = 'active';


    const colorOptions = document.querySelectorAll(colorOptionsSelector);

    colorOptions.forEach((color) => {
        color.addEventListener('click', () => {
            const activeColor = document.querySelector('.color.active');
            if (!color.classList.contains(activeClass)) {
                activeColor.classList.remove(activeClass)
                color.classList.add(activeClass)
                background.style.backgroundColor = color.style.backgroundColor;
            }
        })
    })
}
gestColor();