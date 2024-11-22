<?php
	//var_dump( $_GET[ 'route' ] ) ;
	$route = $_GET[ 'route' ] ;

	if( $route == '' ){
		require "vues/vue-accueil.php" ;
	}
	elseif( $route == 'clients/enregistrement' ){
		require "vues/vue-enregistrement.php" ;
	}
	elseif( $route == 'clients/enregistrer' ){
		require "controleurs/ctrl-enregistrer.php" ;
	}
	elseif( $route == 'clients/connexion' ){
		require "vues/vue-connexion.php" ;
	}
	elseif( $route == 'clients/connecter' ){
		require "controleurs/ctrl-connecter-client.php" ;
	}
	elseif( $route == 'clients/espace' ){ 
		session_start() ;
		require "vues/vue-espace-client.php" ;
	}
	elseif( $route == 'clients/profil' ){
		session_start() ;
		require "controleurs/ctrl-consulter-profil.php" ;
	}
	elseif( $route == 'clients/deconnecter' ){
		session_start() ;
		require "controleurs/ctrl-deconnecter-client.php" ;
	}
	elseif( $route == 'ateliers/programmes' ){
		session_start() ;
		require "controleurs/ctrl-consulter-ateliers-programmes.php" ;
	}
	elseif( $route == 'ateliers/passes' ){
		session_start() ;
		require "controleurs/ctrl-consulter-ateliers-passes.php" ;
	}
	elseif( preg_match( '#^participations/([0-9]+)/proceder$#' , $route , $atomes ) ){
		session_start() ;
		$numAtelier = $atomes[ 1 ] ;
		require "controleurs/ctrl-inscrire-atelier.php" ;
	}
	elseif( preg_match( '#^participations/([0-9]+)/annuler$#' , $route , $atomes ) ){
		session_start() ;
		$numAtelier = $atomes[ 1 ] ;
		require "controleurs/ctrl-annuler-participation-atelier.php" ;
	}
	elseif( preg_match( '#^ateliers/([0-9]+)/commentaires/voir$#' , $route , $atomes ) ){
		session_start() ;
		$numAtelier = $atomes[ 1 ] ;
		require "controleurs/ctrl-consulter-commentaires-ateliers.php" ;
	}
	elseif( preg_match( '#^ateliers/([0-9]+)/commenter$#' , $route , $atomes ) ){
		session_start() ;
		$numAtelier = $atomes[ 1 ] ;
		require "controleurs/ctrl-commenter-atelier.php" ;
	}
	else {
		var_dump( $route ) ;
	}
?>
