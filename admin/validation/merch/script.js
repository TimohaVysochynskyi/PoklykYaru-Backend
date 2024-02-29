$(document).ready(function () {
  function load_merch() {
    $("#merch-content__list").load("./validation/merch/get_merch.php");
  }
  load_merch();
  $("#create-new-merch-btn").click(function () {
    document.querySelector("#create-new-merch-wrapper").style.visibility =
      "unset";
  });
  $("#create-new-merch__close").click(function () {
    document.querySelector("#create-new-merch-wrapper").style.visibility =
      "hidden";
  });
});
