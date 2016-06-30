<?php
@session_start();//inicas la sesion  usas la variable 
session_register("nombre");
$_SESSION["nombre"]= $_POST["Nombre"];
header('Location: Responder.php');
