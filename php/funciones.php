<?php 
/*
function mi_primer_funcion($nombre){
	echo "Hola $nombre";
}

mi_primer_funcion('a todos');
*/
/*
function suma($num1,$num2){
$res = $num1+$num2;
echo "El resultado de la suma es $res";
}
suma(20,3);
*/
/*
 function mayusculas(&$valor){
$valor = strtoupper($valor);
 }

 $texto = 'aplicativos web';
 mayusculas($texto);
 echo $texto;
*/
/*
function ejemplo(){
	global $nombre;
	$nombre ='Juan';
}

ejemplo();
echo $nombre;
*/
/*
function incrementar(){
	static $num;
	$num++;
	echo $num.'<br>';
}

incrementar();
incrementar();
*/
/*
function calculadora($n1,$n2,$opc){
	$res = 0;
	if ($opc == 'Sumar') {
		$res = $n1+$n2;
	}elseif ($opc == 'Restar') {
		$res = $n1-$n2;
	}elseif($opc == 'Multiplicar'){
		$res = $n1*$n2;
	}

	return $res; //devolver el resultado
	echo "No pasa nada con esto...";
}

//$x = calculadora(3,4,'Restar');
//echo $x;

echo calculadora(8,4,'Restar');
*/


function principal(){
	function subfuncion(){
		echo "Me encuentro en la segunda funcion";
	}
}

principal();
subfuncion();

 ?>



