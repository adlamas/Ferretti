<?php 
    session_start();
    //session_destroy(); 
?>

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
            
            $(".input_form").hover(function(){
               $(this).css("background", "blue"); 
            }, function(){
                $(this).css("background", "#6d6d6d");
            });
            
             $('.dropdown-toggle').click(function(){
                $('.dropdown-menu').slideToggle(300);
            });
            
        });
        </script>
        
        <style>
            body{
                background: rgba(182,96,201,1);
                background: -moz-linear-gradient(left, rgba(182,96,201,1) 0%, 
                    rgba(230,76,181,1) 97%, rgba(230,76,181,1) 100%);
                background: -webkit-gradient(left top, right top, 
                    color-stop(0%, rgba(182,96,201,1)), color-stop(97%, rgba(230,76,181,1)), 
                    color-stop(100%, rgba(230,76,181,1)));
                background: -webkit-linear-gradient(left, 
                    rgba(182,96,201,1) 0%, rgba(230,76,181,1) 97%, rgba(230,76,181,1) 100%);
                background: -o-linear-gradient(left, r
                    gba(182,96,201,1) 0%, rgba(230,76,181,1) 97%, rgba(230,76,181,1) 100%);
                background: -ms-linear-gradient(left, 
                    rgba(182,96,201,1) 0%, rgba(230,76,181,1) 97%, rgba(230,76,181,1) 100%);
                background: linear-gradient(to right, 
                    rgba(182,96,201,1) 0%, rgba(230,76,181,1) 97%, rgba(230,76,181,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b660c9', endColorstr='#e64cb5', 
                    GradientType=1 );

            }    
        
        </style>
        
    </head>   
    
    <body >
        
        <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" 
        style=" z-index: 1; opacity: 0.8; background: #cc66ff; border: 0px; ">

        <div class="container-fluid" style=" height: 80px; margin-top: 15px; ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target=" #bs-example-navbar-collapse-1" >
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
              <strong style="letter-spacing: 2px; margin-top: 30px; margin-left: -120px; position: absolute;
                      text-shadow: 1px 1px black;">
                  Bs.As. - Milán
              </strong>
            </a>

             <a class="navbar-brand2" href="index.php" style="color: white; font-family: cursive; font-size: 1.3EM; ">
              <strong style=" letter-spacing: 2px; margin-left: 15px; text-shadow: 2px 2px black;">
                  FERRETI CALZADOS
              </strong>
            </a>
            <a class="navbar-brand2" href="index.php" style="color: white; font-family: initial; font-size: 1EM; ">
              <strong style="letter-spacing: 2px; margin-top: 30px; left: 15px; position: absolute; 
                      text-shadow: 1px 1px black;">
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
            
          </ul>
          </div>
          </div>

        </nav>     
        
     
   
            <div class="col-sm-4 col-sm-offset-4" style="background: #363333; margin-top: 150px; 
                 text-align: center; padding-bottom: 60px;padding-top: 30px; border-radius: 10px; ">               

                <h3 style="color: white; margin-bottom: 50px; text-align: left;">Ingresar a tu cuenta</h3>

                <input class="col-xs-12 input_form" style="padding: 10px; background-color: #6d6d6d ;color: white;
                       border-radius: 4px;" id="username" type="text" placeholder="Nombre de usuario">

               <input class="col-xs-12 input_form" style="padding: 10px; background-color: #6d6d6d; color: white;
                      margin-top:10px; border-radius: 4px;" id="password" type="password" placeholder="Contraseña">


               <button type="submit" class="col-sm-6 col-sm-offset-3" style="margin-top:30px; position: relative;
                       background: none; border-color: #ee6093; color: #ee6093; font-weight: bold; border-radius: 25px ;
                       padding: 10px;"
                        onclick="
                            user_name = $('#username').val();
                            pass = $('#password').val();
                            window.location.href = '../controller/connection.php?username='+user_name+'&password='+pass;
                            ">
                        INGRESAR
                </button>


               <a href="volverContrasenia.php" class="col-sm-6 col-sm-offset-3" style="margin-top:30px; 
                  position: relative; background: none; border: none; ">
                   ¿Olvidaste tu contraseña?
                </a>



            </div>

        
    </body>
    
    