$(document).ready(function(){
  $('.frontpage-slider').slick({
    // Find options here: http://kenwheeler.github.io/slick/
  });
});

$(document).ready(function(){

  // Remove all empty <p> tags
  $('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length === 0)
        $this.remove();
  });

  // Responsive tables
  $('table').each(function(){

    var $this = $(this);
    var tableHeaders = [];

    $this.find('th').each( function(){
      tableHeaders.push( $(this).html() );
    });

    $this.find('tr').each(function(){
      $(this).find('td').each(function(index){
        if($(this).html()==="") {
           $(this).addClass('hidden');
        }
        $(this).attr('aria-label', tableHeaders[index] );
      });
    });

  });

});
