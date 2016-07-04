<?php
include("Pantalla.php");
include("Preguntas.php");
@session_start();

$fp =fopen($_SESSION["pinG"],"a");
     foreach ($_SESSION["cuestionario"] as $preg){
          fwrite($fp, $preg . PHP_EOL);
     }
     
$mostrar="El PIN DE SU SESSION ES:".$_SESSION["pinG"];
$ver = new Pantalla("PIN DE LA SESION","Finalizado");
$ver->setcuerpo($mostrar);
$ver->mostrar();