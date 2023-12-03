new WOW().init(); //Element loading animation

if (window.innerWidth > 758 && window.innerHeight > 505) {
  $(".whoarewe").hover(
    function () {
      let leftProperty = document.querySelector(".whoarewe").offsetWidth - 350;
      document.querySelector("#whoarewe-img").style.left = leftProperty + "px";
      $("#whoarewe-title").fadeOut(0);
      $("#whoarewe-text").fadeIn(0);
    },
    function () {
      document.querySelector("#whoarewe-img").style.left = "0px";
      $("#whoarewe-text").fadeOut(0);
      $("#whoarewe-title").fadeIn(0);
    }
  );
  $(".whatarewedoing").hover(
    function () {
      let rightProperty =
        document.querySelector(".whatarewedoing").offsetWidth - 350;
      document.querySelector("#whatarewedoing-img").style.right =
        rightProperty + "px";
      $("#whatarewedoing-title").fadeOut(0);
      $("#whatarewedoing-text").fadeIn(0);
    },
    function () {
      document.querySelector("#whatarewedoing-img").style.right = "0px";
      $("#whatarewedoing-text").fadeOut(0);
      $("#whatarewedoing-title").fadeIn(0);
    }
  );
}

function whoAreWe() {
  if (window.screen.width < 968) {
    $("#whoarewe-title").fadeOut("slow");
    $("#whoarewe-text").fadeIn("slow");
  }
}
function whatAreWeDoing() {
  if (window.screen.width < 968) {
    $("#whatarewedoing-title").fadeOut("slow");
    $("#whatarewedoing-text").fadeIn("slow");
  }
}
function showBorder() {
  document.getElementById("aboutusheader").style.borderColor = "#293C43";
  document.getElementById("aboutusheader").style.borderBottom =
    "2px solid #293C43";
}
function hideBorder() {
  document.getElementById("aboutusheader").style.borderColor =
    "rgba(0, 0, 0, 0)";
}
function aboutUsHeader() {
  if (window.screen.width > 968) {
    if (document.getElementById("aboutusheader2").style.display == "block") {
      document.getElementById("aboutusheader").style.borderRadius = "24.5px";
      document.getElementById("aboutusheader").style.borderColor =
        "rgba(0, 0, 0, 0)";
      document.getElementById("aboutusheader2").style.display = "none";
      document.getElementById("aboutusheader3").style.display = "none";
    } else {
      document.getElementById("aboutusheader").style.borderRadius =
        "20px 20px 0px 0px";
      document.getElementById("aboutusheader").style.borderBottom = "none";
      document.getElementById("aboutusheader").style.borderColor = "#293C43";
      document.getElementById("aboutusheader2").style.display = "block";
      document.getElementById("aboutusheader3").style.display = "block";
    }
  }
}
function eventHeader() {
  if (window.screen.width > 968) {
    if (document.getElementById("eventheader2").style.display == "block") {
      document.getElementById("eventheader").style.borderRadius = "24.5px";
      document.getElementById("eventheader").style.borderColor =
        "rgba(0, 0, 0, 0)";
      document.getElementById("eventheader2").style.display = "none";
      document.getElementById("eventheader3").style.display = "none";
      document.getElementById("eventheader4").style.display = "none";
      document.getElementById("eventheader5").style.display = "none";
      document.getElementById("eventheader6").style.display = "none";
      document.getElementById("eventheader7").style.display = "none";
    } else {
      document.getElementById("eventheader").style.borderRadius =
        "20px 20px 0px 0px";
      document.getElementById("eventheader").style.borderBottom = "none";
      document.getElementById("eventheader").style.borderColor = "#293C43";
      document.getElementById("eventheader2").style.display = "block";
      document.getElementById("eventheader3").style.display = "block";
      document.getElementById("eventheader4").style.display = "block";
      document.getElementById("eventheader5").style.display = "block";
      document.getElementById("eventheader6").style.display = "block";
      document.getElementById("eventheader7").style.display = "block";
    }
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const deadline = new Date(2024, 6, 18);

  let timerId = null;

  function declensionNum(num, words) {
    return words[
      num % 100 > 4 && num % 100 < 20
        ? 2
        : [2, 0, 1, 1, 1, 2][num % 10 < 5 ? num % 10 : 5]
    ];
  }

  function countdownTimer() {
    const diff = deadline - new Date();
    if (diff <= 0) {
      clearInterval(timerId);
    }
    const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
    const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
    const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
    $days.textContent = days < 10 ? "0" + days : days;
    $hours.textContent = hours < 10 ? "0" + hours : hours;
    $minutes.textContent = minutes < 10 ? "0" + minutes : minutes;
  }

  const $days = document.querySelector("#days");
  const $hours = document.querySelector("#hours");
  const $minutes = document.querySelector("#minutes");

  countdownTimer();

  timerId = setInterval(countdownTimer, 1000);
});

