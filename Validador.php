<?php

include ("Preguntas.php");
include ("Pantalla.php");

$pin = $_POST["PIN"];
$tipo = $_POST["Tipo"];
$tipoSesion= $_POST["TipoSesion"];
if($pin!=NULL){
    if (file_exists($pin)) {
        session_start();//inicas la sesion 
        session_register("preguntas");
        session_register("fila");
        session_register("pin");
        session_register("Usar");
        session_register("puntaje");
        $fp = fopen($pin, "r");
        $preguntas = array();
        $_SESSION["fila"]=rand(1,2);
        if($tipo =="JUGAR"){
            while(!feof($fp)) {
                $linea = trim(fgets($fp));
                $dividido = explode(";", $linea);
                $opciones= explode(",", $dividido[3]);
                if((string)$_SESSION["fila"]==(string)$dividido[0]){
                    array_push($preguntas, new Pregunta($dividido[0],$dividido[1],$dividido[2],$opciones));
                }
            }
            $_SESSION["iterador"]=0;
            $_SESSION["preguntas"]=$preguntas;
            $_SESSION["pin"]=$pin;
            $_SESSION["puntaje"]=0;
            header('Location: Usuario.php');    
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
}
else{
    if($tipoSesion=="ESTUDIANTE"){
        header('Location: InicioEstudiante.php');
    }
    if($tipoSesion=="PROFESOR"){
        header('Location: InicioProfesor.php');
    }
    else{
        $str="Debe seleccionar una opción valida";
        $str= $str."<body>
            <form action=\"PaginaInicio.php\" method=\"post\" name=\"n\">
                <button type=\"submit\">
                VOLVER
                </button>

            </form>

        </body>";
        $ver = new Pantalla("ERROR", "Opción invalida");
        $ver->setcuerpo($str);
        $ver->mostrar();
    }
}

?>
