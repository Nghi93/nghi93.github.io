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

if (window.matchMedia) {
	var mq = window.matchMedia ("(max-width:768px)");
	window.addEventListener ('resize',changed,true);
}	

function changed(e){
	$grid.masonry('layout');
	console.log(viewport());
}

function viewport() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}