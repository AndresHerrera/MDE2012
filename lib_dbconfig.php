<?php
	$postgis_db_string="user=postgres password=fromsky dbname=mde host=localhost";
	
	$connection_postgres = "host=localhost port=5432 dbname=mde user=postgres password=fromsky";
	$obj_conexdb=pg_connect($connection_postgres);
?>