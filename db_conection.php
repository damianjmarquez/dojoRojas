<?php

$conexion = mysqli_connect("localhost", "root", "", "loginKarate");//creamos la coneccion de base de datos

if ($conexion){
    echo "la conexion de base de datos se ha realizado";
}
else{
    echo"ha ocurrido un error en la base de datos";
}