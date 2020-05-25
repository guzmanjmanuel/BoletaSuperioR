
<?php
require_once "conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT * from usuarios ";
$result=mysqli_query($conexion,$sql);


echo $result
?>