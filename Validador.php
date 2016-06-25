<?php

include ("Preguntas.php");
include ("Responder.php");
$pin = $_POST["PIN"];
$tipo = $_POST["Tipo"];
if (file_exists($pin)) {
    session_start();//inicas la sesion 
    session_register("preguntas");
    session_register("fila");
    session_register("pin");
    session_register("Usar");
    $fp = fopen($pin, "r");
    $preguntas = array();
    $i=0;
    if($tipo =="JUGAR"){
        while(!feof($fp)) {
            $linea = fgets($fp);
            $dividido = explode(";", $linea);
            $preguntas[$i]=new Pregunta($dividido[0],$dividido[1],$dividido[2],$dividido[3]);
            $i ++;
        }
        $_SESSION["preguntas"]=$preguntas;
        $_SESSION["pin"]=$pin;
        $_SESSION["fila"]=rand(1,2);
    
        header('Location: Jugador.php');
        foreach($preguntas as $pregunta) 
        { 
            mostrarPregunta($pregunta);
        }
    }
    else{
        $_SESSION["Usar"]="";
        header('Location: Puntajes.php');
    }
    
} else {
    $invalid=new Pantalla("PIN NO VÁLIDO", "QG-Invalid PIN");
    $invalid->setcuerpo("<body>
        <form action=\"PaginaInicio.php\" method=\"post\" name=\"n\">
            <button type=\"submit\">
            VOLVER
            </button>
            
        </form>
        
    </body>");
    $invalid->mostrar();
    
}

?>
