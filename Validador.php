<?php

include ("Pantalla.php");

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
            $preguntas[$i]=$dividido;
            $i ++;
        }
        $_SESSION["preguntas"]=$preguntas;
        $_SESSION["pin"]=$pin;
        $_SESSION["fila"]=rand(1,2);
    
        header('Location: Jugador.php');}
    else{
        $_SESSION["Usar"]="";
        header('Location: Puntajes.php');
    }
    
} else {
    echo "<br>";
    echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n".
                "</head>\n" .
                "<style>\n" .
                "body{font-family:Georgia;\n" .
                "background: #ffffff;\n" .
                "background: -moz-linear-gradient(left, #ffffff 0%, #ffffff 9%, #b7deed 52%, #ffffff 90%, #ffffff 100%);\n" .
                "background: -webkit-gradient(left top, right top, color-stop(0%, #ffffff), color-stop(9%, #ffffff), color-stop(52%, #b7deed), color-stop(90%, #ffffff), color-stop(100%, #ffffff));\n" .
                "background: -webkit-linear-gradient(left, #ffffff 0%, #ffffff 9%, #b7deed 52%, #ffffff 90%, #ffffff 100%);\n" .
                "background: -o-linear-gradient(left, #ffffff 0%, #ffffff 9%, #b7deed 52%, #ffffff 90%, #ffffff 100%);\n" .
                "background: -ms-linear-gradient(left, #ffffff 0%, #ffffff 9%, #b7deed 52%, #ffffff 90%, #ffffff 100%);\n" .
                "background: linear-gradient(to right, #ffffff 0%, #ffffff 9%, #b7deed 52%, #ffffff 90%, #ffffff 100%);\n" .
                "filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff', GradientType=1 );\n" .
                "}\n" .
                "#titulo { background-color: #68FFDB ; color:purple; width: 300px}\n" .
                ".importante { background-color: #00B499	 ; color:white;}\n" .
                "#lista { margin: 30px; font-family:Arial}\n" .
                "#categoria { color:red; }\n".
                "\n" .
                "</style>\n" .
                "<body>\n" .
                "<div class=\"importante\" style= height:60px>\n" .
                "<h1>PIN INVALIDO</h1>\n" .
                "</div>\n" .
                "<hr>\n";
    echo "<body>
        <form action=\"PaginaInicio.php\" method=\"post\" name=\"n\">
            <button type=\"submit\">
            VOLVER
            </button>
            
        </form>
        
    </body>";
    
}

?>
