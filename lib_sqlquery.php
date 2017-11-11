<?php 

  $SQL_PMUESTREO="the_geom FROM (select the_geom,id_sig,muestreo,gid  from puntos_muestreo )  as puntos using unique gid using SRID=-1";
	
  $SQL_ADULTOS="the_geom FROM (select buffer(p.the_geom,10) as the_geom ,p.muestreo,p.id_sig,p.gid,m.no_adultos from puntos_muestreo as p,muestreo as m, fechas as f where p.id_sig = m.id_sig and m.id_fecha=f.id_fecha and f.fecha = '".$fecha_seleccionada."' )  as puntos using unique gid using SRID=-1";	
?>