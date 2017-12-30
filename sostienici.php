<?php
$titolo_pagina = "Sostenitori";
include 'intestazione.php';
$twitter = 'img/sostienici/twitter.png';
$instagram = 'img/sostienici/instagram.png';
$facebook = 'img/sostienici/facebook.png';
$marchio = 'img/sostienici/marchio.png';
?>
<body>
<?php include 'header.php';?>
<style>
.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after{
	background-color: #8a8a8a;
}
footer{
		bottom:0;
	}
</style>

<script type="text/javascript">
	$("#sostenitori").css("font-weight","bold");
	$("body").css("color","#8a8a8a");
	$(".mobmenu").css("color","#8a8a8a");
</script>

<section class="w3-row w3-margin-top">
	<div class="w3-third articolo">
		<h3 id=titolo>Sostenitori</h3>
		<p>
			per promuovere l'hockey su prato
			e le attivit&agrave; a questo connesse,
			al fine di mantenere vivo
			l'interesse dei partecipanti
			e di crescere sempre di pi&ugrave;
			come associazione sportiva,
			siamo alla costantante ricerca
			di sostenitori che ci possano
			aiutare.
		</p>
		<div id=nota class="w3-margin-top">
			Se sei interessato ad aiutarci scrivici <a href="mailto:hockeyclubragusa@gmail.com" target="_blank">qui</a> per presentare le tue proposte
		</div>
	</div>
	<div class="w3-twothird" style="margin-top: 80px; text-align: center;">
		<div class="w3-row sost">
			<div><a href="http://www.domusaurearesort.it" target="_blank"><img style="width: 60%" alt="Domus Aurea" src="img/sostienici/domus.png" ></a></div>
			<div><a href="http://www.enotecailbarocco.it" target="_blank"><img style="width: 55%; position: relative; bottom: 30px" alt="Enoteca" src="img/sostienici/enoteca.png" ></a></div>
			<div><a href="http://www.facebook.com/Cake-Design-157645891247843" target="_blank"><img style="width: 35%" alt="Cake Design" src="img/sostienici/cakedesign.png" ></a></div>
		</div>
		<div class="w3-row sost" style="margin-top:25px;">
		<div><a href="http://www.autoricambiocchipinti.com" target="_blank"><img style="width: 80%" alt="Autoricambi Occhipinti" src="img/sostienici/autoricambi.png" ></a></div>
		<div><a href="https://www.facebook.com/iudicepasticcere/" target="_blank"><img style="width: 50%; position: relative; top: 45px" alt="Iudice Pasticcere" src="img/sostienici/iudice.png" ></a></div>
		<div><a href="http://www.informaticaragusa.it" target="_blank"><img style="width: 75%;position: relative; bottom: 10px" alt="L'informatica" src="img/sostienici/linformatica.png" ></a></div>
		</div>
	</div>
</section>

<?php include 'footer.php';?>

