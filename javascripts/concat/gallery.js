$(document).ready(function() {
  $(".fancybox").fancybox({
    padding : 0
  });
});

$(document).ready(function() {
  $(".gallery-icon a").attr('rel', 'gallery').fancybox({
    padding : 0,
    arrows: true,
    closeBtn: true,
  });

  $('.gallery br').remove();

});
