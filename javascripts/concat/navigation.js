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

$('.menu-item-has-children > a').bind('click', function(){
  $(this).parent().find('> .sub-menu').toggleClass('visible');
 // apply the toggle to the ul
  $(this).toggleClass('is-expanded');
  event.preventDefault();
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



$('.mobile-menu .menu-item-has-children > a').bind('click', function(){
  $(this).parent().find('> .sub-menu').slideToggle('slow');
 // apply the toggle to the ul
  $(this).toggleClass('is-expanded');
  event.preventDefault();
});

/*-------------------  End of Mobile Navigation  --------------------*/
