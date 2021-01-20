const slider = document.querySelector('[js-home-vertical-slider-w]');
const items = document.querySelectorAll('[js-home-vertical-slider-item]');
const dots = document.querySelectorAll('[js-home-vertical-slider-dot]');
const texts = document.querySelectorAll('[js-home-vertical-slider-text]');


const activeClass = 'is-active'



window.addEventListener('scroll', () => {

     items.forEach((item, index) => {

        let itemPosTop = item.getBoundingClientRect().top;
        let itemHeight = item.offsetHeight;

        if(itemPosTop - window.innerHeight / 2 < 0 && itemPosTop - window.innerHeight / 2 > -itemHeight) {
            dots.forEach((dot) => {
                if(dot.classList.contains(activeClass)) {
                    dot.classList.remove(activeClass)
                }
            })
            dots[index].classList.add(activeClass)

            texts.forEach((text) => {
                if(text.classList.contains(activeClass)) {
                    text.classList.remove(activeClass)
                }
            })
            texts[index].classList.add(activeClass)


            
        }
    }) 
})