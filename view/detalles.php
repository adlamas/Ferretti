
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
    <title>Ferretti calzados</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css"> 
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/lightbox.css">
    <link rel="stylesheet" href="../css/hover.css">
    
    
    </head>
    <body style="width: 100%;">
        
          <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" 
    style=" z-index: 1; opacity: 0.8; background: #cc66ff; border: 0px; ">
      
    <div class="container-fluid" style=" height: 80px; margin-top: 15px; ">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"                                  data-target=" #bs-example-navbar-collapse-1" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="index.php" style="color: white; font-family: cursive; font-size: 1.5EM; ">
          <strong style=" letter-spacing: 2px; text-shadow: 2px 2px black;">
              FERRETI
          </strong>
        </a>
        <a class="navbar-brand" href="index.php" style="color: white; font-family: cursive; font-size: 1EM; ">
          <strong style="letter-spacing: 2px; margin-top: 30px; margin-left: -120px; position: absolute; text-shadow: 1px 1px black;">
              Bs.As. - Milán
          </strong>
        </a>
        
         <a class="navbar-brand2" href="index.php" style="color: white; font-family: cursive; font-size: 1.3EM; ">
          <strong style=" letter-spacing: 2px; margin-left: 15px; text-shadow: 2px 2px black;">
              FERRETI CALZADOS
          </strong>
        </a>
        <a class="navbar-brand2" href="index.php" style="color: white; font-family: initial; font-size: 1EM; ">
          <strong style="letter-spacing: 2px; margin-top: 30px; left: 15px; position: absolute; text-shadow: 1px 1px black;">
              Bs.As. - Milán
          </strong>
        </a>
        
    </div>

    
    
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style=" 
     border: 0px; margin-top: 0px; ">
        <ul class="nav navbar-nav navbar-right" style="background:#cc66ff;">
             
        <li class="" style=" margin-left: -13px;" id="id">
            <a href="index.php" style="color: white; font-family: AguaFina; ">
                <strong class="hvr-buzz-out" style="font-size: 0.8em;">
                    HOME
                </strong>
            </a>
        </li>
        
        <li style=" margin-left: -13px;">
            <a href="quienesSomos.php" style="color: white; font-family: AguaFina">
                <strong class="hvr-buzz-out" style="font-size: 0.8em;">
                    Nosotros
                </strong>
            </a>
        </li>
        
        <li style=" margin-left: -13px;">
            <a href="descuentosYPromociones.php" style="color: white; font-family: AguaFina">
                <strong class="hvr-buzz-out" style="font-size: 0.8em;" >
                    Descuentos
                </strong>
            </a>
        </li>        
        
        
        <li class="" style=" margin-left: -13px;">
            <!-- en <a> pongo el background en gold !-->
            <a href="zapatos.php" style=" color: white;font-family: AguaFina" class="hvr-buzz-out" 
                role="button" aria-haspopup="true" >
              <strong style="font-size: 0.8em; ">
                  Productos
              </strong> 
              
            </a>
            <!-- 
            <ul class="dropdown-menu" >
              <li><a href="zapatos.html" style="color: black;">Zapatos</a></li>
              <li><a href="#" style="color: black;">Sandalias</a></li>
              <li><a href="#" style="color: black;">Chatas</a></li>            
              <li><a href="#" style="color: black;">Botas</a></li>           
              <li><a href="#" style="color: black;">Promociones</a></li>
            </ul>
            !-->
        </li>
        
        <li style=" margin-left: -13px;">
            <a href="contacto.php" style="color: white; font-family: AguaFina">
                <strong class="hvr-buzz-out" style="font-size: 0.8em;">
                    Consultas
                </strong>
            </a>
        </li>

        <li style=" margin-left: -13px;">
            <a href="panelDeControl.php" style="color: white; font-family: AguaFina" 
            onclick="<?php setcookie('ingreso','hemos ingresado', time()+300, '/Ferretti/view/'); ?> ">
                <strong class="hvr-buzz-out" style="font-size: 0.8em;" >
                    Ingreso
                </strong>
            </a>
        </li>

        <?php
            if( isset($_COOKIE["ingreso"])){     
                
            }
        ?> 
        
        <?php

            if( isset($_COOKIE["ingreso"])){                
                echo 
                    '<li style=" margin-left: -13px;">
                        <a href="#" style="color: white; font-family: AguaFina">
                            <strong class="hvr-buzz-out" style="font-size: 0.8em;" >
                                Gestionar
                            </strong>
                        </a>
                    </li>';
            }
            
        ?>
        
        
      </ul>
        </div>
        </div>
        
    </nav>
        
        
        
        <!-- Sección de Detalles, tamaño grande !-->
       
     
        <div class="container-fluid" style="margin-top: 95px;  padding-top: 20px; padding-bottom: 50px; background: #ffe0fb"  >
            
              <div class="col-lg-4 col-md-4 col-sm-3">
                  <a href="../zapatos/Z25.jpg" data-lightbox="roadtrip">
                  <img src="../zapatos/Z25.jpg" alt="2" class="img-responsive " style="width:100%;">
                  </a>
                  <hr>          
                 
              </div>
            
            <div class="col-lg-4 col-md-4 col-sm-3">
                    <a href="../zapatos/Z26.jpg" data-lightbox="roadtrip">
                    <img src="../zapatos/Z26.jpg" alt="2" class="img-responsive " style="width:100%;">
                    </a>
                    <hr>
            </div>        
              
                    
        <div class="col-lg-3 col-md-3 col-sm-6">
            <h4 style="font-weight: bold; margin-top: 0px;">Zapato Z33</h4>
            
            <p><strong style="">Talles disponibles: </strong> 40,41,42,43,45,46,47</p>
            <p><strong style="">Colores disponibles: </strong>Negro, blanco, crema, marrón</p>
            <p><strong style="">Material: </strong>Cuero</p>           
            <p><strong style="">Precio: </strong><span style="color:  #cc66ff; font-weight: bold;">$950</span></p>
            
            <p style="margin-top: 30px;"><strong>Descripción</strong></p>
            <p>CHANEL CL, TACHAS , EN GAMUZA NEGRA TACHAS VARIAS Y FORRADA EN CABRA , SUELA Y GOMA FEBO
                .DEL N* 41 AL 44 , COLORS A MEDIDA . ENVIOS POR CORREO ARGENTINO
            </p>
             
            
        </div>
       
        </div>       
        
        
       <!-- Sección de contacto !-->
       
       <section class="container-fluid col-xs-12" style="background: #333; margin-top: 0px; padding-top: 20px; padding-bottom: 160px;">
            
            <div class="col-sm-6" style="margin-top: 20px;">
                
                <div class="col-sm-6 " style="text-align: center; margin-top: 20px;" >               
                    
                    
                        <div class="row" style="margin-top: 20px;">    
                        <img src="../iconos/house.png" class="" height="40" alt="casita">    
                        <p style="color: #E0FFFF; font-weight: bold; font-size: 1.5em;">
                        DIRECCIÓN
                        </p>                  
                        </div>
                        
                        <div class="row">
                        <p style="color: wheat;">Montevideo 1051 - Capital Federal - Argentina</p>  
                        </div>
                        
                        <br> 
                        
                        <div class="row" style="margin-top: 20px;">
                        <img src="../iconos/watch.png" class="" height="40" alt="reloj">
                        <p style="color: #E0FFFF; font-weight: bold; font-size: 1.5em;">
                            HORARIOS DE ATENCIÓN
                        </p>
                        </div>
                        
                        <div class="row">
                        <p style="color: wheat;">Lunes a viernes de 10 a 19hs sabados 9.30 a 14.hs</p>
                        </div>
                        
                    
                    
                    
                </div>
                
                <div class="col-sm-6" style="text-align: center; margin-top: 20px;">
                    
                    
                    
                     <div class="row" style="margin-top: 20px;">
                        <img src="../iconos/phone.png" class="" height="40" alt="teléfono">
                        <p style="color: #E0FFFF; font-weight: bold; font-size: 1.5em;">TELÉFONO</p>                   
                     </div>
                    
                     <div class="row">
                        <p style="color: wheat;">(54-11) 4811-8342</p>                       
                     </div>
                    
                    <div class="row" style="margin-top: 20px;">
                        <img src="../iconos/fax.png" class="" height="40" alt="fax">
                        <p style="color: #E0FFFF; font-weight: bold; font-size: 1.5em;">FAX</p>                   
                     </div>
                    
                     <div class="row">
                        <p style="color: wheat;">(54-11) 4811-8342</p>
                     </div>
                    
                    <div class="row" style="margin-top: 20px;">
                        <img src="../iconos/arroba.png" class="" height="40" alt="arroba">
                        <p style="color: #E0FFFF; font-weight: bold; font-size: 1.5em;">EMAIL</p>                   
                     </div>
                    
                     <div class="row">
                        <p style="color: wheat;">ooferretti@yahoo.com.ar</p>
                     </div>
                    
                </div>
                
                
            </div>
            
            <div class="col-sm-6" style="margin-top: 60px;">
                
                <p style="color: #E0FFFF; font-weight: bold; font-size: 1.5em; text-align: left ; margin-bottom: 10px; " class="col-xs-12">CONSULTAS ONLINE</p>
                
                <form class="" id="contact_form" action="#" method="POST" enctype="multipart/form-data" style=" ">
               
		
                <input id="name"  class="col-sm-5  col-xs-12" style="background: black; color: white; opacity: 0.4; margin-top: 20px; "  name="name" type="text" placeholder="Su nombre"/>
                 
                
                <input id="email" class="col-sm-5 col-sm-offset-1 col-xs-12" style="background: black; color: white; opacity: 0.4; margin-top: 20px; " name="email" type="text" placeholder="Su Email"/>
                
                
                <input id="telefono" class="col-sm-5 col-xs-12" style="background: black; color: white; opacity: 0.4; margin-top: 20px;" name="phone" type="text" placeholder="Su Email"/>
                
                
                <input id="localidad-pais" class="col-sm-5 col-sm-offset-1 col-xs-12" style="background: black; color: white; opacity: 0.4; margin-top: 20px;" name="country" type="text" placeholder="Su localidad/país"/><br />
                
		
                <textarea id="message" class="col-sm-11 col-xs-12 " style="background: black; color: white; opacity: 0.4; margin-top: 20px;" name="message" placeholder="Escriba su mensaje" rows="4"></textarea><br/>
                            
                <input id="submit_button"  style="margin-left: 0px; margin-top: 10px;" class="btn btn-primary btn-lg col-xs-7 col-lg-offset-0" type="button" value="Enviar">
                
            </form>
                    
            </div>
            
          <div class="col-sm-12" style="margin-top: 50px;">
              
              <div class="col-sm-3 col-xs-12" style="text-align: center; margin-top: 30px;">
                  <img class=" img-circle" src="../iconos/facebook.png" height="100" alt="F">
              </div>
              
              <div class="col-sm-3 col-xs-12" style="text-align: center; margin-top: 30px;">
              <img class=" img-circle" src="../iconos/twitter-button.jpg" height="100" alt="T">
              </div>
              
              <div class="col-sm-3 col-xs-12" style="text-align: center; margin-top: 30px;">
              <img class=" img-circle" src="../iconos/pinterest.png" height="100" alt="P">
              </div>
              
              <div class="col-sm-3 col-xs-12" style="text-align: center; margin-top: 30px;">
              <img class=" img-circle" src="../iconos/instagram.png" height="100" alt="I">
              </div>
              
          </div>
          
        </section> 
        
     
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/lightbox.js"></script>
    
    <!-- Con este script podemos modificar opciones del lightbox !-->
    <!-- Página de documentación de lightbox: http://lokeshdhakar.com/projects/lightbox2/ !-->
    <script>
    lightbox.option({
      'resizeDuration': 400,
      'wrapAround': true,
      
    })
    </script>
    
   
       
    </body>
</html>
