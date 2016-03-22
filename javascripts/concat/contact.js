$(document).ready(function(){
  $('.wpcf7 .form-row').matchHeight();
});


$(document).ready(function(){
  $('iframe[src*="youtube"]').wrap( "<div class='thing-with-video'></div>" );
  $('iframe[src*="vimeo"]').wrap( "<div class='thing-with-video'></div>" );
  // Target your .container, .wrapper, .post, etc.
  $(".thing-with-video").fitVids();
});
