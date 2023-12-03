let zmiRows = 2;
let zmiSlidesPerView = 2;

if (window.innerWidth < 850 && window.innerHeight > 505) {
  zmiRows = 2;
  zmiSlidesPerView = 1;
} else if (window.innerWidth > 768 && window.innerHeight < 505) {
  zmiRows = 1;
  zmiSlidesPerView = 1;
}

let zmiSwiper = new Swiper(".zmi-swiper", {
  slidesPerView: zmiSlidesPerView,
  autoplay: {
    delay: 10000,
    disableOnInteraction: false,
  },
  grid: {
    rows: zmiRows,
  },
  spaceBetween: 30,
  pagination: {
    el: ".swiper-zmi-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-zmi-next",
    prevEl: ".swiper-zmi-prev",
  },
});
