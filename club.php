<?php
$titolo_pagina = "Il Club";
include 'intestazione.php';
$twitter = 'img/slider/twitter.png';
$instagram = 'img/slider/instagram.png';
$facebook = 'img/slider/facebook.png';
$marchio = 'img/marchio.png';

?>

<body style="background-color: #2f4550;">
<?php include 'header.php';?>
<script type="text/javascript">
	$("#club").css("font-weight","bold");
</script>
	<section class="w3-row w3-margin-top">

		<!-- questo commento è per un test di commit e push -->
		<div class="w3-third articolo ">
			<p>
				L'associazione sportiva <b>Hockey Club Ragusa</b> &egrave; attiva
				nella promozione dell'<b>hockey su prato</b> su tutto il territorio,
				portando avanti iniziative che mirano a creare una valida
				alternativa di sport <b>outdoor</b> e <b>indoor</b>. Sono previsti
				corsi maschili per tutte le fasce di et&agrave; dai <b>6</b> ai <b>60</b>
				anni. Scoprili <a href="ragusa.php">qui</a>.
			</p>
		</div>
		<!-- questo è il secondo commento -->

		<div class="w3-twothird" id="colonne">
			<div class="w3-row">
				<div class="w3-third">
					<p>
						<b>a.s.d.</b><br> hockey club ragusa
					</p>

					<p>
						via m. Buonarroti, 73<br> 97100 Ragusa
					</p>

					<p>
						c.f: 92033480887<br> p.iva: 01457450888
					</p>
				</div>



				<div class="w3-third">
					<p>
						<b>presidente</b><br> alessandro mirabella
					</p>
					<p>
						<b>vice-presidente</b><br> vincenzo tumino
					</p>
					<p>
						<b>segretario/tesoriere</b><br> stefano tumino
					</p>
				</div>


				<div class="w3-third">
					<p>
						<b>consiglio direttivo</b><br> alessandro mirabella<br> vincenzo
						tumino<br> stefano tumino<br> ottavio mur&egrave;<br> francesco
						tamburino<br> gianluca campo<br> ermanno occhipinti
					</p>
				</div>
			</div>

			<div class="w3-row">
				<p>
					<b>Hockeisti dal 1994</b>
				</p>
				<table style="width: 100%">
					<tbody>
						 <?php
							$myfile = fopen ( "ragusa/hockeisti.txt", "r" ) or die ( "Unable to open file!" );					
							// Output one line until end-of-file
							while ( ! feof ( $myfile ) ) {
								echo '<tr>';								
									echo '<td>'.fgets ( $myfile ).'</td>';
									echo '<td>'.fgets ( $myfile ).'</td>';
								echo '</tr>';	
							}
							fclose ( $myfile );
							?> 
					</tbody>
				</table>
			</div>

		</div>
	</section>

</body>
<?php include 'footer.php';?>
