<?php
include ("Validador.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

function mostrarPregunta($pregunta,$i){
    $str="";
    $opciones=$pregunta->opciones;
    $resp=new Pantalla("".$i.":".$pregunta->pregunta, "QG-".$pregunta->fila."Preg ".$i);
    for ($k=0;$k<count($opciones);$k+=1){
        $opcion=$opciones[$k];
        $str=$str."<input type=\"radio\" name=\"Usar\" value=\"".$opcion."\" checked=\"checked\" />".$opcion."<br>";
    }
    
    $resp->setcuerpo("<form action=\"Correccion.php\" method=\"post\" name=\"frm\">"
            .$str.
           "<input type=\"submit\" name =\"RESPONDER\"/>
            
    </form>");
    
    $resp->mostrar();
}
$i=1;
$questions=$preguntas;
if($_SESSION["fila"]==1){
    for($j=0;$j<(count($questions))/2;$j+=1) 
            { 
                mostrarPregunta($questions[$j],$i);
                $i+=1;
            }
}
 else {
    if($_SESSION["fila"]==2){
            for($j=(count($questions))/2;$j<count($questions);$j+=1){ 
                mostrarPregunta($questions[$j],$i);
                $i+=1;
            }
     }
 }
