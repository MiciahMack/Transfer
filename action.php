<?php 
	
	$search = $_POST["search"];

	header('location: https://musicbrainz.org/search?query=' . $search . '&type=artist&method=indexed');
	exit;
?>
