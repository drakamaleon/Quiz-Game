<?php
@session_start();//inicas la sesion  usas la variable 
$_SESSION["nombre"]= $_POST["Nombre"];
header('Location: Responder.php');
