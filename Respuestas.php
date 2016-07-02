<?php
@session_start;
include ("Pantalla.php");
if($_POST["opciones"]!="" and $_POST["pregunta"]!="" and $_POST["fila"]!="" ){
     $_SESSION["pregunta"]=$_POST["pregunta"];
     $_SESSION["fila"]=$_POST["fila"];
     $opr= explode("\n",$_POST["opciones"]);
     

     $opc = array_values(array_unique($opr));
     if(count($opc)<2){
          $ver = new Pantalla("ERROR","QG-ERROR");
          $ver->error("Llenar.php","Ingrese al menos 2 opciones");
     }
     else{
          $_SESSION["opciones"] = $opc;
          $str="";
          
          $resp=new Pantalla("Respuesta", "QG-Respuesta");
          for ($k=0;$k<count($opc);$k+=1){
             $opcion=$opc[$k];
             $str=$str."<input type=\"radio\" name=\"respuesta\" value=\"".$opcion."\"/>".$opcion."<br>";
          }
         
         $seleccion = "<input type=\"radio\" name=\"select\" value=\"Continuar\"checked=\"checked\"/>CONTINUAR<br>";
         
         if(count($_SESSION["cuestionario"])>2){
              $seleccion = $seleccion."<input type=\"radio\" name=\"select\" value=\"Terminar\"/>TERMINAR<br>";
         }
         
         $form="<form action=\"ValProfesor.php\" method=\"post\" name=\"frm\">Seleccione la respuesta correcta<br>"
          
                 .$str."<br>".$seleccion.
                "<button type=\"submit\">
                 IR
                 </button>
                 
         </form>";
         
         $resp->setcuerpo($form);
         $resp->mostrar();
}
     }
     

else{
     $ver = new Pantalla("ERROR","QG-ERROR");
     $ver->error("Llenar.php","Ingrese todos los campos");
}