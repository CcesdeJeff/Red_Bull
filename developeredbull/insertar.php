<?php
include 'conexion.php';
$Id=$_POST['Id'];
$Nombre=$_POST['Nombre'];
$Correo=$_POST['Correo'];
$Contrasenia=$_POST['Contrasenia'];
$CantidadAdultos=$_POST['CantidadAdultos'];
$CantidadNinos=$_POST['CantidadNinos'];
$Fecha=$_POST['Fecha'];

$consulta="insert into nombre values('".$Id.="','".$Nombre."','".Correo."','".Contrasenia."','".CantidadAdultos."','".CantidadNinos."','".Fecha."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);

?>