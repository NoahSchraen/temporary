<?php
	
	require "modeles/ModeleSBAteliers.php" ;
	
	$atelier = ModeleSBAteliers::getAtelier( $numAtelier ) ;
	
	$commentaires = ModeleSBAteliers::getCommentairesAtelier( $numAtelier ) ;
	
	require "vues/vue-commentaires-atelier.php" ;
?>
