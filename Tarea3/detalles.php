<h1>Detalles de persona</h1>
<?php 
$db = new mysqli("localhost","root","","dbc");
if(isset($_GET['cedula'])){
	$cedula = $_GET['cedula'];
	$consulta = $db->prepare("select * from personas where cedula=?");
	$consulta->bind_param("i",$cedula);
	$consulta->execute();
	$filas = $consulta->get_result();
	$miFila = $filas->fetch_assoc();


	$tabla = '<table style="border-collapse: collapse;">';
	$tabla = $tabla.'<thead>';
	$tabla = $tabla.'<tr style="border: 1px solid;">';
		$tabla = $tabla.'<th style="border: 1px solid;">Cedula</th>';
		$tabla = $tabla.'<th style="border: 1px solid;">Nombre</th>';
		$tabla = $tabla.'<th style="border: 1px solid;">Apellido1</th>';
		$tabla = $tabla.'<th style="border: 1px solid;">Apellido2</th>';
		$tabla = $tabla.'<th style="border: 1px solid;">Fecha Nacimiento</th>';
		$tabla = $tabla.'<th style="border: 1px solid;">Estado Civil</th>';
		$tabla = $tabla.'<th style="border: 1px solid;">Provincia</th>';
		$tabla = $tabla.'<th style="border: 1px solid;">Canton</th>';
		$tabla = $tabla.'<th style="border: 1px solid;">Distrito</th>';
	$tabla = $tabla.'</tr>';
	$tabla = $tabla.'</thead>';
	$tabla = $tabla.'<tr style="border: 1px solid;">';

		$tabla = $tabla.'<td style="border: 1px solid;"">';
			$tabla = $tabla.$miFila['cedula'];
		$tabla = $tabla.'</td>';
		$tabla = $tabla.'<td style="padding-left:10px;border: 1px solid;">';
			$tabla = $tabla.$miFila['nombre'];
		$tabla = $tabla.'</td>';
		$tabla = $tabla.'<td style="padding-left:10px;border: 1px solid;">';
			$tabla = $tabla.$miFila['apellido1'];
		$tabla = $tabla.'</td>';
		$tabla = $tabla.'<td style="padding-left:10px;border: 1px solid;">';
			$tabla = $tabla.$miFila['apellido2'];
		$tabla = $tabla.'</td>';
		$tabla = $tabla.'<td style="padding-left:10px;border: 1px solid;">';
			$tabla = $tabla.$miFila['fechanacimiento'];
		$tabla = $tabla.'</td>';
		$tabla = $tabla.'<td style="padding-left:10px;border: 1px solid;">';
			$tabla = $tabla.$miFila['estadocivil'];
		$tabla = $tabla.'</td>';
		$tabla = $tabla.'<td style="padding-left:10px;border: 1px solid;">';
			$tabla = $tabla.$miFila['provincia'];
		$tabla = $tabla.'</td>';
		$tabla = $tabla.'<td style="padding-left:10px;border: 1px solid;">';
			$tabla = $tabla.$miFila['canton'];
		$tabla = $tabla.'</td>';
		$tabla = $tabla.'<td style="padding-left:10px;border: 1px solid;">';
			$tabla = $tabla.$miFila['distrito'];
		$tabla = $tabla.'</td>';

	$tabla = $tabla.'</tr>';
		
	
	$tabla = $tabla.'</table>';
	echo $tabla;
	echo "<a href='index.php'>Regresar</a>";

} else echo "<a href='index.php'>Regresar</a>";

$db->close();
 ?>