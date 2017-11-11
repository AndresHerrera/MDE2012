<?php
	if (!extension_loaded("MapScript"))
	{ 
		dl('php_mapscript.'.PHP_SHLIB_SUFFIX);
	}

	$mapObject = ms_newMapObj("");
	$mapObject->set("name","MDE");
	$mapObject->set("shapepath","C:/ms4w/Apache/htdocs/mde/spatial/");
	
	$mapObject->setSize(600,400);
	$mapObject->setExtent(1081115, 932914 , 1081514  , 933341);

	$mapObject->web->set( "imagepath" , "C:/ms4w/Apache/htdocs/mde/tmp/" );
	$mapObject->web->set( "imageurl", "tmp/" );
?>