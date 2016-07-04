<?php
include ("Pantalla.php");
include ("Preguntas.php");

$respuesta=$_POST["Usar"];
session_start();
$preguntas =$_SESSION["preguntas"];
$i=$_SESSION["iterador"];



if($respuesta!=NULL){
    if($respuesta==$preguntas[$i]->respuesta){
        $str="Felicidades, respuesta correcta";
        $_SESSION["puntaje"]+=5;
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
if($_SESSION["iterador"]<  count($preguntas)){
$str= $str."<body>
            <form action=\"Responder.php\" method=\"post\" name=\"n\">
                <button type=\"submit\">
                CONTINUAR
                </button>

            </form>

        </body>";

}
else{
$str= $str."<body>
            <form action=\"GuardarE.php\" method=\"post\" name=\"n\">
                <button type=\"submit\">
                TERMINAR
                </button>

            </form>

        </body>";

}


$ver = new Pantalla("Resultado", "Correción",false);
$ver->setcuerpo($str);
$ver->mostrar();
