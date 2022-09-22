$(".page-id-8455 .simple-links-list li").each(function(i) {
    $(this).find("a").prepend("<span class='number'>" + ++i + "</span>");
});

if (localStorage.getItem("cookieSeen") != "shown") {
  $("#cookie_banner").delay(2000).fadeIn();
  localStorage.setItem("cookieSeen", "shown")
};
$(".close_cookie").click(function() {
  $("#cookie_banner").fadeOut();
})