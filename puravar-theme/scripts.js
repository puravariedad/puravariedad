$(".page-id-8455 .simple-links-list li").each(function(i) {
    $(this).find("a").prepend("<span class='number'>" + ++i + "</span>");
});