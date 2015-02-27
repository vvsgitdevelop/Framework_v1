<?php 
/*
* <p>Fecha creacion: 23/02/2014</p>
* @author Vista Verde Tecnologia (dartavia)
* @version 1.0
*/

	// Inicio de Sesion
	session_start();

	// Estructura de lenguajes soportados
	$available_langs = array('en','es','fr');

	if(!isset($language)){
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}else{
		$lang = $language;
	}
	if(isset($lang) && $lang!= ''){
	    //verficacion del soporte del
	    if(in_array($lang, $available_langs)){
	        $_SESSION['lang'] = $lang; // Set session
	    }
	}

	// Default Language Session solo si no existe un idioma solicitado
	if ($_SESSION['lang']=='') {
	    $_SESSION['lang'] = 'es';
	}

	// Include archivo de recursos de idioma
	include('./app/lang/lang.'.$_SESSION['lang'].'.php');

/*Metodos*/

	/**
     * Metodo para acceder al bundle especifico, segun el idioma definido.
     * @param $key: llave para busqueda del bundle
     * @return bundle 
     */
	function rsc($key) {
		$langs = $_SESSION['langs'];
	    echo $langs[$key];
	}
?>