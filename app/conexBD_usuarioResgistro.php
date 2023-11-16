<?php 
//importamos la conexion;
require_once("conexion.php");
//variables
$nombre_usuario = $_POST['nombreU'];
$correo_usuario = $_POST['correoU'];
$clave_usuario = $_POST['claveU'];
$roles_usuario = $_POST['rolesU'];

// echo $nombre_usuario . "_____". $correo_usuario . "<br>";
// echo $clave_usuario . "_____". $roles_usuario;


$sql = "INSERT INTO usuario(name_user,email_user,password_user,roles_user) VALUES('$nombre_usuario','$correo_usuario','$clave_usuario','$roles_usuario')";

$resultado = $conexion->query($sql) or die($conexion->connect_error);

if($resultado){
    echo "Registro insertado exitosamente.";
} else {
    echo "Error: " .$conexion->error;
}
$conexion->close();
?>