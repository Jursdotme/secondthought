// $('.owl-carousel').owlCarousel({
//     items:1,
//     lazyLoad:true,
//     loop:true,
//     margin:0
// });



$(document).ready(function(){
  $('.frontpage-slider').slick({
    // Find options here: http://kenwheeler.github.io/slick/
  });
});

$(document).ready(function(){
  $('iframe[src*="youtube"]').wrap( "<div class='thing-with-video'></div>" );
  $('iframe[src*="vimeo"]').wrap( "<div class='thing-with-video'></div>" );
  // Target your .container, .wrapper, .post, etc.
  $(".thing-with-video").fitVids();
});
