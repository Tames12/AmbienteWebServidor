<?php 
$db = new mysqli("localhost","root","","dbc");
if(isset($_POST['ced'])){
	$cedula = $_POST['ced'];
	$nombre = $_POST['nom'];
	$apellido1 = $_POST['ape1'];
	$apellido2 = $_POST['ape2'];
	$fechanacimiento = $_POST['fec'];
	$estadocivil = $_POST['est'];
	$provincia = $_POST['pro'];
	$canton = $_POST['can'];
	$distrito = $_POST['dis'];
	$consulta = $db->prepare("insert into personas(cedula,nombre,apellido1,apellido2,fechanacimiento,estadocivil,provincia,canton,distrito) values (?,?,?,?,?,?,?,?,?)");
	$consulta->bind_param("sssssssss",$cedula,$nombre,$apellido1,$apellido1,$fechanacimiento,$estadocivil,$provincia,$canton,$distrito);
	$consulta->execute();
	if($consulta->affected_rows>0){
		echo "<h2>Insercion exitosa</h2>";
		echo "<a href='index.php'>Regresar</a>";
	}
	else{
		echo "<h2>Fallo al insertar</h2>";
		echo "<a href='index.php'>Regresar</a>";
	}
} else echo "<a href='index.php'>Regresar</a>";


$db->close();
?>