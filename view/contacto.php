<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<head>
        <title>Contacto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../css/full-slider.css" rel="stylesheet" type="text/css">
        <link href="../css/hover.css" rel="stylesheet" type="text/css"> 
        <link href="../css/estilo.css" rel="stylesheet" type="text/css">
        <link href="../css/font-awesome.css" rel="stylesheet" type="text/css"> 
        <script src="../js/jquery.min.js"></script>
        
        
    </head>
    <body>
        
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
        
        <section class="container-fluid col-xs-12" style="background: #333; margin-top: 95px; padding-top: 20px; padding-bottom: 160px;">
            
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
                            
                <input id="submit_button"  style="margin-left: 0px; margin-top: 10px;" class="btn btn-primary btn-lg col-xs-4 col-lg-offset-0" type="button" value="Enviar">
                
            </form>
                    
            </div>
            
            <div class="col-sm-12" style="margin-top: 50px;">
                
                <h2 style="color: white; text-align: center; ">                    
                    SÍGANOS EN NUESTRAS REDES SOCIALES
                   
                </h2>
              
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
        
        <section style="background-image: url(../img/plantilla.jpg); background-size: 1500px; padding-bottom: 50px; " class="container-fluid">
            
            <h2 style="text-align: center; color: #d84c4c; font-weight: bold;  margin-top: 1000px;">
                ¿Quiere saber cuál es su número de calzado?
            </h2>
             
            <div class="col-sm-2 col-sm-offset-5 col-xs-6 col-xs-offset-3" style="text-align: center; margin-top: 30px;">
              <a href="descargable/hojaParaMedir.doc" download="HojaParaMedir">
                  <img src="../iconos/arrow-down-4.png" alt="descargar" class="img-responsive">
                  <p>Descargar hoja de medición</p>
                
              </a>
              </div>  
            
        </section>
        
        <script src="../js/bootstrap.min.js" type="text/javascript" ></script>
        
        
</html>
