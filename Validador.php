<?php

$ping = $_POST["PING"];
$tipo = $_POST["Tipo"];
if (file_exists($ping)) {
    session_start();//inicas la sesion 
    session_register("preguntas");
    session_register("fila");
    session_register("ping");
    session_register("Usar");
    $fp = fopen($ping, "r");
    $preguntas = array();
    $i=0;
    if($tipo =="JUGAR"){
        while(!feof($fp)) {
            $linea = fgets($fp);
            $dividido = explode(";", $linea);
            $preguntas[$i]=$dividido;
            $i ++;
        }
        $_SESSION["preguntas"]=$preguntas;
        $_SESSION["ping"]=$ping;
        $_SESSION["fila"]=rand(1,2);
    
        header('Location: Jugador.php');}
    else{
        $_SESSION["Usar"]="";
        header('Location: Puntajes.php');
    }
    
} else {
    echo "<br>";
    echo "PING INVALIDO";
    echo "<body>
        <form action=\"PaginaInicio.php\" method=\"post\" name=\"n\">
            <button type=\"submit\">
            VOLVER
            </button>
            
        </form>
        
    </body>";
    
}

?>
