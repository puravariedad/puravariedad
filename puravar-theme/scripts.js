$("#need li").each(function(i) {
    $(this).find("[data-lightbox='post-image']").prepend("<span class='tag_number tag_linkgrid'>" + ++i + "</span>");
});

$("a").each(function(){
    if($(this).hasClass('noLightbox')) {
        $(this).removeAttr("data-lightbox");
    } 
});

if (localStorage.getItem("cookieSeen") != "shown") {
  $("#cookie_banner").delay(2000).fadeIn();
  localStorage.setItem("cookieSeen", "shown")
};

$(".close_cookie").click(function() {
  $("#cookie_banner").fadeOut();
});

$("[data-filtertag]").click(function() {
  	var $filtro = $(this).data("filtertag");
	$("[data-tag]").addClass("d-none");
	$("[data-filtertag]").removeClass("d-selected");
	$("[data-filtertag='" + $filtro + "']").addClass("d-selected");
	$("[data-tag='" + $filtro + "']").removeClass("d-none");
});

$("[data-clearfilter]").click(function() {
	$("[data-tag]").removeClass("d-none");
	$("[data-filtertag]").removeClass("d-selected");
});

$("[data-action='hover_map']").mouseleave(function() {
	$("[data-map-target]").removeClass("map_hovered");
});
$("[data-action='hover_map']").mouseover(function() {
  	var $link = $(this).data("link");
	$("[data-map-target]").removeClass("map_hovered");
	$("[data-map-target='" + $link + "']").addClass("map_hovered");
});