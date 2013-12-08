<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jschnell Group</title>

    <!-- Icons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png" />

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/slide-custom.css" rel="stylesheet">
    <link href="css/slide-style.css" rel="stylesheet">

    <script src="js/modernizr.custom.79639.js"></script>

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
          <h1 class="sr-only" href="#content">Jschnell Group</h1>
          <a class="navbar-brand logo-nav" href="index.php"><img src="img/logo.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li id="btn_productos">
              <a href="productos.php">Productos</a>
              <ul id="productos">
                <li>
                  <a id="btn_paneles_termicos" href="productos.php#info_paneles_termicos">Paneles Termoaislantes</a>
                  <ul class="cont_interno uno">
                    <li><a id="btn_bigsystem"  href="productos.php#info_bigsystem">Bigsystem</a></li>
                    <li><a id="btn_multisystem" href="productos.php#info_multisystem">Multisystem</a></li>
                    <li><a id="btn_megasystem" href="productos.php#info_megasystem">Megasystem</a></li>
                  </ul>
                </li>
                <li>
                  <a id="btn_equipamiento_comercial" href="productos.php#info_equipamiento_comercial">Equipamiento Comercial</a>
                  <ul class="cont_interno dos">
                    <li><a id="btn_vitrinas" href="productos.php#info_vitrinas">Vitrinas</a></li>
                    <li><a id="btn_murales" href="productos.php#info_murales">Murales</a></li>
                    <li><a id="btn_islas" href="productos.php#info_islas">Islas</a></li>
                    <li><a id="btn_autocontenidos" href="productos.php#info_autocontenidos">Autocontenidos</a></li>
                    <li><a id="btn_congelados" href="productos.php#info_congelados">Congelados</a></li>
                    <li><a id="btn_pasillos" href="productos.php#info_pasillos">Pasillos de revisión</a></li>
                  </ul>
                </li>
                <li>
                  <a id="btn_sist_frigorificos" href="productos.php#info_sistemas_frigorificos">Sistemas Frigoríficos</a>
                  <ul class="cont_interno tres">
                    <li><a id="btn_equipamiento" href="productos.php#info_equipamiento">Equipamiento frigorífico</a></li>
                    <li><a id="btn_camaras" href="productos.php#info_camaras">Mini camaras</a></li>
                    <li><a id="btn_puertas" href="productos.php#info_puertas">Puertas</a></li>
                  </ul>
                </li>
              </ul>
            </li> 
            <li id="btn_servicios">
              <a href="servicios.php">Servicios</a>
              <ul id="servicios">
                <li><a id="btn_montajes" href="">Montajes</a></li>
                <li><a id="btn_servicio" href="">Servicio Técnico Especializado</a></li>
                <li><a id="btn_instalaciones" href="">Instalaciones</a></li>
              </ul>
            </li>
            <li><a href="noticias.php">Noticias</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div id="slide_servicios" class="demo-2">
      <div id="slider" class="sl-slider-wrapper">
        <div class="sl-slider">

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <!--h2 class="nombre_producto">Paneles termoaislantes</h2-->
              <h2><span>Montajes</span></h2>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><span>Servicio Técnico Especializado</span></h2>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><span>Instalaciones</span></h2>
            </div>
          </div>      

        </div><!-- /sl-slider -->

        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
        </nav>

      </div>
    </div>

          <div class="section-colored text-center">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <strong><p>En función de sus requerimientos le proveemos una propuesta con la mejor solución, la valuación de la misma, la elaboración del proyecto ejecutivo con definiciones de las características de terminación y montaje con llave en mano.</p>
                  <p>A través del servicio de Construcción y Montaje Industrial se da respuesta a las crecientes necesidades en el mercado de la construcción, montaje industrial, puesta en marcha y mantenimiento de instalaciones industriales de manera <em>“estandar”</em> o a medida.</p></strong>
                </div>
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div>

    <div class="container">
      <h1>Servicios</h1>
      <br>
      <div id="info_montajes" class="row">
        <div class="col-sm-4">
          <img class="img-responsive" src="img/servicios_2.jpg" alt="">
        </div>
        <div class="col-sm-8">
          <br>
          <h2>Montajes</h2>
          <p>Adaptamos su necesidad a las concepciones de las nuevas arquitecturas y las necesidades de la industria de hoy, con sistemas de proyección con la tecnología más avanzada del mundo, provista por Arneg, abarcando obras pequeñas hasta de grandes magnitudes.</p>
        </div>
      </div>
      <hr>
      <div id="info_servicio" class="row">
        <div class="col-sm-8">
          <br>
          <h2>Servicio técnico especializado</h2>
          <p> Contamos con personal idóneo especialmente capacitado para garantizarle el correcto funcionamineto e implementación de la obra. Puede también extender la garantía de la marca y la posibilidad de contar con servicio técnico, mano de obra especializada y repuestos de sus productos, además de otros beneficios adicionales.</p>
        </div>
        <div class="col-sm-4">
          <img class="img-responsive" src="img/servicios_1.jpg" alt="">
        </div>
      </div>
      <hr>
      <div id="info_instalaciones" class="row">
        <div class="col-sm-4">
          <img class="img-responsive" src="img/servicios_3.jpg" alt="">
        </div>
        <div class="col-sm-8">
          <br>
          <h2>Instalaciones</h2>
          <p>Analizamos cada situación en profundidad, ofreciendo sólo la rama de alternativas que se adapten a sus necesidades concretas. Alternativas que están acompañadas de materiales de primera línea que respetan todos los estándares de seguridad y, que a su vez, se comportan con la máxima calidad posible.</p>
        </div>
      </div>
      <br>
    </div><!-- /.container -->

    <a id="subir" title="Subir" href=""></a>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <script src="js/script.js"></script>
    <script>
      //$(".collapse").collapse();

      $(function() {
      
        var Page = (function() {

          var $nav = $( '#nav-dots > span' ),
            slitslider = $( '#slider' ).slitslider( {
              onBeforeChange : function( slide, pos ) {

                $nav.removeClass( 'nav-dot-current' );
                $nav.eq( pos ).addClass( 'nav-dot-current' );

              }
            } ),

            init = function() {

              initEvents();
              
            },
            initEvents = function() {

              $nav.each( function( i ) {
              
                $( this ).on( 'click', function( event ) {
                  
                  var $dot = $( this );
                  
                  if( !slitslider.isActive() ) {

                    $nav.removeClass( 'nav-dot-current' );
                    $dot.addClass( 'nav-dot-current' );
                  
                  }
                  
                  slitslider.jump( i + 1 );
                  return false;
                
                } );
                
              } );

            };

            return { init : init };

        })();

        Page.init();

        /**
         * Notes: 
         * 
         * example how to add items:
         */

        /*
        
        var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
        
        // call the plugin's add method
        ss.add($items);

        */
      
      });
    </script>
  </body>
</html>