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
        
        <section class="col-xs-12 container-fluid" style="margin-top: 95px; padding-bottom: 80px; background: #ffe0fb;">
            
            <div class="col-sm-12 col-xs-12 container-fluid" style="margin-top: 50px; ">
                
                <p style="background: #cc66ff; font-size: 1.2em; font-weight: bold; text-align: center; color: white; padding: 15px 0px; " class="col-sm-2">
                    CATEGORÍAS
                </p>
                
                <a href="#" style="color: #333;">
                <p style="font-weight: bold; font-size: 1.2em; text-align: center; padding: 15px 0px;" class="col-sm-2 col-xs-12 menuHorizontalProductos">
                   Zapatos
                </p>
                </a>
                
                <a href="#" style="color: #333;">
                <p style="font-weight: bold; font-size: 1.2em; text-align: center;  padding: 15px 0px;" class="col-sm-2 col-xs-12 menuHorizontalProductos">
                    Sandalias
                </p>
                </a>
                
                <a href="#" style="color: #333;">
                <p style="font-weight: bold; font-size: 1.2em; text-align: center;  padding: 15px 0px;" class="col-sm-2 col-xs-12 menuHorizontalProductos"> 
                    Chatas
                </p>
                </a>
                
                <a href="#" style="color: #333;">
                <p style="font-weight: bold; font-size: 1.2em; text-align: center;   padding: 15px 0px;" class="col-sm-2 col-xs-12 menuHorizontalProductos">
                    Botas
                </p>
                </a>
                
                <a href="#" style="color: #333;">
                <p style="font-weight: bold; font-size: 1.2em; text-align: center;  padding: 15px 0px;" class="col-sm-2 col-xs-12 menuHorizontalProductos">
                    Promociones
                </p>
                </a>
                
            </div>
            
            <div class="col-sm-12 col-xs-12" style="margin-top: 30px; ">
                
                <h2 style=" font-weight: 200; text-align: center; padding: 8px 0px; margin-left: -10px; margin-right: -10px; background: #333; color:white;" class="row">
                    NUESTROS ZAPATOS
                </h2>
                
                <div class="row">
                    
                <div class="col-sm-4 col-sm-offset-0 col-xs-12" style="margin-top: 20px; ">
                    <img src="../zapatos/Z33.jpg" alt="Z33" class="img-responsive center-block">
                    <p style="text-align: center"><strong> ZAPATO Z-33</strong></p>
                    <p style="text-align: center">
                        Lorem ipsum ad his scripta blandit partiendo.                        
                    </p>
                    <p style="text-align: center"><a href="detalles.html"> Ver más</a></p>
                </div>
                
                <div class="col-sm-4 col-sm-offset-0 col-xs-12" style="margin-top: 20px; ">
                    <img src="../zapatos/Z32.jpg" alt="Z32" class="img-responsive center-block">
                    <p style="text-align: center"><strong> ZAPATO Z-32</strong></p>
                    <p style="text-align: center">
                        Lorem ipsum ad his scripta blandit partiendo.                        
                    </p>
                    <p style="text-align: center"><a href="detalles.html"> Ver más</a></p>
                </div>
                
                <div class="col-sm-4 col-sm-offset-0 col-xs-12" style="margin-top: 20px; ">
                    <img src="../zapatos/Z28.jpg" alt="Z28" class="img-responsive center-block">
                    <p style="text-align: center"><strong> ZAPATO Z-31</strong></p>
                    <p style="text-align: center">
                        Lorem ipsum ad his scripta blandit partiendo.                        
                    </p>
                    <p style="text-align: center"><a href="detalles.html"> Ver más</a></p>
                </div>
                    
                </div>
                
                <div class="row">
                
                <div class="col-sm-4 col-sm-offset-0 col-xs-12" style="margin-top: 20px; ">
                    <img src="../zapatos/Z30.jpg" alt="Z30" class="img-responsive center-block">
                    <p style="text-align: center"><strong> ZAPATO Z-30</strong></p>
                    <p style="text-align: center">
                        Lorem ipsum ad his scripta blandit partiendo.                        
                    </p>
                    <p style="text-align: center"><a href="detalles.html"> Ver más</a></p>
                </div>
                
                <div class="col-sm-4 col-sm-offset-0 col-xs-12" style="margin-top: 20px; ">
                    <img src="../zapatos/Z29.jpg" alt="Z29" class="img-responsive center-block">
                    <p style="text-align: center"><strong> ZAPATO Z-29</strong></p>
                    <p style="text-align: center">
                        Lorem ipsum ad his scripta blandit partiendo.                        
                    </p>
                    <p style="text-align: center"><a href="detalles.html"> Ver más</a></p>
                </div>
                
                <div class="col-sm-4 col-sm-offset-0 col-xs-12" style="margin-top: 20px; ">
                    <img src="../zapatos/Z31.jpg" alt="Z31" class="img-responsive center-block">
                    <p style="text-align: center"><strong> ZAPATO Z-28</strong></p>
                    <p style="text-align: center">
                        Lorem ipsum ad his scripta blandit partiendo.                        
                    </p>
                    <p style="text-align: center"><a href="detalles.html"> Ver más</a></p>
                </div>
                    
                </div>
                
                <div class="row">
                
                <div class="col-sm-4 col-sm-offset-0 col-xs-12" style="margin-top: 20px; ">
                    <img src="../zapatos/Z27.jpg" alt="Z27" class="img-responsive center-block">
                    <p style="text-align: center"><strong> ZAPATO Z-27</strong></p>
                    <p style="text-align: center"><a href="detalles.html"> Ver más</a></p>
                </div>
                
                <div class="col-sm-4 col-sm-offset-0 col-xs-12" style="margin-top: 20px; ">
                    <img src="../zapatos/Z26.jpg" alt="Z26" class="img-responsive center-block">
                    <p style="text-align: center"><strong> ZAPATO Z-26</strong></p>
                    <p style="text-align: center"><a href="detalles.html"> Ver más</a></p>
                </div>
                
                <div class="col-sm-4 col-sm-offset-0 col-xs-12" style="margin-top: 20px;">
                    <img src="../zapatos/Z25.jpg" alt="Z25" class="img-responsive center-block">
                    <p style="text-align: center"><strong> ZAPATO Z-25</strong></p>
                    <p style="text-align: center"><a href="detalles.html"> Ver más</a></p>
                </div>
                    
                </div>    
                
            </div>
            
            
        </section>
        
        
        
        <script src="../js/bootstrap.min.js" type="text/javascript" ></script>           
     
        </body>
</html>
