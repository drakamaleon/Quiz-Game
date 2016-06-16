<?php

$ping = $_POST["PING"];
if (file_exists($ping)) {
    session_start();//inicas la sesion 
    session_register("preguntas");//registras tu variable de sesion 
    session_register("fila");
    $fp = fopen($ping, "r");
    $preguntas = array();
    $i=0;
    while(!feof($fp)) {
        $linea = fgets($fp);
        $dividido = explode(";", $linea);
        $preguntas[$i]=$dividido;
        $i ++;
    }
    $_SESSION["preguntas"]=$preguntas;
    $_SESSION["fila"]=1;
    //print_r($_SESSION["preguntas"]);
    header('Location: Recibidas.php');
    
} else {
    echo "Archivo no encontrado. Se creó el archivo";
    $fp = fopen($ping, "a");
    header('Location: PaginaInicio.php');
}

?>
