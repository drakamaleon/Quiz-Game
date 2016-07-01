<?php
include "Pantalla.php";
@session_start();//inicas la sesion  usas la variable 
if($_POST["Nombre"]!=""){
     $_SESSION["nombre"]= $_POST["Nombre"];
     header('Location: Responder.php');
}
else{
     $ver = new Pantalla("ERROR","ERROR");
     $str ="Ingrese un nombre de usuario";
     $str =$str."<form action=\"Usuario.php\" method=\"post\" name=\"frm\">
          <button type=\"submit\">
            VOLVER
            </button> 
        </form>";
     $ver->setcuerpo($str);
     $ver->mostrar();
     
     
}
