<?php
	
	require "modeles/ModeleSBAteliers.php" ;
	$ateliers = ModeleSBAteliers::getAteliersPasses( $_SESSION[ 'numero' ] ) ;
	
	require "vues/vue-ateliers-passes.php" ;
?>
