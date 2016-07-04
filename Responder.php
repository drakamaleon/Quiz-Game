<?php
include ("Pantalla.php");
include ("Preguntas.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$preguntas =$_SESSION["preguntas"];
$i=$_SESSION["iterador"];

function mostrarPregunta($pregunta,$i){
    $str="";
    $opciones=$pregunta->opciones;
    $resp=new Pantalla("".$i.":".$pregunta->pregunta, "QG-Fila".$pregunta->fila." Preg ".$i,false);
    for ($k=0;$k<count($opciones);$k+=1){
        $opcion=$opciones[$k];
        $str=$str."<input type=\"radio\" name=\"Usar\" value=\"".$opcion."\"/>".$opcion."<br>";
    }
    
    $resp->setcuerpo("<form action=\"Correccion.php\" method=\"post\" name=\"frm\">"
            .$str.
           "<button type=\"submit\">
            Responder
            </button>
            
    </form>");
    
    $resp->mostrar();
}


$question=$preguntas[$i];
mostrarPregunta($question,$i+1);

