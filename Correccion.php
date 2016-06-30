<?php
include ("Pantalla.php");
include ("Preguntas.php");

$respuesta=$_POST["Usar"];
session_start();
$preguntas =$_SESSION["preguntas"];
$i=$_SESSION["iterador"];



if($respuesta!=NULL){
    if($respuesta==$preguntas[$i]->respuesta){
        $str="Felicidades tuvo la respuesta correcta";
        $_SESSION["iterador"]+=1;
        
    }
    else{
        $str="Lo lamento se equivocó";
        $_SESSION["iterador"]+=1;
    }
}
else{
    $str = "Error debe elegir una opción";
}
$str= $str."<body>
            <form action=\"Responder.php\" method=\"post\" name=\"n\">
                <button type=\"submit\">
                VOLVER
                </button>

            </form>

        </body>";

$ver = new Pantalla("Resultado", "Correción");
$ver->setcuerpo($str);
$ver->mostrar();
