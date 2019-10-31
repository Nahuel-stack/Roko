<?php

	//inicialmente creo la variable modulo y le digo q sea el index para que x default vaya al index (la primera vez q inicias x ej.)...
	$modulo = "index";

	// isset es para ver si tu variable tiene algo o no , si tine algo es true sino es false. 
	if ( isset( $_GET["m"] ) ){
		$modulo = $_GET["m"];
	}

	// cn el switch veo que pag. elegi y le pongo ese valor a mi variable modulo.
	switch ( $modulo ){

		case "dar_adopcion":
			$modulo = "dar_adopcion";
			break;

		case "adopcion":
			$modulo = "adopcion";
			break;

		case "encontrados":
			$modulo = "encontrados";
			break;

		case "login":
			$modulo = "login";
			break;

		case "perdidos":
			$modulo = "perdidos";
			break;

		case "publicar.perdidos":
			$modulo = "publicar.perdidos";
			break;

        case "registro":
			$modulo = "registro";
			break;

			case "publicar.encontrados":
			$modulo = "publicar.encontrados";
			break;

		default:
			$modulo = "index";

	}

	include "vistas/" . $modulo . "/index.php";