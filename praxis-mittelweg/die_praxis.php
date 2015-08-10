<link href="css/foundation.css" rel="stylesheet" type="text/css">
<style>
/* ---- grid ---- */

.grid {
  max-width: 928px;
  margin: 0px auto;
  margin-top: 30px;
}

/* clearfix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- grid-item ---- */

.grid-item {
  width: 232px;
  height: 168px;
  float: left;
  border: 1px solid white;
}



.grid-item168height {
  height: 168px !important;
}

.grid-item--width { width: 464px; }
.grid-item--height { height: 360px; }

/* ---- grid-item end ---- */

#einseins {
	background: url('bilder/wiedling_logo.jpg');
}

#einszwei {
	background: #F3E7DC;
}

#einsdrei {
	background: url('bilder/empfang_braun.jpg') #BFA190;
}

#einsvier {
	background: #F3E7DC;
}

#zweieins{
	background: url('bilder/stein_links_ganz.jpg');
}

#zweizwei{
	background: url('bilder/empfang_unscharf.jpg');
}

#zweidrei{
	background: url('bilder/empfang.jpg');
}

#dreieins{
	background: url('bilder/stein_unten_mitte.jpg');
}

#dreizwei{
	background: #7F555A;
}

#dreidrei{
	background: #C2A493;
}

.indent {
	margin-left: 70px;
	margin-top: 40px;
}

.indent2 {
	margin-left: 20px;
	margin-top: 60px;
}


.indent p, .indent2 p { 
	margin:0;
	font-size: 12px;
}

.indent .blank{
	margin: 5px;
}

a.top{
	margin-top:10px;
}

a.bottom{
	margin-top:135px;
}

a.right{
	margin-right: 15px;
	clear: right; !important; /* overriding foundations right */
}

a.left {
	margin-left: 15px;
	clear: left !important; /* overriding foundations left */
}

.menu2{
	height:auto;
	min-height:336px;
	height:auto !important;        /* for IE as it does not support min-height */
	height:336px;                   /* for IE as it does not support min-height */
}
.menu-btn div {
	position: absolute;
	left: 100%;
	top: 64%;
	padding-right: 8px;
	margin-top: -0.50em;
	line-height: 1.2;
	font-size: 18px;
	font-weight: 200;
	vertical-align: middle;
	z-index: 99;
}

.menu-btn span {
	display: block;
	width: 19px;
	height: 3px;
	margin: 4px 0;
	background: rgb(0,0,0);
	z-index: 99;
}

.responsive-menu{
	display: none;
}

.expand {
	display: block !important; 
}

</style>
<link href="bilder/style.css" rel="stylesheet" type="text/css">
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar show-for-medium">
      <section class="right-small">
        <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>
    </nav>
    <aside class="right-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Users</label></li>
        <li><a href="#">Hari Seldon</a></li>
        <li><a href="#">...</a></li>
      </ul>
    </aside>

    <section class="main-section">
<div class="grid violet">
  <div class="grid-sizer"></div>
  <div class="grid-item" id="einseins">
	<div class="indent">
		<p><strong>Dr. med.</strong></p>
		<p><strong>Kirsten Wiedling</strong></p>
		<p class="blank"></p>
		<p>Fach&auml;rztin f&uuml;r</p>
		<p>Gyn&auml;kologie</p>
		<p>und Geburtshilfe</p>
		<p class="blank"></p>
		<p>Naturheilverfahren</p>
	</div>
  </div>
  <div class="grid-item" id="einszwei">
    <div class="indent2 hide-for-small">
		<p>Mittelweg 123</p>
		<p>20148 Hamburg</p>
		<p class="blank"></p>
		<p>Tel 040 - 44 40 45</p>
		<p>Fax 040 - 44 99 90</p>
		<p class="blank"></p>
		<p><a href="mailto:e-mail@praxis-mittelweg.de" class="violet">E-mail(ät)praxis-mittelweg.de</a></p>
	</div>
	<div class="show-for-small">
		 <div class="menu-btn" id="menu-btn">
		<div></div>
		<span></span>
		<span></span>
		<span></span>
		 </div>

		 <div class="responsive-menu">
			<ul>
			   <li>1. Object</li>
			   <li>2. Object</li>
			</ul>
		 </div>
	</div>
  </div>
  <div class="grid-item" id="einsdrei">
    <a href="die_praxis.php" class="beigefett bottom right">Die Praxis</a>
  </div>  
  <div class="grid-item" id="einsvier">
	<a href="unser_team.php" class="bottom left violetfett">Unser Team</a>
  </div>  
  <div class="grid-item menu2 hide-for-medium-down" id="zweieins">
	<ul class="menu side-nav hide-for-small transparenz">
	  <li class="menurahmenOben"><a href="#">Home</a></li>
	  <li class="menurahmen"><a id="diepraxis" href="#">Die Praxis</a>
	  	<ul class="test">
			<li>Sprechzeiten</li>
			<li>Rundgang</li>
			<li>Sprechzeiten</li>
			<li>Rundgang</li>
		</ul>
	  </li>
	  <li class="menurahmen"><a href="leistungen_untersuchung.php">Leistungen</a></li>
	  <li class="menurahmen"><a href="unser_team.php">Unser Team</a></li>
	  <li class="menurahmen"><a href="patienten_info_news.php">Patienten Info</a></li>
	  <li class="menurahmen"><a href="kontakt.php">Kontakt</a></li>
	  <li class="menurahmen"><a href="impressum.php">Impressum</a></li>
	</ul>
  </div>  
  <div class="grid-item" id="zweizwei"></div>
  <div class="grid-item grid-item--width" id="zweidrei"></div>
  <div class="grid-item" id="dreieins"><a href="kontakt.php" class="violetfett right top">Kontakt</a></div>
  <div class="grid-item" id="dreizwei">
  <a href="leistungen_untersuchung.php" class="beigefett left top">Leistungen</a>
  </div>
  <div class="grid-item" id="dreidrei"><a href="patienten_info_news.php" class="beigefett left top">Patienten Info</a></div>
  
</div>
    </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.offcanvas.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
<script>
var $grid;
$(document).ready( function() {
  $(document).foundation();
  $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 232
  });

});
$( "#diepraxis" ).click(function() {
  $( ".test" ).toggle( "fast", function() {
    // Animation complete.
  });
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
</script>