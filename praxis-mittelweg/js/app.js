var $grid;
$(document).ready( function() {
  $(document).foundation();
  $grid = $('.grid').masonry({
	itemSelector: '.grid-item',
	columnWidth: 232
  });

});
$( ".hasSubMenu" ).click(function() {
  $(this).siblings().toggle( "fast", function() {
	// Animation complete.
	$grid.masonry('layout');
  });
  $(this).parent().toggleClass('active');
  
});
jQuery(function($){
		 $( '.menu-btn' ).click(function(){
			$('.responsive-menu').toggleClass('expand');
		 })
	});
if (window.matchMedia) {
	var mq = window.matchMedia ("(max-width:768px)");
	window.addEventListener ('resize',changed,true);
}	

function changed(){
	$grid.masonry('layout');
}
