<?php 
$numero = 0;
/*
if ($numero == 1) {
	echo "Numero vale 1";
}elseif ($numero == 2) {
	echo "Numero vale 2";
}elseif ($numero == 3){
	echo "Numero vale 3";
}else{
	echo "Numero vale.....";
}
*/

switch ($numero) {
	case 1:
		echo "Numero vale a";
		break;
	case 2:
		echo "Numero vale 2 desde switch";
		break;
	case 3:
		echo "Numero vale 3";
		break;
	default:
		echo "Numero vale...";
		break;
}

 ?>