<?php
$hostname='localhost';
$database='developeredbull';
$username='root';
$password='';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "lo sentimos, el sitio web esta experimentando problemas";
}
?>