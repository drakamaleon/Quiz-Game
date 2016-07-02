<?php
include "Pantalla.php";
@session_start();//inicas la sesion  usas la variable 
if($_POST["Nombre"]!=""){
     $_SESSION["nombre"]= $_POST["Nombre"];
     header('Location: Responder.php');
}
else{
     $ver = new Pantalla("ERROR","ERROR");
     $ver ->error("Usuario.php","Ingrese un nombre de usuario");
}
