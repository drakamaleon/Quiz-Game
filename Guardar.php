<?php
echo "Voy a guardar";
@session_start();
$ar =$_SESSION["ping"]."J";
$nombre = $_SESSION["nombre"];
$puntaje = $_SESSION["puntaje"];
$fila= $_SESSION["fila"];

echo "<ul>"
.    "<li>".$ar."</li>"
.    "<li>".$nombre."</li>"
.    "<li>".$puntaje."</li>"
.    "<li>".$fila."</li>"
        . "</ul>";
?>