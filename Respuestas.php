<?php

include ("Pantalla.php");
@session_start();
$opp =$_POST["opciones"];
$preg =$_POST["pregunta"];
$fil = $_POST["fila"];
if($opp!="" and $preg!="" and $fil!="" ){
     $_SESSION["preguntas"]=substr($preg,0);
     $_SESSION["filas"]=substr($fil,0);;
     $opp= explode("\n",$opp);
     

     $opp = array_values(array_unique($opp));
     if(count($opp)<2){
          $ver = new Pantalla("ERROR","QG-ERROR");
          $ver->error("Llenar.php","Ingrese al menos 2 opciones");
     }
     else{
          $_SESSION["opciones"] =$opp;
          $str="";
          
          $resp=new Pantalla("Respuesta", "QG-Respuesta");
          for ($k=0;$k<count($opp);$k+=1){
             $opcion=$opp[$k];
             $str=$str."<input type=\"radio\" name=\"respuesta\" value=\"".$opcion."\"/>".$opcion."<br>";
          }
         
         $seleccion = "<input type=\"radio\" name=\"op\" value=\"Continuar\"checked=\"checked\"/>CONTINUAR<br>";
         
         if(count($_SESSION["cuestionario"])>2){
              $seleccion = $seleccion."<input type=\"radio\" name=\"op\" value=\"Terminar\"/>TERMINAR<br>";
         }
         
         $form="<form action=\"ValProfesor.php\" method=\"post\" name=\"frm\">Seleccione la respuesta correcta<br>"
          
                 .$str."<br>".$seleccion.
                "<button type=\"submit\">
                 IR
                 </button>
                 
         </form>";
         
         $resp->setcuerpo($_SESSION["preguntas"]."<br>".$fil."<br>".$form);
         $resp->mostrar();
     }
     
}
     

else{
     $ver = new Pantalla("ERROR","QG-ERROR");
     $ver->error("Llenar.php","Ingrese todos los campos");
}