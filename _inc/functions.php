<?php

	# Absoluter pfad auf das Stammverzeichnis
	define("STATIC_ROOT", dirname(__FILE__)."/..");
	define("FILE_ROOT", dirname(__FILE__));

	# globale konfiguration
	$config = array(
    'title' 	=> null,
	  'bodyID' 	=> null,
    'description' => null,
    'keywords' => null
	);

	function renderPartial($partialName){
		global $config;

		if (strpos($partialName,'.') === false){
			$partialName .= ".php";
		}
		$partialFilePath = STATIC_ROOT."/_partials/".$partialName;

		if (is_file($partialFilePath)){
			include(STATIC_ROOT."/_partials/".$partialName);
		}
	}

	function renderDefaultPage(){
		global $config;

		include(STATIC_ROOT."/index.php");
	}

	function setConfig($key,$value){
		global $config;

		$config[$key] = $value;
	}

	function setConfigIfEmpty($key,$value){
		global $config;

		if (!isset($config[$key]) || $config[$key] == null){
			$config[$key] = $value;
		}
	}

?>