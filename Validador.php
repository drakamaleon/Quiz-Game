<?php

include ("Preguntas.php");
include ("Pantalla.php");

$pinE = $_POST["PINE"];
$pinP = $_POST["PINP"];
$tipo = $_POST["Tipo"];
$tipoSesion= $_POST["TipoSesion"];
$uProfesor= $_POST["USER"];
$pProfesor= $_POST["PASS"];
if($pProfesor=="123" and $uProfesor=="rasarag"){
    header('Location: InicioProfesor.php');
}elseif($pProfesor!="" and $uProfesor!=""){
        $vera = new Pantalla("ERROR","QG-ERROR");
        $vera->error("Login.php","Ingrese un usuario correcto");
    }
else{
if($pinE!=NULL or $pinP = $_POST["PINP"]){
    if (file_exists($pinE) or file_exists($pinP)) {
        
        session_start();//inicias la sesion 
       
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
        $invalid->error("PaginaInicio.php","Ingrese un PIN valido");
    }
}
else{
    if($tipoSesion=="ESTUDIANTE"){
        header('Location: InicioEstudiante.php');
    }
    if($tipoSesion=="PROFESOR"){
        header('Location: Login.php');
    }
    else{
        $ver = new Pantalla("ERROR", "Opción invalida");
        $ver->error("PaginaInicio.php","Debe seleccionar una opción válida");
        
    }
}}
   

?>
