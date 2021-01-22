import Swiper, {Navigation, Pagination, Thumbs} from 'swiper';
import 'swiper/swiper.scss'

Swiper.use([Navigation, Pagination, Thumbs]);

const settings = {
    newsSliderSelector: '[js-slider-news]',
    
}

let newsSlider = new Swiper(settings.newsSliderSelector, {
    slidesPerView: 'auto',
    spaceBetween: 16,

    pagination: {
        el: '[js-slider-news-pagination]',
        clickable: true,
    },
    breakpoints: {
        720: {
            spaceBetween: 24,
        },
        960: {
            spaceBetween: 32,
        },
        1280: {
            spaceBetween: 0,
        },
    }
});
if (document.body.clientWidth >= 1280) {
    newsSlider.params.spaceBetween = 0;
    newsSlider.params.noSwiping = true;
}