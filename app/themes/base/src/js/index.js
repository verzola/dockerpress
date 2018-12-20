import "../scss/main.scss";
import $ from "jquery";
import "@fortawesome/fontawesome-free/js/all.js";

$(document).ready(() => console.log("hello world"));

$(".hamburger").click(function() {
  $(this).toggleClass("is-active");
  $(".l-header__nav").toggleClass("l-header__nav--open");
});
