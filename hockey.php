<?php
$titolo_pagina = "Hockey";
$hockey;
$section;
$twitter = 'img/slider/twitter.png';
$instagram = 'img/slider/instagram.png';
$facebook = 'img/slider/facebook.png';
$marchio = 'img/marchio.png';
include 'intestazione.php';
?>

<body style="background-color: #92dce5;">
<?php include 'header.php';?>

<script type="text/javascript">
	$("#hockey").css("font-weight","bold");
	
</script>

<?php
if (file_exists ( 'hockey/hockey.xml' )) {
	$hockey = simplexml_load_file ( 'hockey/hockey.xml' );
}
?>

	<?php
	
	foreach ( $hockey as $elem ) {
		
		echo '
		<section class="w3-row w3-margin-top">
			<div class="w3-third articolo">
				<h3 id=titolo>' . $elem->titolo . '</h3>
				<p>' . $elem->descrizione . '</p>';
		if($elem->titolo == "Hockey su Prato"){
			echo '<div id=nota class="w3-margin-top">
					se	stai guardando una partita in diretta o per avere pi&ugrave;
					informazioni sulle regole di gioco, puoi scaricare una guida rapida
					da <a href="hockey/guidaHockey.pdf" download="guida-hockey.pdf">qui</a>
				</div>';
		}	
			echo '</div>';
		if ($elem->media->attributes () == "video") {
			echo '
					<div class="w3-twothird dim">
						<iframe
							src="' . $elem->media . '">
						</iframe>
					</div>
				';
		} else {
			echo '
				<div class="w3-twothird dim">
					<img src="hockey/' . $elem->media . '"></img>
				</div>
			';
		}
		echo '</section>';
	}
	?>			

</body>
<?php include 'footer.php'?>