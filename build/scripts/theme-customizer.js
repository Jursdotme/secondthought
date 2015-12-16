(function( $ ) {
  $(function() {
    // Header Background-color
    wp.customize( 'header_color', function( value ) {
      value.bind( function( to ) {
        $( '.header' ).css( 'background-color', to);
      });
    });

    // Header Background-color
    wp.customize( 'navigation_color', function( value ) {
      value.bind( function( to ) {
        $( '.nav_bottom' ).css( 'background-color', to);
      });
    });

    /*--------------------------------------------*
     * Main Navigation
    /*--------------------------------------------*/

      // Navigation Item Background color
      wp.customize( 'navigation_item_bg_color', function( value ) {
        value.bind( function( to ) {
          $( '.desktop-navigation #navigation-menu > li > a' ).css( 'background-color', to);
        });
      });

      // Navigation Item color
      wp.customize( 'navigation_item_color', function( value ) {
        value.bind( function( to ) {
          $( '.desktop-navigation #navigation-menu > li > a' ).css( 'color', to);
        });
      });

      // Navigation Item font size
      wp.customize( 'navigation_item_fontsize', function( value ) {
        value.bind( function( to ) {
          $( '.desktop-navigation #navigation-menu > li > a' ).css( 'font-size', to+'px');
        });
      });

      // Navigation Button Spacing
      wp.customize( 'navigation_item_margin', function( value ) {
        value.bind( function( to ) {
          $( '.desktop-navigation #navigation-menu > li' ).css( 'margin-right', to+'px');
          $( '.desktop-navigation #navigation-menu > li:last-child' ).css( 'margin-right', '0px');
        });
      });

      // Navigation Button Spacing
      wp.customize( 'navigation_item_padding_top_bottom', function( value ) {
        value.bind( function( to ) {
          $( '.desktop-navigation #navigation-menu > li > a' ).css( 'padding-top', to+'px');
          $( '.desktop-navigation #navigation-menu > li > a' ).css( 'padding-bottom', to+'px');
        });
      });

      // Navigation Button Spacing
      wp.customize( 'navigation_item_padding_left_right', function( value ) {
        value.bind( function( to ) {
          $( '.desktop-navigation #navigation-menu > li > a' ).css( 'padding-left', to+'px');
          $( '.desktop-navigation #navigation-menu > li > a' ).css( 'padding-right', to+'px');
        });
      });





    // END Main Navigation

    // Logo Width
    wp.customize( 'logo_width', function( value ) {
      value.bind( function( to ) {

        columns = 90;
        gutter = 30;
        containerWidth = 12 * columns + 11 - gutter;
        gutterWidth = containerWidth / $('.header-inner').outerWidth();

        logoWidth = to - gutterWidth*2;
        navWidth = 100 - to - gutterWidth*2;

        $('.header-inner .logo').css('width', logoWidth + '%').css('margin-right', gutterWidth*2 + "%");
        $('.desktop-navigation').css('width', navWidth + '%');
      });
    });

    // Menu margin-top
    wp.customize( 'header_height', function( value ) {
      value.bind( function( to ) {
        $( 'header.header' ).css( 'min-height', to + "px");
      });
    });

    wp.customize( 'navigation_height', function( value ) {
      value.bind( function( to ) {
        $( '.nav_bottom' ).css( 'min-height', to + "px");
      });
    });

    // Logo margin-top
    wp.customize( 'logo_vertical_position', function( value ) {
      value.bind( function( to ) {
        $( '.header-inner .logo' ).css( 'padding-top', to + "px");
      });
    });

    // Menu margin-top
    wp.customize( 'navigation_vertical_position', function( value ) {
      value.bind( function( to ) {
        $( '.desktop-navigation' ).css( 'padding-top', to + "px");
      });
    });

    // Menu item margin
    wp.customize( 'menu_item_margin', function( value ) {
      value.bind( function( to ) {
        $( '.desktop-navigation #navigation-menu > li' ).css( 'margin-right', to + "px");
        $( '.desktop-navigation #navigation-menu > li:last-child' ).css( 'margin-right', "0");
      });
    });

    // Menu item padding height
    wp.customize( 'menu_padding_height', function( value ) {
      value.bind( function( to ) {
        $( '.desktop-navigation #navigation-menu > li > a' ).css( 'padding-top', to + "px").css('padding-bottom', to +'px');

      });
    });
    // Menu item padding width
    wp.customize( 'menu_padding_width', function( value ) {
      value.bind( function( to ) {
        $( '.desktop-navigation #navigation-menu > li > a' ).css( 'padding-left', to + "px").css('padding-right', to +'px');
      });
    });


    /////////////////////////
    // FOOTER

    // Footer Text color
    wp.customize( 'footer_text_color', function( value ) {
      value.bind( function( to ) {
        $( '.footer .footer-address' ).css( 'color', to);
      });
    });

    wp.customize( 'footer_text_color_link', function( value ) {
      value.bind( function( to ) {
        $( '.footer .footer-address a' ).css( 'color', to);
      });
    });


    // Footer Background color
    wp.customize( 'footer_bg_color', function( value ) {
      value.bind( function( to ) {
        $( '.footer-container' ).css( 'background-color', to);
      });
    });

    // Footer margin-top
    wp.customize( 'footer_margin_top', function( value ) {
      value.bind( function( to ) {
        $( 'footer.footer' ).css( 'padding-top', to+"px");
      });
    });

    // Footer margin-bottom
    wp.customize( 'footer_margin_bottom', function( value ) {
      value.bind( function( to ) {
        $( 'footer.footer' ).css( 'padding-bottom', to+"px");
      });
    });

    // Footer font size
    wp.customize( 'footer_text_size', function( value ) {
      value.bind( function( to ) {
        $( '.footer .footer-address' ).css( 'font-size', to+"px");
      });
    });

  });
}( jQuery ));
