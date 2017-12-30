<?php
$titolo_pagina = "HC Ragusa";
include 'intestazione.php';
?>

<style>
.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
	background-color: #ffffff;
}

body {
	width: 100%;
}
</style>
<body>

	<header
		style="position: absolute; z-index: 30; width: 80%; margin-left: 10%;"
		class="w3-hide-small w3-hide-medium">
		<nav class="w3-row mynav">
			<div class="w3-third">
				<a title="home" href="index.php"> <img id="logo_hockey"
					src="img/marchio.png" alt="HC Ragusa">
				</a>
			</div>
			<ul class="w3-navbar w3-twothird">
				<li style="width: 10%" id="hockey"><a href="hockey.php">Hockey</a></li>
				<li style="width: 10%" id="club"><a href="club.php">Club</a></li>
				<li id="ragusa"><a href="ragusa.php">Ragusa</a></li>
				<li style="width: 20%" id="sostenitori"><a href="sostienici.php">Sostenitori</a></li>
				<li id="contatti"><a href="contatti.php">Contattaci</a></li>
				<li style="width: 10%" id="social-btns"><a
					href="https://twitter.com/HCRagusa"><img
						src="img/slider/twitter.png"></a></li>
				<li id="social-btns"><a
					href="https://instagram.com/HockeyClubRagusa/?hl=it"><img
						src="img/slider/instagram.png"></a></li>
				<li id="social-btns"><a href="https://www.facebook.com/hcragusa/"><img
						src="img/slider/facebook.png"></a></li>
			</ul>
		</nav>
	</header>
	<header
		style="z-index: 30; background-color: transparent; position: fixed; width: 100%;"
		class="w3-row myheader w3-hide-large">
		<nav class="w3-row">
			<a title="home" href="index.php"> <img id="logo_hockey"
				class="w3-quarter" alt="Logo Elisa" src="img/marchio.png"
				style="margin-left: 10%;"></a>
			<button class="hamburger hamburger--spring" type="button"
				style="float: right; margin-right: 10%">
				<span class="hamburger-box"> <span class="hamburger-inner"></span>
				</span>
			</button>
		</nav>

		<ul class="w3-accordion mobmenu w3-hide-large">
			<li id="1"><a href="hockey.php">Hockey</a></li>
			<li id="2"><a href="club.php">Club</a></li>
			<li id="3"><a href="ragusa.php">Ragusa</a></li>
			<li id="4"><a href="sostienici.php">Sostenitori</a></li>
			<li id="5"><a href="contatti.php">Contattaci</a></li>
			<li id="5"><a href="#"></a> <a href="#"></a> <a href="#"></a></li>
		</ul>
	</header>



	<div class="slider">
		<!--  <div>
			<div class="myslide" id="img1"></div>
		</div>-->
		<div>
			<div class="myslide" id="img2"></div>
		</div>
		<div>
			<div class="myslide" id="img3"></div>
		</div>
		<div>
			<div class="myslide" id="img4"></div>
		</div>

	</div>
	<script src="jquery.anyslider.js"></script>
	<script type="text/javascript">
		$('.slider').anyslider();
	</script>

<div class="w3-row"
		style="background-color: transparent; position: relative; width: 80%; margin-top: 10px;margin:auto; bottom: 70px; font-size: 13px">
		<div class="w3-third">
			<table>
				<tbody>
					<tr>
						<th>Link Utili:</th>
						<td><a href="http://www.federhockey.it" target="_blank">federhockey.it</a>
							|<br></td>
						<td><a href="http://www.ehlhockey.nl" target="_blank">ehlhockey.nl
						</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="w3-third" id="piva">p.iva: 01457450888</div>
	</div>
</body>
<script>
$(".hamburger").click(function(){
  	if($(".mobmenu").is(":hidden"))
  		  	w3_open();
  	else w3_close();
  	$(".hamburger").toggleClass("is-active");
});
function w3_open() {
   // $(".mobmenu").css("width", "100%");
    $(".mobmenu").slideDown();
}
function w3_close() {
	$(".mobmenu").slideUp();
}
function myFunction(id, id_2) {
	if($("#"+id).is(":hidden")){
    	$("#"+id).slideDown();
    	$("#"+id_2).toggleClass("mobli mobli-open");
    	}
    else {
        $("#"+id).slideUp(function(){$("#"+id_2).toggleClass("mobli-open mobli");});
        }
}
</script>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	var body = $("html, body");
	body.stop().animate({scrollTop:0}, 1000, 'swing');
    
}
</script>
</html>


