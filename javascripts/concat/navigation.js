/*=======================  Top Navigation  =======================*/

$(document).ready(function() {
  var menu = $('header .menu');
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

$('.page_item_has_children, .menu-item-has-children').mouseenter(function(){
  var curSubmenu = $(this).find('> .children, > .sub-menu');
  curSubmenu.addClass('is-visible');
});

$('.page_item_has_children, .menu-item-has-children').mouseleave(function(){
  var curSubmenu = $(this).find('> .children, > .sub-menu');
  curSubmenu.removeClass('is-visible');
});

/*-------------------  End of Top Navigation  --------------------*/

/*=======================  Mobile Navigation  =======================*/

$(document).ready(function(){
  $('.mobile-menu-trigger').on('click touchstart', function(e){
    $(this).toggleClass("active");
    $('.mobile-menu').toggleClass('is-visible');
    $('.js-menu-screen.menu-screen').toggleClass('is-visible');
    e.preventDefault();
  });

  $('.js-menu-screen.menu-screen').on('click touchstart', function(e){
    $('.mobile-menu').toggleClass('is-visible');
    $('.js-menu-screen.menu-screen').toggleClass('is-visible');
    e.preventDefault();
  });
});




$(document).ready(function(){
  $('.mobile-menu .menu-item-has-children')
    .prepend('<a href="#" class="open-submenu-icon"><i class="fa fa-chevron-down"></i></a>');
    $('.mobile-menu .menu-item-has-children .open-submenu-icon').bind('click', function(){
      $(this).parent().find('> .sub-menu').slideToggle('100');
     // apply the toggle to the ul
      $(this).toggleClass('is-expanded');
      event.preventDefault();
    });
});

/*-------------------  End of Mobile Navigation  --------------------*/
