<?php
	

	
	
	
	
	/*
	
	// Creamos un Layer  poligono y seteamos sus propiedades 
	$layerPoligono = ms_newLayerObj($mapObject);
	$layerPoligono->set( "name", "lotes");
	$layerPoligono->set( "type", MS_LAYER_POLYGON);
	$layerPoligono->set( "status", MS_ON);
	//$layerPoligono->set("connectiontype",MS_POSTGIS);
        $layerPoligono->setconnectiontype(MS_POSTGIS);

	$layerPoligono->set("connection",$postgis_db_string);
	$layerPoligono ->set("data","the_geom from (select *  from lotes ) as mzyum using unique gid using srid=-1");
	$clasePoligono = ms_newClassObj($layerPoligono);
	$estiloPoligono = ms_newStyleObj($clasePoligono);
	$estiloPoligono->color->setRGB(255,123,0);
	$estiloPoligono->outlinecolor->setRGB(0, 0, 0);
	
	// Creamos un Layer Linea y seteamos sus propiedades 
	
	$layerLineas = ms_newLayerObj($mapObject);
	$layerLineas->set( "name", "vias");
	$layerLineas->set( "type", MS_LAYER_LINE);
	$layerLineas->set( "status", MS_ON);
	//$layerLineas->set("connectiontype",MS_POSTGIS);
$layerLineas->setconnectiontype(MS_POSTGIS);
	$layerLineas->set("connection",$postgis_db_string);
	$layerLineas ->set("data","the_geom from (select *  from vias) as mzyum using unique gid using srid=-1");
	$claseLineas = ms_newClassObj($layerLineas);
	$estiloLineas = ms_newStyleObj($claseLineas);
	$estiloLineas->color->setRGB(0,0,0);
	$estiloLineas->outlinecolor->setRGB(0, 0, 0);
	
	
	
	// Creamos un Layer Linea y seteamos sus propiedades 
	
	$layerLineas = ms_newLayerObj($mapObject);
	$layerLineas->set( "name", "rios");
	$layerLineas->set( "type", MS_LAYER_LINE);
	$layerLineas->set( "status", MS_ON);
	//$layerLineas->set("connectiontype",MS_POSTGIS);
$layerLineas->setconnectiontype(MS_POSTGIS);
	$layerLineas->set("connection",$postgis_db_string);
	$layerLineas ->set("data","the_geom from (select *  from rios) as mzyum using unique gid using srid=-1");
	$claseLineas = ms_newClassObj($layerLineas);
	$estiloLineas = ms_newStyleObj($claseLineas);
	$estiloLineas->color->setRGB(0 ,0 ,255);
	$estiloLineas->outlinecolor->setRGB(0, 0, 0);
	
	
	// Creamos un Layer  poligono y seteamos sus propiedades 
	$layerPoligono = ms_newLayerObj($mapObject);
	$layerPoligono->set( "name", "poblacion");
	$layerPoligono->set( "type", MS_LAYER_POLYGON);
	$layerPoligono->set( "status", MS_ON);
	//$layerPoligono->set("connectiontype",MS_POSTGIS);
$layerPoligono->setconnectiontype(MS_POSTGIS);
	$layerPoligono->set("connection",$postgis_db_string);
	$layerPoligono ->set("data","the_geom from (select *  from poblacion ) as mzyum using unique gid using srid=-1");
	$clasePoligono = ms_newClassObj($layerPoligono);
	$estiloPoligono = ms_newStyleObj($clasePoligono);
	$estiloPoligono->color->setRGB(190 ,190 ,190);
	$estiloPoligono->outlinecolor->setRGB(0, 0, 0);
	
	
	// Creamos un Layer  poligono y seteamos sus propiedades 
	$layerPoligono = ms_newLayerObj($mapObject);
	$layerPoligono->set( "name", "thiessen");
	$layerPoligono->set( "type", MS_LAYER_POLYGON);
	$layerPoligono->set( "status", MS_ON);
	//$layerPoligono->set("connectiontype",MS_POSTGIS);
$layerPoligono->setconnectiontype(MS_POSTGIS);
	$layerPoligono->set("connection",$postgis_db_string);
	$layerPoligono ->set("data","the_geom from (select *  from thiessen ) as mzyum using unique gid using srid=-1");
	$clasePoligono = ms_newClassObj($layerPoligono);
	$estiloPoligono = ms_newStyleObj($clasePoligono);
	//$estiloPoligono->color->setRGB(190 ,190 ,190);
	$estiloPoligono->outlinecolor->setRGB(255 , 0, 255);
	
	
	// Creamos un Layer  poligono y seteamos sus propiedades 
	$layerPoligono = ms_newLayerObj($mapObject);
	$layerPoligono->set( "name", "reservorio");
	$layerPoligono->set( "type", MS_LAYER_POLYGON);
	$layerPoligono->set( "status", MS_ON);
	//$layerPoligono->set("connectiontype",MS_POSTGIS);
$layerPoligono->setconnectiontype(MS_POSTGIS);
	$layerPoligono->set("connection",$postgis_db_string);
	$layerPoligono ->set("data","the_geom from (select *  from reservorio ) as mzyum using unique gid using srid=-1");
	$clasePoligono = ms_newClassObj($layerPoligono);
	$estiloPoligono = ms_newStyleObj($clasePoligono);
	$estiloPoligono->color->setRGB(0 ,0 ,255);
	$estiloPoligono->outlinecolor->setRGB(255, 0, 255);
	
	
	*/
	
	// CREACION DE LAYER - CONTORNO DE LA SUERTE
	$layerPoligono = ms_newLayerObj($mapObject);
	$layerPoligono->set( "name", "suerte");
	$layerPoligono->set( "type", MS_LAYER_POLYGON);
	$layerPoligono->set( "status", MS_ON);
	$layerPoligono ->set("data","ste_lanegra.shp");
	#$layerPoligono->set("transparency", 20);
	$clasePoligono = ms_newClassObj($layerPoligono);
	$clasePoligono->set("name","Hacienda La Negra");
	$estiloPoligono = ms_newStyleObj($clasePoligono);
	$estiloPoligono->color->setRGB(204 ,255 ,204);
	$estiloPoligono->outlinecolor->setRGB(204 ,255 ,204);


	
	// CREACION DE LAYER - DE PUNTOS DE MUESTREO
	$layerPuntos = ms_newLayerObj($mapObject);
	$layerPuntos->set( "name", "pmuestreo");
	$layerPuntos->set( "type", MS_LAYER_POINT);
	$layerPuntos->set( "status", MS_ON);
	$layerPuntos->set("connectiontype",MS_POSTGIS);
	//$layerPuntos->setconnectiontype(MS_POSTGIS);
	$layerPuntos->set("connection",$postgis_db_string);
	$layerPuntos ->set("data",$SQL_PMUESTREO);
	
	$layerPuntos->set("classitem", "muestreo");
	
	$clasePuntos = ms_newClassObj($layerPuntos);
	$clasePuntos->setexpression("/P/");
	$estiloPuntos = ms_newStyleObj($clasePuntos);
	
	$symbolstar = ms_newSymbolObj($mapObject, "star");
    $oSymbol = $mapObject->getsymbolobjectbyid($symbolstar);
    $oSymbol->setpoints(Array(0 ,.375 , .35, .375,.5, 0,.65, .375,1 ,.375,.75, .625,.875 ,1,.5 ,.75,.125, 1,.25 ,.625));
    $oSymbol->set("filled",MS_TRUE);
    $oSymbol->set("inmapfile", MS_TRUE);
	
    $estiloPuntos->color->setRGB(0 ,255, 0);
	$estiloPuntos->outlinecolor->setRGB(0 ,255, 0);	
	$estiloPuntos->set("symbolname", "star");
    $estiloPuntos->set("size", "3");

	$clasePuntos2 = ms_newClassObj($layerPuntos);
	$clasePuntos2->setexpression("/C/");
	$estiloPuntos2 = ms_newStyleObj($clasePuntos2);
    $estiloPuntos2->color->setRGB(0 ,34 ,125);
	$estiloPuntos2->outlinecolor->setRGB(0 ,34, 125);	
	$estiloPuntos2->set("symbolname", "star");
    $estiloPuntos2->set("size", "3");
	/*
	$layerPuntos->set("labelitem","id_sig");
	$label = $clasePuntos->label;
	$label->set("position", MS_CC);
	$label->set("font","sans");
	$label->set("size",MS_SMALL);
    */
	//FIN CREACION DE LAYER PUNTOS DE MUESTREO
	
	// CREACION DE LAYER - TEMATICO
	$layerLineas = ms_newLayerObj($mapObject);
	$layerLineas->set( "name", "tematico");
	$layerLineas->set( "type", MS_LAYER_LINE);
	$layerLineas->set( "status", MS_ON);
	$layerLineas ->set("data","tematico.shp");
	$layerLineas->set("classitem", "Layer");
	
	$claseLineas = ms_newClassObj($layerLineas);
	$claseLineas->set("name","Construcciones");
	$claseLineas->setexpression("LAYER71");
	$estiloLineas = ms_newStyleObj($claseLineas);
	$estiloLineas->color->setRGB(0 ,0 ,0);
	$estiloLineas->outlinecolor->setRGB(0, 0, 0);
	
	$claseLineas2= ms_newClassObj($layerLineas);
	$claseLineas2->set("name","Vías");
	$claseLineas2->setexpression("LAYER31");
	$estiloLineas2 = ms_newStyleObj($claseLineas2);
	$estiloLineas2->color->setRGB(255 ,0,0);
	$estiloLineas2->outlinecolor->setRGB(255, 0, 0);

	$claseLineas3 = ms_newClassObj($layerLineas);
	$claseLineas3->set("name","Curvas Nivel");
	$claseLineas3->setexpression("LAYER11");
	$estiloLineas3 = ms_newStyleObj($claseLineas3);
	$estiloLineas3->color->setRGB(128 ,128 ,128);
	$estiloLineas3->outlinecolor->setRGB(128 ,128 ,128);
	
	$claseLineas4 = ms_newClassObj($layerLineas);
	$claseLineas4->set("name","Límite Humedal");
	$claseLineas4->setexpression("LAYER96");
	$estiloLineas4 = ms_newStyleObj($claseLineas4);
	$estiloLineas4->color->setRGB(0 ,0 ,255);
	$estiloLineas4->outlinecolor->setRGB(0 ,0 ,255);
	// FIN CREACION DE LAYER - TEMATICO
	
	
	
	
	
	// CREAMOS EL LAYER DE LAS PRESENCIAS
	$layerPoligono = ms_newLayerObj($mapObject);
	$layerPoligono->set( "name", "thiessen");
	$layerPoligono->set( "type", MS_LAYER_POLYGON);
	$layerPoligono->set( "status", MS_ON);
	$layerPoligono->set("transparency", 70);
	$layerPoligono->set("connectiontype",MS_POSTGIS);
	//$layerPoligono->setconnectiontype(MS_POSTGIS);
	$layerPoligono->set("connection",$postgis_db_string);
	$layerPoligono ->set("data",$SQL_ADULTOS);
	$layerPoligono->set("classitem", "no_adultos");

	$clasePoligono_0 = ms_newClassObj($layerPoligono);
	$clasePoligono_0->set("name","No. Salivazos Adultos");
	$clasePoligono_0->setexpression("( ([no_adultos] = -999) )");
	
	$clasePoligono0 = ms_newClassObj($layerPoligono);
	$clasePoligono0->set("name","Sin presencia");
	$clasePoligono0->setexpression("( ([no_adultos] <= 0) )");
	$estiloPoligono0 = ms_newStyleObj($clasePoligono0);
	$estiloPoligono0->color->setRGB(255 , 255, 255);
	$estiloPoligono0->outlinecolor->setRGB(192 ,192 ,192);
	
	
	$clasePoligono1 = ms_newClassObj($layerPoligono);
	$clasePoligono1->set("name","1-3");
	$clasePoligono1->setexpression("( ([no_adultos] > 0)AND ([no_adultos] < 3) )");
	$estiloPoligono1 = ms_newStyleObj($clasePoligono1);
	$estiloPoligono1->color->setRGB(127,255,0);
	$estiloPoligono1->outlinecolor->setRGB(127,255,0);
	
	$clasePoligono2 = ms_newClassObj($layerPoligono);
	$clasePoligono2->set("name","3-7");
	$clasePoligono2->setexpression("( ([no_adultos] >= 3) AND ([no_adultos] < 7) )");
	$estiloPoligono2 = ms_newStyleObj($clasePoligono2);
	$estiloPoligono2->color->setRGB(255,255,0);
	$estiloPoligono2->outlinecolor->setRGB(255,255,0);
	
	$clasePoligono3 = ms_newClassObj($layerPoligono);
	$clasePoligono3->set("name","7-14");
	$clasePoligono3->setexpression("( ([no_adultos] >= 7) AND ([no_adultos] < 14)  ) ");
	$estiloPoligono3 = ms_newStyleObj($clasePoligono3);
	$estiloPoligono3->color->setRGB(255,165,0);
	$estiloPoligono3->outlinecolor->setRGB(255,165,0);
	
	$clasePoligono4 = ms_newClassObj($layerPoligono);
	$clasePoligono4->set("name","14-22");
	$clasePoligono4->setexpression("( ([no_adultos] >= 14) AND ([no_adultos] < 22) )");
	$estiloPoligono4 = ms_newStyleObj($clasePoligono4);
	$estiloPoligono4->color->setRGB(255 ,0 ,0);
	$estiloPoligono4->outlinecolor->setRGB(255 , 0, 0);
	
	
	
	
	
	
	
	
	/*
	// Creamos un Layer  poligono y seteamos sus propiedades 
	$layerPoligono = ms_newLayerObj($mapObject);
	$layerPoligono->set( "name", "lotes_a");
	$layerPoligono->set( "type", MS_LAYER_POLYGON);
	$layerPoligono->set( "status", MS_ON);
	//$layerPoligono->set("connectiontype",MS_POSTGIS);
$layerPoligono->setconnectiontype(MS_POSTGIS);
	$layerPoligono->set("connection",$postgis_db_string);
	$layerPoligono ->set("data","the_geom from (select * from lotes where area > 10 ) as mzyum using unique gid using srid=-1");
	$clasePoligono = ms_newClassObj($layerPoligono);
	$estiloPoligono = ms_newStyleObj($clasePoligono);
	$estiloPoligono->color->setRGB(255, 0,0);
	$estiloPoligono->outlinecolor->setRGB(98 ,0 ,111);
	
	
	// Creamos un Layer  poligono y seteamos sus propiedades 
	$layerPoligono = ms_newLayerObj($mapObject);
	$layerPoligono->set( "name", "buffer");
	$layerPoligono->set( "type", MS_LAYER_POLYGON);
	$layerPoligono->set( "status", MS_ON);
	$layerPoligono->set( "transparency", 20);
	//$layerPoligono->set("connectiontype",MS_POSTGIS);
$layerPoligono->setconnectiontype(MS_POSTGIS);
	$layerPoligono->set("connection",$postgis_db_string);

	//Por aqui capturo mediante POST, el tamaño del buffer a generar.
	
	if(isset($_POST['tamano_buffer']))
	{
		//Si hay un valor asignado lo asigno a una variable que llamo $nuevo_tamano_buffer
		$nuevo_tamano_buffer = $_POST['tamano_buffer'];
		$layerPoligono ->set("data","the_geom from (select gid, buffer(the_geom, $nuevo_tamano_buffer) as the_geom  from pluviometros) as mzyum using unique gid using srid=-1");
	}
else
	{
		//Si no hay un valor asignado uso el que esta por defecto
		$layerPoligono ->set("data","the_geom from (select gid, buffer(the_geom, 200) as the_geom  from pluviometros) as mzyum using unique gid using srid=-1");
	}
	
	
	
	$clasePoligono = ms_newClassObj($layerPoligono);
	$estiloPoligono = ms_newStyleObj($clasePoligono);
	$estiloPoligono->color->setRGB(0 ,0 ,255);
	$estiloPoligono->outlinecolor->setRGB(0 ,0, 0);
	
	*/
	
	
				
	$mapImage = $mapObject->draw();
	$urlImage = $mapImage->saveWebImage();
	
	$mapLegend = $mapObject->drawLegend(); 
	$urlLegend= $mapLegend->saveWebImage(MS_GIF, 0, 0, -1);
 
	
	
	?>