window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');

    if (window.scrollY > 0) {
        header.classList.add('fixed');
    } else {
        header.classList.remove('fixed');
    }
});


var swiper = new Swiper(".swiper-posts", {
    slidesPerView: 3,
    loop: true,
    threshold: 5,
    grabCursor: true,
    watchOverflow: true,
    autoHeight: true,
    spaceBetween: 30,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

    breakpoints: {
        1024: {
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        250: {
            slidesPerView: 1,
            spaceBetween: 0
        }
    }
  });

  