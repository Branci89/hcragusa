<?php
session_start ();
include ('myFunction.php');
if (isset ( $_POST )) {
	if (isset ( $_POST ['send'] ) && $_POST ['send'] == "ok") {
		$nome = $_POST['nome'];
		$mail = $_POST ['email'];
		$testo = $_POST ['testo'];
		$oggetto = $_POST['oggetto'];
		$tempo = $_SERVER ['REQUEST_TIME'];
		if (salvaMail ($nome, $mail,$oggetto, $tempo, $testo ))
			$_SESSION ['success'] = "ok";
			else
				$_SESSION ['success'] = "nok";
	}
}
$host  = $_SERVER['HTTP_HOST'];
$uri   = $_SERVER['PHP_SELF'];
$pagina = $_SESSION['pagina'];

header("Location: $pagina");
exit;
?>