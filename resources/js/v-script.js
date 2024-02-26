import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';

document.addEventListener('DOMContentLoaded', function(){

    let nlIbexSlBox = document.querySelectorAll('.ibex-sl-box');
    if(nlIbexSlBox.length > 0){
        nlIbexSlBox.forEach(slbox=>{
            let ibexSl = slbox.querySelector('.ibex-sl');
            let ibexSlButtonPrev = slbox.querySelector('.swiper-button-prev');
            let ibexSlButtonNext = slbox.querySelector('.swiper-button-next');

            console.log()
            let swiper = new Swiper(ibexSl, {
                // Optional parameters
                loop: true,
                slidesPerView: 4,
                spaceBetween: 0,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                // Navigation arrows
                navigation: {
                  nextEl: ibexSlButtonNext,
                  prevEl: ibexSlButtonPrev,
                },
                breakpoints: {
                    310: {
                        spaceBetween: 0,
                        slidesPerView: 1,
                    },
                    440: {
                        spaceBetween: 0,
                        slidesPerView: 2,
                    },
                    830: {
                        spaceBetween: 0,
                        slidesPerView: 3,
                    },
                    1480:{
                        slidesPerView: 4,
                        spaceBetween: 0,
                    }
                }

              });
        });
    }

    let borgerBtn = document.querySelector('.burger-btn');
    let mobMenu = document.querySelector('.sb_body');
    if(borgerBtn && mobMenu){
        borgerBtn.addEventListener('click', function(e){
            e.preventDefault();
            this.classList.toggle('active');
            mobMenu.classList.toggle('show');
        });
    }

});
