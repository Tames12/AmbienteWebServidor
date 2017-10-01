<?php 
echo "<h1>Lista de personas</h1>";
$db = new mysqli("localhost","root","","dbc");
$sql = "select * from personas";
$consulta = $db->query($sql);
if($consulta===FALSE){
	echo "<h2>Error. " .$db->error. "</h2>";
}
$contador = 0;
$tabla = '<table style="border-collapse: collapse;">';
while($fila=$consulta->fetch_assoc()){
	$contador++;
	$link = "detalles.php?cedula=".$fila['cedula'];
	$nombre = $fila['nombre']." ".$fila['apellido1'];
	
	$tabla = $tabla.'<tr>';

		$tabla = $tabla.'<td>';
			$tabla = $tabla.$contador.'- '.$nombre.'';
		$tabla = $tabla.'</td>';
		$tabla = $tabla.'<td style="padding-left:10px;">';
			$tabla = $tabla.'<a href="'.$link.'">-Ver</a><br>';
		$tabla = $tabla.'</td>';

	$tabla = $tabla.'</tr>';
	
}
$tabla = $tabla.'</table>';
echo $tabla;
echo "<a href='crear.php'>Crear</a>";
$db->close();
?>
