<?php

include ("Pantalla.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function mostrarPregunta($pregunta){
    $str="";
    $resp=new Pantalla("PREGUNTA 1", "QG-".$pregunta->fila."Preg 1");
    foreach (($pregunta->opciones) as $opcion){
        $str=$str."<input type=\"radio\" name=\"Usar\" value=\"".$opcion."\" checked=\"checked\" /> PUNTAJES<br>";
    }
    
    $resp->setcuerpo("<form action=\"Validador.php\" method=\"post\" name=\"frm\">"
            .$str.
           "<input type=\"submit\" name =\"RESPONDER\"/>
            
    </form>");
    
    $resp->mostrar();
}

