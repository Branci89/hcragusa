<?php


function salvaMail($nome,$email,$oggetto, $tempo, $testo){
	
	$data = date('d/m/Y H:i:s', $tempo);
	$headers="From: <Form-Contatti@HcRagusa>\n";
	// use wordwrap() if lines are longer than 70 characters
	$sentMail2 ="Nome e Congome: ".$nome."\n"
			."Indirizzo E-Mail del richiedente: ".$email."\n"
			."Data: ".$data."\n"
			."Contenuto: ".$testo."\n\n";
	
	$sentMail2 = wordwrap($sentMail2,70);
	return mail("cbranci89@gmail.com", $oggetto,$sentMail2,$headers);
}
?>