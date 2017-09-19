<?php
if(isset($_POST['diametro'])){
	$diametro = $_POST['diametro'];

	$radio = $diametro / 2;
	$area = 3.1416 * pow($radio,2);

	$circunferencia = 3.1416 * $diametro;

	echo "El area del circulo es: $area <br>";
	echo "La circunferencia del circulo es: $circunferencia <br>";

}
echo "<a href='ejercicio4.html'>Regresar</a>";

?>