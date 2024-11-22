<?php
	$src = fopen("/var/log/sbateliers/access.log", "a") ;
	$email = $_POST[ "email" ] ;
	$mdp = $_POST[ "mdp" ] ;
	
	require "modeles/ModeleSBAteliers.php" ;
	$client = ModeleSBAteliers::getClient( $email , $mdp ) ;
	
	if( $client !== FALSE ){
		session_start() ;
		
		$_SESSION[ "numero" ] = $client[ "numero" ] ;
		$_SESSION[ "nom" ] = $client[ "nom" ] ; 
		$_SESSION[ "prenom" ] = $client[ "prenom" ] ; 
		$journal = implode (":", [$_SERVER['REMOTE_ADDR'], date("Y-m-d H:i:s"),$_SERVER['REMOTE_USER'], "Authentification ok", $_SERVER['HTTP_USER_AGENT'], PHP_EOL]) ;
		fwrite($src, $journal) ;
		header( "Location: /sbateliers/clients/espace" );
	}
	else {
		$erreur = 'Email ou mot de passe incorrect.' ;
		$journal = implode (":", [$_SERVER['REMOTE_ADDR'], date("Y-m-d H:i:s"),$_SERVER['REMOTE_USER'], "Authentification Nok", $_SERVER['HTTP_USER_AGENT'], PHP_EOL]) ;
		fwrite($src, $journal) ;
		require "vues/vue-connexion.php" ;
	}
	fclose($src) ;
?>
