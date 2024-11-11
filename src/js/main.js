window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');

    if (window.scrollY > 0) {
        header.classList.add('fixed');
    } else {
        header.classList.remove('fixed');
    }
});

var swiper;

function initSwiper() {
    const windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    if (windowWidth < 1024) {
        swiper = new Swiper(".swiper-services", {
            slidesPerView: 3,
            loop: true,
            threshold: 5,
            grabCursor: true,
            watchOverflow: true,
            spaceBetween: 30,
            //autoHeight: true,

            navigation: {
                nextEl: ".swiper-services-button--next",
                prevEl: ".swiper-services-button--prev",
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                //dynamicBullets: true,
            },

            centeredSlides: true, // центрируем слайд

            breakpoints: {
                250: {
                    slidesPerView: 1.3,
                    spaceBetween: 24,
                    centeredSlides: true,
                },
                640: {
                    slidesPerView: 2.3,
                    spaceBetween: 24,
                    centeredSlides: false
                },
                930: {
                    slidesPerView: 3.3,
                    spaceBetween: 24,
                    centeredSlides: false
                },
            }
        });

    }
}

function sliderArrow() {
    const portfolioSlider = document.querySelectorAll('.swiper-posts');

    if (portfolioSlider.length) {
        portfolioSlider.forEach((element) => {

            const twentyTwentyWrapper = element.querySelector('.posts-img-wrapper');
            const arrowWrapper = element.querySelectorAll('.slider-arrow-wrapper');
            const arrowWrapperHeight = twentyTwentyWrapper.clientHeight;

            arrowWrapper.forEach((element) => {
                element.style.setProperty('height', arrowWrapperHeight + 'px')
            })
        });
    }
}

function handleResize() {
    sliderArrow();
    if (swiper) {
        swiper.destroy();
    }
    initSwiper();
}

initSwiper();
sliderArrow();

window.addEventListener('resize', handleResize);



const btnNav = document.querySelector('.btn-nav');

if (btnNav) {

    btnNav.addEventListener("click", function () {

        const body = document.querySelector('body');
        const nav = document.querySelector('.mob-panel');

        if (btnNav.classList.contains('btn-nav--open')) {
            btnNav.classList.remove('btn-nav--open');
            nav.classList.remove('open');
            body.classList.remove('over');
        } else {
            btnNav.classList.add('btn-nav--open');
            nav.classList.add('open');
            body.classList.add('over');
        }

    });
}