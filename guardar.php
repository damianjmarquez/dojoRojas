<?php
include("db_conection.php");// se llama a la coneccion de la base de datos


$Usuario = $_POST["Usuario"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];
$guardar = "INSERT INTO usuarios (nombre_usuario, correo, contrasena) values ('$Usuario', '$correo', '$contrasena')";

$validacion = mysqli_query($conexion,$guardar);

if ($validacion){
    header('location:login.php');
};