/*---------------------------
 Function that measures height of the browser and sets the header section with this height
----------------------------*/

(function($) {

$( document ).ready( function() {
	var clientHeight = $(window).height();
	$('#masthead').css('height', clientHeight);		
});

})( jQuery );