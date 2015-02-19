// Add Match height to columns that have fill-right or fill-left

$(document).ready(function(){

  //$('.fill-left, .fill-right').parent().parent().siblings().children().children().attr("data-mh", "matcheight");
  //$('.fill-left, .fill-right').parent().parent().attr("data-mh", "matcheight");

  $('.parallax').attr("data-stellar-background-ratio", ".3");

});

$(function() {
  var $elements = $('.matchheight .panel-grid-cell .panel');
  $elements.children().matchHeight();
});


var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
jQuery(document).ready(function(){
    if( !isMobile.any() ){
        $(window).stellar({
          horizontalScrolling: false,
          //verticalOffset: 40,
          responsive: false,
          parallaxElements: false,
        });
    }
});

// Image Functions
jQuery(document).ready(function(){

  var noPaddingImages = $('.textwidget img.no-padding');

  var thePadding = noPaddingImages.parent().parent().css('padding-top');

  noPaddingImages.wrap('<span>');

  var noPaddingImagesWrapper = noPaddingImages.parent();

  noPaddingImagesWrapper
    .css('display', "block")
    .css('margin-top', "-"+thePadding)
    .css('margin-left', "-"+thePadding)
    .css('margin-right', "-"+thePadding);

});
