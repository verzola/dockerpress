import "../scss/main.scss";
import "@fortawesome/fontawesome-free/js/all.js";
import $ from "jquery";

$(".js-hamburger").click(function() {
  $(this).toggleClass("is-active");
  $(".c-offcanvas").toggleClass("c-offcanvas--open");
});
