<?php

class sezione{
	public $titolo = '';
	public $descrizione = '';
	public $media = '';
	
	function  __construct($tit, $desc,$med){
		$this->titolo = "$tit";
		$this->descrizione = "$desc";
		$this->media = "$med";
	}
} 

header('Content-Type: application/json');
if (file_exists ( 'ragusa/ragusa.xml' )) {
	$hockey = simplexml_load_file ( 'ragusa/ragusa.xml' );
	if (isset ( $_GET ['cat'] )) {
		foreach ( $hockey->children () as $child ) {
			$role = $child->attributes ();
			if ($role == $_GET ['cat']) {
				 $section = $child;
				 //$res = new sezione($section->titolo, $section->descrizione, $section->media);
				 $res = array(
				 		'titolo'=>"$section->titolo",
				 		'descrizione'=>"$section->descrizione",
				 		'media'=>"$section->media"
				 );
				 echo json_encode($res);
			}
		}
	} else {
		$section = $hockey->types [0];
		return $section;
	}
}
?>