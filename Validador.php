<?php

include ("Preguntas.php");
include ("Pantalla.php");

$pinE = $_POST["PINE"];
$pinP = $_POST["PINP"];
$tipo = $_POST["Tipo"];
$tipoSesion= $_POST["TipoSesion"];
if($pinE!=NULL or $pinP = $_POST["PINP"]){
    if (file_exists($pinE) or file_exists($pinP)) {
        
        session_start();//inicas la sesion 
       
        if($tipo =="JUGAR"){
            $fp = fopen($pinE, "r");
            $preguntas = array();
            $_SESSION["fila"]=rand(1,2);
            $_SESSION["pinE"]=$pinE;
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
            $_SESSION["puntaje"]=0;
            header('Location: Usuario.php');    
        }
        else{
            $_SESSION["Usar"]="";
            $_SESSION["pinP"]=$pinP;
            $_SESSION["puntaje"]="";
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
