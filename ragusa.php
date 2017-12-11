<?php
session_start();
$uri   = $_SERVER['PHP_SELF'];
$_SESSION['pagina'] = $uri;

$titolo_pagina = "Ragusa";
include 'intestazione.php';
$twitter = 'img/ragusa/twitter.png';
$instagram = 'img/ragusa/instagram.png';
$facebook = 'img/ragusa/facebook.png';
$marchio = 'img/ragusa/marchio.png';
?>
<style>
.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
	background-color: #7dd181;
}
</style>
<body>
<?php include 'header.php';?>

	<script type="text/javascript">
	$("#ragusa").css("font-weight","bold");
	$("body").css("color","#7dd181");
	$(".mobmenu").css("color","#7dd181");
</script>

<?php
if (file_exists ( 'ragusa/ragusa.xml' )) {
	$hockey = simplexml_load_file ( 'ragusa/ragusa.xml' );
}

?>
<!-- commento -->
<?php
foreach ( $hockey as $elem ) {
	echo '
		<section class="w3-row w3-margin-top">
		<div class="w3-third articolo">
			<h3 id=titolo>' . $elem->titolo . '</h3>
			<p id="descrizione">' . $elem->descrizione . '</p>';
			if ($elem->visibile == 1){
				echo '
				<div id=nota class="w3-margin-top">
					per avere, informazioni sull\'organizzazione, sulle iscrizioni, sugli
					allenamenti o su altro ancora clicca <span id="clickable" onclick="openModal(\'' . $elem->titolo . '\')">qui</span>
				</div>';
			}
		echo '</div>

		<div class="w3-twothird dim"
			style="margin-bottom: 15px; height: auto;">
			<img id="imgSec" src="img/ragusa/' . $elem->media . '"></img>
		</div>
		</section>
		';
}
?>
	<script type="text/javascript">
		function openModal(titolo){
			if(!$("modale").is(":visible")){
				$("#modale").show();
				$("#cat_scelta").html("Richiedi Informazioni per - "+titolo);
				$('input[name="oggetto"]').val(titolo);
				}
			}

		function closeModal(mod){
				$("#"+mod).hide();
			}
	</script>
	
  <div id="modale" class="w3-modal">
		<div class="w3-modal-content w3-animate-top">
			<div class="w3-container w3-padding">
				<span style="cursor: pointer; margin-right: 10px;" onclick="closeModal('modale')" class="w3-button w3-display-topright w3-xxlarge">&times;</span>
				<form method="post" action="gest_mail.php">
					<h3 id="cat_scelta"></h3>
					<hr>
					<input type="hidden" name="oggetto" value="">
					<input class="w3-input" type="text" name="nome" required="required"> 
					<label>Inserisci il tuo Nome e Cognome</label>
					<input	class="w3-input" type="email" name="email" required> 
					<label>Inserisci la tua e-mail</label>
					<p>
						<label>Messaggio</label>
						<textarea style="resize:none; height: 200px;" class="w3-input w3-border" type="text" name="testo" ></textarea>
					</p>
					<button type="submit" name="send" value="ok"
						class="w3-right w3-padding-small">INVIA</button>
				</form>
			</div>
		</div>
	</div>
	
<div id="modResponse" class="w3-modal">
		<div class="w3-modal-content w3-animate-top">
			<div class="w3-container w3-padding">
				<span style="cursor: pointer; margin-right: 10px;" onclick="closeModal('modResponse')" class="w3-button w3-display-topright w3-xxlarge">&times;</span>
				<p id="response"></p>
			</div>
		</div>
	</div>
		

</body>
<?php if (isset ( $_SESSION ['success'] )) {
	if ($_SESSION ['success'] == "ok") {
		echo "<script  type=\"text/javascript\" language=\"javascript\">";
		echo '
			$("#modResponse").show();
			$("#response").html("Email inviata correttamente");
		';
		echo "</script>";
	}
	if ($_SESSION ['success'] == "nok") {
		echo "<script  type=\"text/javascript\" language=\"javascript\">";
		echo '
			$("#modResponse").show();
			$("#response").html("C\'&egrave; un errore con l\'invio della e-mail");
		';
		echo "</script>";
	}
	unset ( $_SESSION ['success'] );
}?>
<?php include 'footer.php';?>