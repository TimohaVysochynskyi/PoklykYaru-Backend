$(document).ready(function () {
  $("#create-new-zbir-btn").click(function () {
    document.querySelector("#create-new-zbir-wrapper").style.visibility =
      "unset";
  });
  $("#create-new-zbir__close").click(function () {
    document.querySelector("#create-new-zbir-wrapper").style.visibility =
      "hidden";
  });
});
