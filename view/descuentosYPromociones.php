<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Descuentos y promociones</title>
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
        
         <!--
         
         OTRO CÓDIGO POSIBLE (CON MAPA INCLUÍDO)
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #333; padding-top: 120px; padding-bottom: 40px; ">
            
            <h1 style="text-align: center; color: wheat; padding-bottom: 40px;">DESCUENTOS Y PROMOCIONES</h1>
                        
            
            <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0">
                
            <p class="" style="color: wheat; font-weight: 500; font-size: 1.2em; text-align: left;">
                
                Regístrate y recibe gratis la información sobre nuevos productos, como también promociones y 
                ofertas en su correo electrónico. También puede consultarnos sobre cualquier duda que tenga, 
                por este medio. Es sencillo, sólo debe completar el formulario con sus datos.                
            </p>            
                
            <form class="" id="contact_form" action="#" method="POST" enctype="multipart/form-data" style=" ">
               
		
                <input id="name" class="col-xs-12" style="background: black; color: white; opacity: 0.4;"  name="name" type="text" placeholder="Escribe tu nombre"/><br/>
                <br>              
		
		<input id="apellido" class="col-xs-12" style="background: black; color: white; opacity: 0.4;" name="surname" type="text" placeholder="Escribe tu Apellido"/><br />
                <br>
                
                <input id="email" class="col-xs-12" style="background: black; color: white; opacity: 0.4;" name="email" type="text" placeholder="Escribe tu Email"/><br />
                <br>
                
                <input id="telefono" class="col-xs-12" style="background: black; color: white; opacity: 0.4;" name="phone" type="text" placeholder="Escribe tu Email"/><br />
                <br>
                
                <input id="localidad-pais" class="col-xs-12" style="background: black; color: white; opacity: 0.4;" name="country" type="text" placeholder="Escribe tu localidad/país"/><br />
                <br>
		
                <textarea id="message" class="col-xs-12" style="background: black; color: white; opacity: 0.4;" name="message" placeholder="Escribe tu mensaje" rows="4"></textarea><br />
                            
                <input id="submit_button"  style="margin-left: 0px; margin-top: 10px;" class="btn btn-primary btn-lg col-xs-4" type="button" value="Enviar">
                
            </form>
                
            </div>
            
            <div>
                <iframe class="col-sm-6 col-xs-12 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.303935744192!2d-58.39201768477055!3d-34.59647518046136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccabec40dd2a1%3A0xebd9a4b401737057!2sCalzados+Ferreti!5e0!3m2!1ses!2sar!4v1458582010229" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            
            
            </div>
        
        !-->
       
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #333; padding-top: 120px; padding-bottom: 40px; ">
            
            <h1 style="text-align: center; color: wheat; padding-bottom: 40px;">DESCUENTOS Y PROMOCIONES</h1>
            
            
            
            <p class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3" style="color: wheat; font-weight: 500; font-size: 1.2em; text-align: left;">
                
                Regístrate y recibe gratis la información sobre nuevos productos, como también promociones y 
                ofertas en su correo electrónico. También puede consultarnos sobre cualquier duda que tenga, 
                por este medio. Es sencillo, sólo debe completar el formulario con sus datos.                
            </p>            
                
            <form class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3" id="contact_form" action="#" method="POST" enctype="multipart/form-data" style=" ">
               
		
                <input id="name" class="col-xs-12" style="background: black; color: white; opacity: 0.4;"  name="name" type="text" placeholder="Escribe tu nombre"/><br/>
                <br>              
		
		<input id="apellido" class="col-xs-12" style="background: black; color: white; opacity: 0.4;" name="surname" type="text" placeholder="Escribe tu Apellido"/><br />
                <br>
                
                <input id="email" class="col-xs-12" style="background: black; color: white; opacity: 0.4;" name="email" type="text" placeholder="Escribe tu Email"/><br />
                <br>
                
                <input id="telefono" class="col-xs-12" style="background: black; color: white; opacity: 0.4;" name="phone" type="text" placeholder="Escribe tu Email"/><br />
                <br>
                
                <input id="localidad-pais" class="col-xs-12" style="background: black; color: white; opacity: 0.4;" name="country" type="text" placeholder="Escribe tu localidad/país"/><br />
                <br>
		
                <textarea id="message" class="col-xs-12" style="background: black; color: white; opacity: 0.4;" name="message" placeholder="Escribe tu mensaje" rows="4"></textarea><br />
                            
                <input id="submit_button"  style="margin-left: 0px; margin-top: 10px;" class="btn btn-primary btn-lg col-xs-4" type="button" value="Enviar">
                
            </form>
                
            </div>
        
        
        
         <script src="../js/bootstrap.min.js" type="text/javascript" ></script>
    </body>
</html>
