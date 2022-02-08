<?php

include('bd.php');

$ID=$_POST['txtID'];
mysqli_query($conexion,"DELETE FROM personal where ID='$ID'")or die("error al eliminar");

mysqli_close($conexion);
header("location:mostrar.php");

?>