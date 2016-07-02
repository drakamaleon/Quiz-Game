<?php
include ("Preguntas.php");
include ("Pantalla.php");
@session_start();

$bandera =true;
$pregunta=$_SESSION["preguntas"];
$opciones=$_SESSION["opciones"];
$op=$_POST["op"];
$respuesta=$_POST["respuesta"];
$fila=$_SESSION["filas"];

while($bandera and $_SESSION["pinG"]==0){
     $numero=rand(100,999);
     $archivo ="".$numero;
     if(!file_exists($archivo)){
          $_SESSION["pinG"]=$numero;
     }
     
}
if($pregunta==null){
     
     header("Location: Llenar.php");
}
elseif($pregunta!="" and $fila!="" and $respuesta!=null){
     array_push($_SESSION["cuestionario"],new Pregunta($fila,$pregunta,$respuesta,$opciones));
     if($op=="Terminar"){
     header("Location: Guardar.php");
     }
     elseif ($op=="Continuar") {
          header("Location: Llenar.php");
     }    
     
     
}else{
     $ver = new Pantalla("ERROR","ERROR");
     $ver->error("Llenar.php","Ingrese una pregunta correcta");
}