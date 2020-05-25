<?php 
require_once 'conexion.php';

if(isset ($_POST)){
$dui=trim($_POST['dui']);
$pass=trim($_POST['pass']);
$sql ="SELECT * FROM USUARIOS WHERE DUI = '$dui' AND CODIGO='$pass'";
$login = mysqli_query($conexion,$sql);
if($login && mysqli_num_rows ($login)==1){
$usuario=mysqli_fetch_assoc($login);
session_start();
$_SESSION['usuario']=$usuario;
header('location: inicio.php');
}else{
$_SESSION['error_login']="login_incorrecto";
header('location: ../index.php');
}

 
 
}else
{
  //  $_SESSION['error_login']="login_incorrecto";
 
}


        ?>