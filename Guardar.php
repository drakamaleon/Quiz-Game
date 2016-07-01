<?php

include ("Pantalla.php");
@session_start();
$ar =$_SESSION["pinE"]."P";
$nombre = $_SESSION["nombre"];
$puntaje = $_SESSION["puntaje"];
$fila= $_SESSION["fila"];
$fp = fopen($ar, "a");
$escribir = strtoupper($nombre).";".$puntaje.";".$fila;

fwrite($fp, $escribir . PHP_EOL);

$mostrar= "<ul>"
.    "<li>".$nombre."</li>"
.    "<li>Puntaje: ".$puntaje."</li>"
.    "<li>Fila: ".$fila."</li>"
        . "</ul>";

$ver = new Pantalla(strtoupper($nombre),"Finalizado");
$ver->setcuerpo($mostrar);
$ver->mostrar();