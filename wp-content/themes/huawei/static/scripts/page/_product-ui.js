const backgroundSelector = '[js-bg-color]';
const background = document.querySelector(backgroundSelector);

let calcImageMargin = () => {
    const imgContainerSelector = '[js-main-image-container]';

    const imgContainer = document.querySelector(imgContainerSelector);

    if (window.innerWidth < 960) {
        background.style.width = 100 + '%';
        let imgHeight = imgContainer.offsetHeight + 64;
        let imgTop = imgContainer.getBoundingClientRect().top - 32;
        console.log(imgHeight, imgTop);
        var bgHeight = imgHeight / 2 + imgTop - 72;
        background.style.height = bgHeight + 'px';
    } else {
        background.style.height = 100 + '%';
        let imgWidth = imgContainer.clientWidth;
        let imgLeft = imgContainer.getBoundingClientRect().left;
        var bgWidth = imgWidth / 2 + imgLeft;
        background.style.width = bgWidth + 'px';

    }
}
calcImageMargin();

//window.onresize = calcImageMargin;

let gestColor = () => {

    const colorOptionsSelector = '[js-color-choice]';
    const colorOptions = document.querySelectorAll(colorOptionsSelector);

    colorOptions.forEach((color) => {
        color.addEventListener('click', () => {
            const activeColor = document.querySelector('.color.is-active');
            background.style.backgroundColor = color.style.backgroundColor;
        
        })
    })
}
gestColor();