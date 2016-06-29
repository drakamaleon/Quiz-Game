<?php
echo "Voy a guardar";
@session_start();
$ar =$_SESSION["ping"]."P";
$nombre = $_SESSION["nombre"];
$puntaje = $_SESSION["puntaje"];
$fila= $_SESSION["fila"];
$fp = fopen($ar, "a");
$escribir = strtoupper($nombre).";".$puntaje.";".$fila;

fwrite($fp, $escribir . PHP_EOL);

echo "<ul>"
.    "<li>".$ar."</li>"
.    "<li>".$nombre."</li>"
.    "<li>".$puntaje."</li>"
.    "<li>".$fila."</li>"
        . "</ul>";
?>