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

// Column backgroud opacity
$(document).ready(function(){
  var transparentElement = $('[class*=transparency-]');

  transparentElement.each(function(){

    var bgColor = $(this).css('background-color');

    var transparentclass = $(this).attr('class');

    var classPosition = parseInt(transparentclass.search("transparency"), 10);
    var transparentAmount = transparentclass.substr(classPosition ,15).slice(-2);

    var result = bgColor.replace(')', ', '+(transparentAmount/100)+')').replace('rgb', 'rgba');

    $(this).css('background-color', result);

  });
});

// Row backgroud opacity
$(document).ready(function(){
  var transparentElement = $('[class*=background-]');

  transparentElement.each(function(){

    var bgColor = $(this).css('background-color');

    var transparentclass = $(this).attr('class');

    var classPosition = parseInt(transparentclass.search(" background-"), 10);

    var transparentAmount = transparentclass.substr(classPosition ,14).slice(-2);

    var result = bgColor.replace(')', ', '+(transparentAmount/100)+')').replace('rgb', 'rgba');

    $(this).css('background-color', result);

  });
});

// Row background-size: Contain
$(document).ready(function(){
  $('.background-contain').css('background-size', 'contain').css('background-repeat', 'no-repeat').css('background-position', 'center');
});

// Column border radius
$(document).ready(function(){
  var transparentElement = $('[class*=radius-]');

  transparentElement.each(function(){

    var borderradiusclass = $(this).attr('class');

    var classPosition = parseInt(borderradiusclass.search("radius-"), 10);

    var radius = borderradiusclass.substr(classPosition ,9).slice(-2);
    console.log(radius)
    $(this).css('border-radius', radius+'px');

  });
});




$(document).ready(function(){
  var fullHeighElement = $('[class*=full-height-minus-]');

  fullHeighElement.each(function(){

    var borderradiusclass = $(this).attr('class');

    var classPosition = parseInt(borderradiusclass.search("full-height-minus-"), 10);

    var radius = borderradiusclass.substr(classPosition ,20).slice(-2);
    console.log(radius)

    $(this).Fillerup({
      subtract: radius,
      minHeight: 500,
      maxHeight: 0
    });

  });
});
