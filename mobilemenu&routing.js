$(document).ready(function () {
  $(".ul_submenu").hide();
  $("ul a.submenu-a").click(function (e) {
    e.preventDefault();
    $(this).closest("li").find("[class^='ul_submenu']").slideToggle();
    $("i.arrow-down").toggleClass("fa-caret-up");
  });
  $(".header-img img").click(function () {
    window.location.href = "index.html";
  });
});
