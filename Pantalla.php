<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Pantalla{
    public $encabezado;
    public $cuerpo;
    public $TituloI;
    public $TituloD;
    public $piePagina;
    function __construct($Crear,$nomPestanha,$bandera){
        $tituloPrincipal="<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n".
              "</head>\n" .
              "<style>\n" .
              "body{font-family:Georgia;\n" .
              "background: #ffffff;\n" .
              "background: -moz-linear-gradient(left, #ffffff 0%, #ffffff 9%, #b7deed 52%, #ffffff 90%, #ffffff 100%);\n" .
                "background: -webkit-gradient(left top, right top, color-stop(0%, #ffffff), color-stop(9%, #ffffff), color-stop(52%, #b7deed), color-stop(90%, #ffffff), color-stop(100%, #ffffff));\n" .
             "background: -webkit-linear-gradient(left, #ffffff 0%, #ffffff 9%, #b7deed 52%, #ffffff 90%, #ffffff 100%);\n" .
              "background: -o-linear-gradient(left, #ffffff 0%, #ffffff 9%, #b7deed 52%, #ffffff 90%, #ffffff 100%);\n" .
             "background: -ms-linear-gradient(left, #ffffff 0%, #ffffff 9%, #b7deed 52%, #ffffff 90%, #ffffff 100%);\n" .
              "background: linear-gradient(to right, #ffffff 0%, #ffffff 9%, #b7deed 52%, #ffffff 90%, #ffffff 100%);\n" .
               "filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff', GradientType=1 );\n" .
               "}\n" .
                "#titulo {color:#3f888f ; width: 300px}\n" .
                ".importante { background-color: #00B499	 ; color:white;}\n" .
                "#lista { margin: 30px; font-family:Arial}\n" .
                "#categoria { color:red; }\n".
                "\n" .
                "</style>\n" .
                "<body>\n" .
                "<div class=\"importante\" style= height:60px>\n" .
                "<h1>".$Crear."</h1>\n" .
                "</div>\n" .
                "<hr>\n";
        $this->encabezado=
                "<!DOCType html>\n" .
                "<html>\n" .
                "<head>\n" .
                "<title>".$nomPestanha."</title>\n" .""
                .$tituloPrincipal;
     
     if($bandera){
          $this->piePagina="<form action=\"PaginaInicio.php\" method=\"post\" name=\"frm\">
            <button type=\"submit\">
            VOLVER  INICIO
            </button>
            
        </form>";
     }
     else{
          $this->piePagina="";
     }
     
        $this->piePagina=$this->piePagina.
     
   
    "\n".
    "<div class=\"importante\">\n" .
"	<dl style= \"font-family:Georgia;\">\n" .
"           <dt style=list-style-type:\"none\">INTEGRANTES</dt>\n" .
"		<dd>-CARLOS LEON</dd>\n" .
"		<dd>-TAHIS AHTTY</dd>\n" .
"	</dl>\n" .
"	\n" .
            "</div>\n" .
            "</body>\n" .
            "\n" .
            "</html>";
        $this->tituloI="<h2><samp id =\"titulo\">";
        $this->tituloD="</samp></h2>\n" .
                "<div id=\"lista\">";
        $this->cuerpo="";
    }
    
    function mostrar(){
        echo $this->encabezado.$this->cuerpo.$this->piePagina;
    }
    function setcuerpo($str){
        $this->cuerpo =  $this->cuerpo.$str;
    }
    
    function error($archivo,$mensaje){
        $this->setcuerpo("<body>
            <form action=\"".$archivo."\" method=\"post\" name=\"n\">".
               $mensaje."<br>
                <button type=\"submit\">
                VOLVER
                </button>

            </form>

        </body>");
        $this->mostrar();
}
    
}

