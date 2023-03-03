<?php

include('db_conection.php'); // se llama a la coneccion de la base de datos

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];  //se la llama a la variable igual que en el campo input 

session_start(); // se inicia la secion
$_SESSION['correo'] = $correo;

$peticion = "SELECT*FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena'";

$validacion = mysqli_query($conexion,$peticion);

$array = mysqli_fetch_array($validacion);

if (mysqli_num_rows($validacion) !=1){
    header("location:login.php");
    
}
else{
    header("location:ingresar.html");
}
