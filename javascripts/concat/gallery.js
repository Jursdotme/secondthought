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

  $('.gallery').each( function(){

    $this = $(this);

    element1 = $this.find('.gallery-item:eq(0)');
    element2 = $this.find('.gallery-item:eq(1)');
    element1Width = element1.outerWidth();

    margin = element2.position().left-(element1.position().left + element1Width);

    $this.find('.gallery-item').css('margin-bottom', margin);
  });

  $('dl.gallery-item').matchHeight();

  $('.gallery br').remove();

});
