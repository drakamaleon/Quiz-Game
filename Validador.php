<?php

$ping = $_POST["PING"];
if (file_exists($ping)) {
    session_start();//inicas la sesion 
    session_register("preguntas");//registras tu variable de sesion 
    session_register("fila");
    session_register("ping");
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
    $_SESSION["ping"]=$ping;
    $_SESSION["fila"]=rand(1,2);
    //print_r($_SESSION["preguntas"]);
    header('Location: Jugador.php');
    
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
