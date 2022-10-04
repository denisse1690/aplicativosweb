<?php 
 //$semana = array("Lunes","Martes","Miercoles");
				//(  0  ,     1    ,    2);

 $semana = []; //declarando vacio

 $semana[]= "Lunes";//0
 $semana[]= "Martes";//1
 $semana[]= "Miercoles";//2
$semana[2] = "Mie";

//var_dump($semana);
/*
$alumnos = array('nombre' => 'Denisse', 'edad' => 32, 'grupo' => 'a' );

$alumnos['nombre'] = "Carolina";

echo $alumnos['nombre'];


$galaxia = array("Venus","Tierra","Marte");

unset($galaxia[1]);

$galaxia[] = "Tierra";

var_dump($galaxia);
*/

$inventario =[
	12345678 => [
		'producto'=> "Camisa polo",
		'precio'=> 119.99,
		'piezas'=> 10
	],
	64895906 => [
		'producto'=> "Calcetines sport",
		'precio'=> 19.99,
		'piezas'=> 5
	],
	75890754 =>[
		'producto'=> "Pantalon mezclilla dama",
		'precio'=> 299.90,
		'piezas'=> 8
	]

];

echo $inventario[75890754]['producto'];

 ?>