let eventListShown = false;
function showEventList() {
  if (eventListShown == false) {
    $(".event__list-mobile").slideDown(300);
    $(".event__list-mobile").show(300);
    document.getElementById("event__list-arrow").style.transform =
      "rotateZ(180deg)";
    document.getElementById("eventListButton").style.border =
      "2px solid #1d282c";
    document.getElementById("eventListButton").style.borderRadius =
      "16px 16px 0px 0px";
    eventListShown = true;
  } else {
    document.getElementById("event__list-arrow").style.transform =
      "rotateZ(0deg)";
    $(".event__list-mobile").slideUp(300);
    $(".event__list-mobile").hide(300);
    document.getElementById("eventListButton").style.border =
      "2px solid #293c43af";
    document.getElementById("eventListButton").style.borderRadius = "16px";
    eventListShown = false;
  }
}

function addProduct() {
  $("#add-product").fadeIn(500);
  document.getElementById("add-product").style.display = "flex";
}
function deleteProduct() {
  $("#delete-product").fadeIn(500);
  document.getElementById("delete-product").style.display = "flex";
}

function closePopUp() {
  $("#add-product").fadeOut("fast");
  $("#delete-product").fadeOut("fast");
  $("#edit-product").fadeOut("fast");
  document.getElementById("product-coop-cross").style.transform =
    "rotateZ(180deg)";
}
// showNew();
// function showNew() {
//     $('#new').fadeIn("slow");
//     $('#clothes').fadeOut("fast");
//     $('#stickers').fadeOut("fast");
//     $('#books').fadeOut("fast");
//     $('#flags').fadeOut("fast");
//     document.querySelector("#merch-page-title").innerText = "новинки";
// }
// function showClothes() {
//     $('#new').fadeOut("fast");
//     $('#clothes').fadeIn("slow");
//     $('#stickers').fadeOut("fast");
//     $('#books').fadeOut("fast");
//     $('#flags').fadeOut("fast");
//     document.querySelector("#merch-page-title").innerText = "одяг";
// }
// function showStickers() {
//     $('#new').fadeOut("fast");
//     $('#clothes').fadeOut("fast");
//     $('#stickers').fadeIn("slow");
//     $('#books').fadeOut("fast");
//     $('#flags').fadeOut("fast");
//     document.querySelector("#merch-page-title").innerText = "стікери";
// }
// function showBooks() {
//     $('#new').fadeOut("fast");
//     $('#clothes').fadeOut("fast");
//     $('#stickers').fadeOut("fast");
//     $('#books').fadeIn("slow");
//     $('#flags').fadeOut("fast");
//     document.querySelector("#merch-page-title").innerText = "книги";
// }
// function showFlags() {
//     $('#new').fadeOut("fast");
//     $('#clothes').fadeOut("fast");
//     $('#stickers').fadeOut("fast");
//     $('#books').fadeOut("fast");
//     $('#flags').fadeIn("slow");
//     document.querySelector("#merch-page-title").innerText = "прапори";
// }
