<?php
	function urlize($url,$filename=false,$substitute='_') {
	$search = array("á","é","í","ó","ö","ő","ú","ü","ű","Á","É","Í","Ó","Ö","Ő","Ú","Ü","Ű");
	$replace = array("a","e","i","o","o","o","u","u","u","A","E","I","O","O","O","U","U","U");
	$url = str_replace($search,$replace,$url);
	if ($filename) {
		$search = array('/[^a-z0-9\.]/', '/--+/', '/^-+/', '/-+$/');
	} else {
		$search = array('/[^a-z0-9]/', '/--+/', '/^-+/', '/-+$/');
	}
	$replace = array($substitute, $substitute, '', '');
	return preg_replace($search, $replace,strtolower($url)); 
	return $url;
}
?>
