<?php 
/*
Operadores aritmeticos
suma +
resta -
mutiplacion *
division /
modulo % ---- residuo
Operadores Loggicos
Y && AND Cuando todas las condiones se cumplan (TRUE)
O || OR Cuando una de las dos expresiones es verdadera (TRUE)
No ! 
*/

$num1 = 3;
$num2 = 4;
$expresion1 = $num1 >= $num2; //false

$var1 = 2;
$var2 = 2;
$expresion2 = $var1 == $var2; //false

$res = $expresion1 || $expresion2;

var_dump(!$expresion1);



 ?>