<?php session_start(); ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Ferretti Calzados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../css/full-slider.css" rel="stylesheet" type="text/css">
        <link href="../css/hover.css" rel="stylesheet" type="text/css"> 
        <link href="../css/estilo.css" rel="stylesheet" type="text/css">
        <link href="../css/font-awesome.css" rel="stylesheet" type="text/css"> 
        <script src="../js/jquery.min.js"></script> 
        
        <script>
        $(document).ready(function(){                
    //      $('li').mouseover(function(){
        //      $(this).css('background-color', 'green');
    //      });
            
            $('.dropdown-toggle').click(function(){
                $('.dropdown-menu').slideToggle(300);
            });
                
            
        });
        </script>
        
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
            <a href="ingresar.php" style="color: white; font-family: AguaFina">
                <strong class="hvr-buzz-out" style="font-size: 0.8em;" id="ingresar" >
                    Ingresar
                </strong>
            </a>
        </li>
        
        
        <?php        
            
            if(isset($_SESSION["log"])){
                if($_SESSION["log"] == "autorizado"){               
                    echo "<script>$('#ingresar').hide();</script>"  ;
                    
                    /*echo    '<li style=" margin-left: -13px;">'
                              . '<a href="../controller/cerrar_sesion.php" style="color: white; font-family: AguaFina">'
                                    . '<strong style="font-size: 0.8em;">'
                                        . 'Cerrar sesión'
                                    . '</strong>'
                              . '</a>'
                            . '</li>';*/
                    
                    echo    '<li class="dropdown" style="margin-left: -13px;">'
                                .'<a class="dropdown-toggle" data-toggle="dropdown" '
                                . 'style=" ; color: white" >'                               
                                    .'<strong style="font-size: 0.8em;"; font-family: AguaFina">'
                                        . 'Cuenta'
                                    .'</strong>'
                                .'</a>  '
                                . '<ul class="dropdown-menu" >'
                                    .'<li><a href="../controller/cerrar_sesion.php">Cerrar sesión</a></li>'
                                    
                                .'</ul>'
                            .'</li>';
                }
                
            }               
               
       ?>
        
         
        
      </ul>
        </div>
        </div>
        
    </nav>
        
       
        
    <img class="imagenInicio" src="../img/fondo-editado2.jpg" alt="fondo" style="width: 100%;">
        
    <section style="background:  #ff66ff; padding: 40px 0px; margin-bottom: -20px;">

    <div style="" class="container" >
        
    <div class="col-sm-4 zapatos " style="font-family: AguaFina; color: white; text-align: left;  border-left: 1px solid white; margin-top: 70px; margin-bottom: 70px;">
        <h2 style="text-transform: uppercase; ">
            Zapatos 
        </h2>
        <h3 style="text-transform: uppercase;">
            On order sale $99
        </h3>
        <p >
            Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, 
            eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id
        </p>
        
        
    </div>
        
    <div class="col-sm-4 " style="font-family: AguaFina; color: white; text-align: left;  border-left: 1px solid white; margin-top: 70px; margin-bottom: 70px;">
        <h2 style="text-transform: uppercase; ">
            Sandalias 
        </h2>
        <h3 style="text-transform: uppercase;">
             ne qui feugiat $410
        </h3>
        <p >
            Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, 
            eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id
        </p>
        
        
    </div>
    
    <div class="col-sm-4 " style="font-family: AguaFina; color: white; text-align: left;  border-left: 1px solid white; margin-top: 70px; margin-bottom: 70px;">
        <h2 style="text-transform: uppercase; ">
            Chatas 
        </h2>
        <h3 style="text-transform: uppercase;">
            ut vidit lorem $120
        </h3>
        <p >
            Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, 
            eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id
        </p>
        
        
    </div>    
      
       
    </div>

</section>

<!-- Fin sección columnas !-->



<!-- Inicio sección talles !-->

<section style="background-image: url(../img/zapato5.jpg); background-attachment: fixed;" class="col-xs-12">
    
    <h3 style="padding: 150px 0px 150px 0px; text-align: center; color: white; font-family: AguaFina;font-weight: 600;">
        Bienvenidos a nuestra web, aquí encontrará toda la información relacionada a nuestra empresa,
        como también, sobre nuestros calzados de tallas especiales para damas con números especiales 
        33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45.
    </h3>
    
</section>
            
           
        
      
      <!-- Sección imágenes !-->
      
      
      
      <section class="container-fluid" style=" padding: 60px 0px; background: #ffe0fb;" >
            
            <p id="nuestrosProductos" style="font-size: 2em;font-weight: 100; text-align: center; margin-top: 70px; font-family: AguaFina; padding: 10px 0px; color: #222; " class="col-xs-12 col-xs-offset-0">            
               ALGUNOS DE NUESTROS PRODUCTOS
            </p>
          
            <div class="col-lg-3 col-md-3 col-sm-3">
            <img class="img-responsive hvr-rotate" src="../img/modelo-zapato.jpg" alt="zapatitos1">
            <p style="color: #222; font-weight: bold;">PRODUCT SAMPLE</p>
            <p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber
                hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi 
                lobortis reformidans eu, legimus senserit definiebas an eos.
            </p>
           
            </div>
            
             <div class="col-lg-3 col-md-3 col-sm-3">
            <img class="img-responsive hvr-rotate" src="../img/sandalia1.jpg" alt="zapatitos1">
            <p style="font-weight: bold; color: #222;">PRODUCT SAMPLE</p>
            <p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber
                hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi 
                lobortis reformidans eu, legimus senserit definiebas an eos.
            </p>
            
            </div>
            
             <div class="col-lg-3 col-md-3 col-sm-3">
            <img class="img-responsive hvr-rotate" src="../img/bota1.jpg" alt="zapatitos1">
            <p style="font-weight: bold; color: #222;">PRODUCT SAMPLE</p>
            <p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber
                hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi 
                lobortis reformidans eu, legimus senserit definiebas an eos.
            </p>
           
            </div>
            
             <div class="col-lg-3 col-md-3 col-sm-3">
            <img class="img-responsive hvr-rotate" src="../img/sandalia1.jpg" alt="zapatitos1">
            <p style="font-weight: bold; color: #222;">PRODUCT SAMPLE</p>
            <p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber
                hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi 
                lobortis reformidans eu, legimus senserit definiebas an eos.
            </p>
           
            </div>
          
           
            
            
                      
          
        </section>
      
    
      
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
        
        <script src="../js/bootstrap.min.js" type="text/javascript" ></script>
           
       <!-- Script to Activate the Carousel -->
        <script>
        $('.carousel').carousel({
        interval: 103000 //changes the speed
        })
        
        </script>
        </body>
</html>
