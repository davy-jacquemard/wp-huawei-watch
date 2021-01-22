import Swiper, {Navigation, Pagination, Autoplay, Thumbs} from 'swiper';
import 'swiper/swiper.scss'

Swiper.use([Navigation, Pagination, Autoplay, Thumbs]);

const settings = {
    newsSliderSelector: '[js-slider-news]',
    instaSliderSelector: '[js-slider-insta]',
    
}

  /*--------------------------
 Slider last news
  --------------------------*/

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


  /*--------------------------
 Slider top instagram gamme
  --------------------------*/

 let instaSlider = new Swiper(settings.instaSliderSelector, {
    slidesPerView: 'auto',
    spaceBetween: 24,
    loop: true,
    loopedSlides: 10,
    freeMode: true,
    autoplay: {
      delay: 1,
      disableOnInteraction: false,
      reverserDirection: true,
    },
    speed: 15000,
    breakpoints: {
      960: {
        spaceBetween: 32,
      },
    }
  });
