<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include('bd.php');

$numeroacta=$_POST['txtNumero'];
$lugar=$_POST['txtLugar'];
$fecha=$_POST['txtFecha'];
$horaI=$_POST['txtHoraI'];
$horaF=$_POST['txtHoraF'];
$covocador=$_POST['txtConvocador'];
$tematica=$_POST['txtTematica'];


$consulta="INSERT INTO `personal` ( `Número de acta`, `Lugar`, `Fecha`, `HoraI`, `HoraF`, `Convocador`, `Tematica`)
 VALUES ('$numeroacta', '$lugar', '$fecha', '$horaI', '$horaF', '$covocador', '$tematica')";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo "registro exitoso";

mysqli_close($conexion);





?>