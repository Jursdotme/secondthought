(function( $ ) {
  $(function() {
    // H1
    wp.customize( 'h1_font_size', function( value ) {
      value.bind( function( to ) {
        $( 'h1' ).css( 'font-size', to + 'px');
      });
    });
    wp.customize( 'h1_line_height', function( value ) {
      value.bind( function( to ) {
        $( 'h1' ).css( 'line-height', to );
      });
    });
    wp.customize( 'h1_spacing', function( value ) {
      value.bind( function( to ) {
        $( 'h1' ).css( 'margin-bottom', to + 'px');
      });
    });

  });
}( jQuery ));
