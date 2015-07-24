/*=======================  Top Navigation  =======================*/

$(document).ready(function() {
  var menu = $('#navigation-menu');
  var menuToggle = $('#js-mobile-menu');
  var signUp = $('.sign-up');

  $(menuToggle).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle(function(){
      if(menu.is(':hidden')) {
        menu.removeAttr('style');
      }
    });
  });

  // underline under the active nav item
  $(".nav .nav-link").click(function() {
    $(".nav .nav-link").each(function() {
      $(this).removeClass("active-nav-item");
    });
    $(this).addClass("active-nav-item");
    $(".nav .more").removeClass("active-nav-item");
  });

});

$('.menu-item-has-children').mouseenter(function(){
  var curSubmenu = $(this).find('> .sub-menu');
  curSubmenu.addClass('is-visible');
});

$('.menu-item-has-children').mouseleave(function(){
  var curSubmenu = $(this).find('> .sub-menu');
  curSubmenu.removeClass('is-visible');
});

/*-------------------  End of Top Navigation  --------------------*/

/*=======================  Mobile Navigation  =======================*/

$(document).ready(function(){
  $('.mobile-menu-trigger').on('click touchstart', function(e){
    $(this).toggleClass("active");
    $('.mobile-menu').toggleClass('is-visible');
    $('.mobile-menu-screen').toggleClass('is-visible');
    e.preventDefault();
  });

  $('.mobile-menu-screen').on('click touchstart', function(e){
    $('.mobile-menu').toggleClass('is-visible');
    $('.mobile-menu-screen').toggleClass('is-visible');
    e.preventDefault();
  });
});




$(document).ready(function(){
  $('.mobile-menu .menu-item-has-children')
    .prepend('<a href="#" class="open-submenu-icon"><i class="fa fa-plus"></i></a>');
    $('.mobile-menu .menu-item-has-children .open-submenu-icon').bind('click', function(){
      $(this).parent().find('> .sub-menu').slideToggle('100');
     // apply the toggle to the ul
      $(this).toggleClass('is-expanded');
      event.preventDefault();
    });
});

/*-------------------  End of Mobile Navigation  --------------------*/


// $(document).ready(function(){
//   // Create logo and Navigation Width
//   columns = 90;
//   gutter = 30;
//   containerWidth = 12 * columns + 11 - gutter;
//   gutterWidth = containerWidth / $('.header-inner').outerWidth();
//
//   logoWidthRaw = $('html').data('logo-width');
//
//   logoWidth = logoWidthRaw - gutterWidth*2;
//   navWidth = 100 - logoWidthRaw - gutterWidth*2;
//
//   $('.header-inner.nav-left .logo').css('width', logoWidth + '%');
//   $('.nav-left .desktop-navigation').css('width', navWidth + '%').css('margin-right', gutterWidth*2 + "%");
//
//   $('.header-inner.nav-right .logo').css('width', logoWidth + '%').css('margin-right', gutterWidth*2 + "%");
//   $('.nav-right .desktop-navigation').css('width', navWidth + '%');
//
//   $('.header-inner.logo_top .logo').css('width', logoWidth + '%');
//
// });
