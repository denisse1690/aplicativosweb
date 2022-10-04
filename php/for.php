<?php 
/*
for ($cont=10; $cont > 0 ; $cont-=2) { 
	echo $cont;
}
*/
$productos = [
	['codigo' => 'A0001', 'desc' => 'Lapiz'],
	['codigo' => 'A0002', 'desc' => 'Borrador'],
	['codigo' => 'A0003', 'desc' => 'Libreta'],
	['codigo' => 'A0004', 'desc' => 'Pluma'],
];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<title>Foreach</title>
</head>
<body>
	<?php 
		//Abrir etiqueta de la tabla
		echo '<table class="striped">';
		//encabezado de la tabla
		echo '<thead class = "teal white-text" 
		<tr>
	 	<th>Codigo</th>
	 	<th>Descripcion</th>
		</tr>
		</thead>
		';
		//Imprimir filas de la tabla
		foreach ($productos as $prod) {
			echo'
				 <tr>
				 	<td>'.$prod["codigo"].'</td>
				 	<td>'.$prod["desc"].'</td>
				 </tr>';
		}
		echo '</table>';
	 ?>
</body>
</html>