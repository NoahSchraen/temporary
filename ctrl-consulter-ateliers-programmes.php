<?php
	
	require "modeles/ModeleSBAteliers.php" ;
	$ateliers = ModeleSBAteliers::getAteliersProgrammes( $_SESSION[ 'numero' ] ) ;
	
	require "vues/vue-ateliers-programmes.php" ;
?>
