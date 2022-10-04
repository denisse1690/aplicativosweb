<?php 
/*
***EXPLODE***
$pizza = "porcion1 porcion2 porcion3 porcion3";
$porciones = explode(" ", $pizza);
echo $porciones[1];
$datos = "root:123";
list($user,$pass) = explode(":", $datos);
echo $pass;
***implode()***
$array = ['apellido','correo','cel'];
var_dump(implode(":", $array));
var_dump(implode(['a','b','c']));
***lcfirst()***
$mensaje = 'Hola Mundo';
echo lcfirst($mensaje);
***ucfirst()***
$mensaje = 'hola mundo';
echo ucfirst($mensaje);
***ucwords()
$mensaje = 'hola mundo';
echo ucwords($mensaje);
***ltrim()***
$mensaje = ' Esto es un mensaje de prueba';
echo ltrim($mensaje);
***rtrim()**
realiza una comparacion y eliminacion de espacion en blanco u otros caracteres al final de la cadena
***trim()***
realiza una comparacion y eliminacion de espacion en blanco u otros caracteres del inicio y el final de la cadena
***number_format()***
$num = 1999.99;
echo number_format($num,1,".","");
***print()***
print("Hola mundo");
print"print() tambien funciona sin parentesis";
print"para escapar caracteres se \"hace asi\".";
***sha1()***
$cadena = "HolaMundo";
echo sha1($cadena);
***similar_text()***
$var1 = 'Haz lo posible';
$var2 = 'Hazlo posible';
similar_text($var1, $var2, $porciento);
echo $porciento;
***str_repeat()***
echo str_repeat("-/", 10);
***str_replace()***
$frase = "deberias comer frutas, verduras y fibra todos los dias.";
$saludable = array("frutas","verduras","fibra");
$cambio = array("pizza","cerveza","helado");
$nueva_frase = str_replace($saludable, $cambio, $frase);
echo $nueva_frase;
***str_shuffle()***
$cadena = 'abc123';
$desordenada = str_shuffle($cadena);
echo $desordenada;
***str_split()***
$cadena = 'Hola amigos';
$arr1 = str_split($cadena);
$arr2 = str_split($cadena,3);
print_r($arr2);
***strlen()**
$str = "abcdef";
echo strlen($str);
***strpos()**
$mistring = 'abc';
$buscar = 'c';
$x = strpos($mistring, $buscar);
echo $x;
***strtolower()**
$mensaje = "HOLA";
echo strtolower($mensaje);
***strtoupper()***
$mensaje = "hola";
echo strtoupper($mensaje);
***substr()***
$rest = substr("abcdef", -3);
echo $rest;
***utf8_decode()***
convertir un string desde UTF-8 a ISO-8859-1
***utf8_encode()***
convertir un string desde ISO-8859-1 a UTF-8 
*/

 ?>