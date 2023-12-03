// global variables
var stripe = null;
var cardElement = null;

const stripePublicKey = document.getElementById("stripe-public-key").value;

let emailInput = document.getElementById("user-email");
let phoneInput = document.getElementById("user-name");
let ready;

if (emailInput.value.length == 0 || phoneInput.value.length == 0) {
  $("pay-money").attr("disabled", "true");
  document.getElementById("pay-money").style.filter = "grayscale(100%)";
  document.getElementById("pay-money").style.backgroundColor = "#666";
  document.getElementById("pay-money").style.borderColor = "#666";
  document.getElementById("pay-money").style.color = "#aaa";
  document.getElementById("pay-money").style.padding = "10px";
  ready = 0;
}

$("#user-email").bind("input propertychange", function () {
  if (emailInput.value.length == 0 || phoneInput.value.length == 0) {
    $("pay-money").attr("disabled", "true");
    document.getElementById("pay-money").style.filter = "grayscale(100%)";
    document.getElementById("pay-money").style.backgroundColor = "#666";
    document.getElementById("pay-money").style.borderColor = "#666";
    document.getElementById("pay-money").style.color = "#aaa";
    document.getElementById("pay-money").style.padding = "10px";
    ready = 0;
  }
});

$("#user-name").bind("input propertychange", function () {
  if (emailInput.value.length == 0 || phoneInput.value.length == 0) {
    $("pay-money").attr("disabled", "true");
    document.getElementById("pay-money").style.filter = "grayscale(100%)";
    document.getElementById("pay-money").style.backgroundColor = "#666";
    document.getElementById("pay-money").style.borderColor = "#666";
    document.getElementById("pay-money").style.color = "#aaa";
    document.getElementById("pay-money").style.padding = "10px";
    ready = 0;
  }
});

$("#user-email").bind("input propertychange", function () {
  if (emailInput.value.length <= 5 && phoneInput.value.length <= 5) {
    $("pay-money").attr("disabled", "true");
    document.getElementById("pay-money").style.filter = "grayscale(100%)";
    document.getElementById("pay-money").style.backgroundColor = "#666";
    document.getElementById("pay-money").style.borderColor = "#666";
    document.getElementById("pay-money").style.color = "#aaa";
    document.getElementById("pay-money").style.padding = "10px";
    ready = 0;
  }
  if (emailInput.value.length > 5 && phoneInput.value.length > 5) {
    $("pay-money").attr("disabled", "false");
    document.getElementById("pay-money").style.filter = "grayscale(0%)";
    document.getElementById("pay-money").style.backgroundColor = "#293c43";
    document.getElementById("pay-money").style.borderColor = "#293c43";
    document.getElementById("pay-money").style.color = "#ece5c9";
    document.getElementById("pay-money").style.padding = "12px";
    ready = 1;
  }
});

$("#user-name").bind("input propertychange", function () {
  if (emailInput.value.length <= 5 && phoneInput.value.length <= 5) {
    $("pay-money").attr("disabled", "true");
    document.getElementById("pay-money").style.filter = "grayscale(100%)";
    document.getElementById("pay-money").style.backgroundColor = "#666";
    document.getElementById("pay-money").style.borderColor = "#666";
    document.getElementById("pay-money").style.color = "#aaa";
    document.getElementById("pay-money").style.padding = "10px";
    ready = 0;
  }
  if (emailInput.value.length > 5 && phoneInput.value.length > 5) {
    $("pay-money").attr("disabled", "false");
    document.getElementById("pay-money").style.filter = "grayscale(0%)";
    document.getElementById("pay-money").style.backgroundColor = "#293c43";
    document.getElementById("pay-money").style.borderColor = "#293c43";
    document.getElementById("pay-money").style.color = "#ece5c9";
    document.getElementById("pay-money").style.padding = "12px";
    ready = 1;
  }
});
