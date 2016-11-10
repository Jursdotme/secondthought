jQuery( document ).ready( function( $ ) {
  /* Clear the initial password suggestion from WordPress */
  $( '#resetpassform input[name=\'pass1\']' ).attr( 'data-pw', '' )
  $('#resetpassform #pass1').val('');
  $('#resetpassform #pass1-text').val('');
  /* Change button text */
  $('#resetpassform #wp-submit').val(objectL10n.buttonLabel);
});
