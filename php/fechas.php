<?php 
 date_default_timezone_set('America/Mexico_City');
 /*
$date1 = date_create('16-09-1990');
$date2 = date_create();
$intervalo = date_diff($date1,$date2);
echo $intervalo->format('%Y años %m meses %d dias');
*/
$fecha = date_create('2022-01-01');
date_add($fecha,date_interval_create_from_date_string("-6 year"));
echo date_format($fecha,"d-m-Y");
 ?>