let feedbackRows = 2;
let feedbackSlidesPerView = 1;

if (window.innerWidth < 850 && window.innerHeight > 505) {
  feedbackRows = 1;
  feedbackSlidesPerView = 1;
} else if (window.innerWidth > 768 && window.innerHeight < 505) {
  feedbackRows = 1;
  feedbackSlidesPerView = 1;
}

let feedbackSwiper = new Swiper(".feedback-swiper", {
  slidesPerView: feedbackSlidesPerView,
  /*autoplay: {
        delay: 15000,
        disableOnInteraction: false,
  },*/
  grid: {
    rows: feedbackRows,
  },
  spaceBetween: 30,
  pagination: {
    el: ".swiper-feedback-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-feedback-next",
    prevEl: ".swiper-feedback-prev",
  },
});
