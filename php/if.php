<?php 
$edad = 17;
/*
if ($edad >= 18){
echo "Eres mayor de edad";
}else{
echo "No eres mayor de edad";
}
*/
 ?>
 <?php //echo ($edad >= 18) ? 'Se cumple' : 'No no se cumple'; ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>If</title>
 </head>
 <body>
 	<?php if ($edad >= 18): ?>
 		<h1>Hola eres mayor de edad</h1>
 	<?php else: ?>
 		<table width="100%" border="5px;">
 			<tr>
 				<td>Hola</td>
 				<td>esto</td>
 				<td>es</td>
 				<td>una</td>
 				<td>prueba</td>
 			</tr>
 		</table>
 	<?php endif ?>
 </body>
 </html>