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

    <!-- header -->
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
            <li id="btn_productos"><a href="productos.php">Productos</a>
              <ul id="productos">
                <li>
                  <a id="btn_paneles_termicos" href="">Paneles Termoaislantes</a>
                  <ul class="cont_interno uno">
                    <li><a id="btn_bigsystem" href="">Bigsystem</a></li>
                    <li><a id="btn_multisystem" href="">Multisystem</a></li>
                    <li><a id="btn_megasystem" href="">Megasystem</a></li>
                  </ul>
                </li>
                <li>
                  <a id="btn_equipamiento_comercial" href="">Equipamiento Comercial</a>
                  <ul class="cont_interno dos">
                    <li><a id="btn_vitrinas" href="">Vitrinas</a></li>
                    <li><a id="btn_murales" href="">Murales</a></li>
                    <li><a id="btn_islas" href="">Islas</a></li>
                    <li><a id="btn_autocontenidos" href="">Autocontenidos</a></li>
                    <li><a id="btn_congelados" href="">Congelados</a></li>
                    <li><a id="btn_pasillos" href="">Pasillos de revisión</a></li>
                  </ul>
                </li>
                <li>
                  <a id="btn_sist_frigorificos" href="">Sistemas Frigoríficos</a>
                  <ul class="cont_interno tres">
                    <li><a id="btn_equipamiento" href="">Equipamiento frigorífico</a></li>
                    <li><a id="btn_camaras" href="">Mini camaras</a></li>
                    <li><a id="btn_puertas" href="">Puertas</a></li>
                  </ul>
                </li>
              </ul>

            </li> 
            <li id="btn_servicios">
              <a href="servicios.php">Servicios</a>
              <ul id="servicios">
                <li><a id="btn_montajes" href="servicios.php#info_montajes">Montajes</a></li>
                <li><a id="btn_servicio" href="servicios.php#info_servicio">Servicio Técnico Especializado</a></li>
                <li><a id="btn_instalaciones" href="servicios.php#info_instalaciones">Instalaciones</a></li>
              </ul>
            </li>
            <li><a href="noticias.php">Noticias</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="demo-2">
      <div id="slider" class="sl-slider-wrapper">
        <div class="sl-slider">

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <!--h2 class="nombre_producto">Paneles termoaislantes</h2-->
              <h2><span>Paneles termoaislantes</span> <img src="img/productos_paneles_thumb.png" alt="" width="430" heigth="200"></h2>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><span>Equipamineto comercial</span><img src="img/productos_equipamiento_thumb.png" alt="" width="430" heigth="200"></h2>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><span>Sistemas frigoríficos</span><img src="img/productos_frigorifico_thumb.png" alt="" width="430" heigth="200"></h2>
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

          <!--div id="productos">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <h1>Productos</h1>
                  <ul>
                    <li class="producto_lista"><a id="btn_paneles_termicos" href="">Paneles Termoaislantes ></a>
                      <ul class="cont_interno">
                        <li><a id="btn_bigsystem" href="">Bigsystem</a></li>
                        <li><a id="btn_multisystem" href="">Multisystem</a></li>
                        <li><a id="btn_megasystem" href="">Megasystem</a></li>
                      </ul>
                    </li>
                    <li class="producto_lista"><a id="btn_equipamiento_comercial" href="">Equipamiento Comercial ></a>
                      <ul class="cont_interno dos">
                        <li><a id="btn_vitrinas" href="">Vitrinas</a></li>
                        <li><a id="btn_murales" href="">Murales</a></li>
                        <li><a id="btn_islas" href="">Islas</a></li>
                        <li><a id="btn_autocontenidos" href="">Autocontenidos</a></li>
                        <li><a id="btn_congelados" href="">Congelados</a></li>
                        <li><a id="btn_pasillos" href="">Pasillos de revisión</a></li>
                      </ul>
                    </li>
                    <li class="producto_lista"><a id="btn_sist_frigorificos" href="">Sistemas Frigoríficos ></a>
                      <ul class="cont_interno tres">
                        <li><a id="btn_equipamiento" href="">Equipamiento frigorífico</a></li>
                        <li><a id="btn_camaras" href="">Mini camaras</a></li>
                        <li><a id="btn_puertas" href="">Puertas</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>  
            </div>
          </div-->

        <div class="section-colored text-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <strong><p>Le ofrecemos <em>soluciones constructivas</em> para cerramientos industriales, viviendas, galpones, cavas, comedores, etc y equipamiento para poner en funcionamiento su negocio. Ahorro energético, velocidad de montaje, menor peso estructural, aislación térmica, mejor terminación superficial y optimización de tiempos de obra.</p></strong>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div>

        <div class="container">
          <div class="row">
            <div id="info_paneles_termicos" class="row">
              <div class="col-sm-8">
                <h2>Paneles termoaislantes</h2>
                <p>Contamos con soluciones constructivas que tienen por objetivo principal ofrecer respuestas integrales a proyectos de gran envergadura. Estos sistemas comprenden una serie de paneles aislantes compuestos con espuma de poliuretano  realizados en una prensa continua de alta tecnología, así como paneles de acero inoxidable u otros materiales.</p>
                <br>
                <h4>Principales usos</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, tenetur, minima nesciunt veniam dolor odio laboriosam laudantium porro alias qui ullam blanditiis! Alias illo iste at accusantium blanditiis dolor minus.</p>
                <br>
                <h4>Principales ventajas</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, tenetur, minima nesciunt veniam dolor odio laboriosam laudantium porro alias qui ullam blanditiis! Alias illo iste at accusantium blanditiis dolor minus.</p>
                <br>
                <h3>Categorías:</h3>
              </div>
              <div class="col-sm-4">
                <br>
                <img class="img-responsive" src="img/paneles.jpg" alt="">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-12">
                <div class="row">
                  <div id="info_multisystem" class="col-sm-4">
                    <img class="img-responsive" src="img/multisystem_logo.jpg" alt="Multisystem">
                  </div>
                  <div class="col-sm-8">
                    <p>Sistema de paneles aislantes tipo sandwich, con sistema de unión mediante ganchos excéntricos. Todas las aristas resultas con perfiles europeos tipo ABS y vértices redondeados. La espuma de poliuretano es libre de CFC y tiene una densidad promedio de 40Kg/m3 .</p>
                    <p><a href=""><i class="glyphicon glyphicon-plus"></i> Más información</a></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="row">
                  <img class="col-sm-4 img-responsive" src="img/multisystem_1.jpg" alt="Multisystem">
                  <img class="col-sm-4 img-responsive" src="img/multisystem_2.jpg" alt="Multisystem">
                  <img class="col-sm-4 img-responsive" src="img/multisystem_3.jpg" alt="Multisystem">
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-xs-12">
                <div class="row">
                  <div id="info_bigsystem" class="col-sm-4">
                    <img class="img-responsive" src="img/bigsystem_logo.jpg" alt="Bigsystem">
                  </div>
                  <div class="col-sm-8">
                    <p>Es un sistema que comprende una serie de paneles aislantes, una y espuma inyectada de poliuretano rígido.amplia serie de juntas y elemento de fijación más accesorios y terminaciones para la realización de cámaras frigoríficas de baja y media temperatura, salas de elaboración, túneles frigoríficos y aplicables también en la construcción civil de naves industriales como cerramientos laterales y tabiquería divisoria de alta prestación. Se trata de paneles aislantes tipo sandwich constituidos de dos chapas metálicas.</p>
                    <p><a href=""><i class="glyphicon glyphicon-plus"></i> Más información</a></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="row">
                  <img class="col-sm-4 img-responsive" src="img/bigsystem_1.jpg" alt="Bigsystem">
                  <img class="col-sm-4 img-responsive" src="img/bigsystem_2.jpg" alt="Bigsystem">
                  <img class="col-sm-4 img-responsive" src="img/bigsystem_3.jpg" alt="Bigsystem">
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-xs-12">
                <div class="row">
                  <div id="info_megasystem" class="col-sm-4">
                    <img class="img-responsive" src="img/megasystem_logo.jpg" alt="Megasystem">
                  </div>
                  <div class="col-sm-8">
                    <p>Megasystem comprende una serie de paneles aislantes compuestos por espuma de poliuretano rígido realizados   en una prensa continua de alta tecnología. Contamos con paneles de 5 y 3 crestas ideales para realizar cubiertas y cerramientos laterales en obras industriales. Es la solución indicada para resolver cerramientos de diferentes estructuras, alivianando el peso propio, brindando un acabado superficial parejo y disminuyendo los tiempos de montaje.</p>
                    <p><a href=""><i class="glyphicon glyphicon-plus"></i> Más información</a></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="row">
                  <img class="col-sm-4 img-responsive" src="img/megasystem_1.jpg" alt="Megasystem">
                  <img class="col-sm-4 img-responsive" src="img/megasystem_2.jpg" alt="Megasystem">
                  <img class="col-sm-4 img-responsive" src="img/megasystem_3.jpg" alt="Megasystem">
                </div>
              </div>
            </div>
            <br>
            <div id="info_equipamiento_comercial" class="row">
              <h2>Equipamiento comercial</h2>
            </div>
            <br>
            <div id="info_vitrinas" class="row">
              <h3>Vitrinas</h3>
              <div class="col-sm-4 text-center">
                <img class=" img-responsive" src="img/memphis_bano_maria.jpg" alt="">
                <strong>Memphis baño maria</strong>
              </div>
              <div class="col-sm-4 text-center">
                <img class="img-responsive" src="img/memphis_self.jpg" alt="">
                <strong>Memphis self</strong>
              </div>
              <div class="col-sm-4 text-center">
                <img class="img-responsive" src="img/memphis_vca.jpg" alt="">
                <strong>Memphis vca</strong>
              </div>
              <div class="col-sm-4 text-center">
                <img class="img-responsive" src="img/memphis_vcb.jpg" alt="">
                <strong>Memphis vcb</strong>
              </div>
              <div class="col-sm-4 text-center">
                <img class="img-responsive" src="img/orlando.jpg" alt="">
                <strong>Orlando</strong>
              </div>
              <div class="col-sm-4 text-center">
                <img class="img-responsive" src="img/laguna.jpg" alt="">
                <strong>Laguna</strong>
              </div>
            </div>
          <hr>
          <div id="info_murales" class="row">
            <h3>Murales</h3>
            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/lisbona_2020.jpg" alt="">
              <strong>Lisbona 2020</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/taipei.jpg" alt="">
              <strong>Taipei</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/lisbona1500.jpg" alt="">
              <strong>Lisbona 1500</strong>
            </div>
          </div>
          <hr>
          <div id="info_islas" class="row">
            <h3>Islas</h3>
            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/wels.jpg" alt="">
              <strong>Wels</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/tarbes.jpg" alt="">
              <strong>Tarbes</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/ginebra.jpg" alt="">
              <strong>Ginebra</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/lucerna.jpg" alt="">
              <strong>Lucerna</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/valdes.jpg" alt="">
              <strong>Valdes</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/delfi.jpg" alt="">
              <strong>Delfi</strong>
            </div>
          </div>
          <hr>
          <div id="info_autocontenidos" class="row">
            <h3>Autocontenidos</h3>
            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/venere.jpg" alt="">
              <strong>Venere</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/urano_simple.jpg" alt="">
              <strong>Urano</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/urano_twin.jpg" alt="">
              <strong>Urano Twin</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/urano_testa.jpg" alt="">
              <strong>Urano Testa</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/sweet_global.jpg" alt="">
              <strong>Sweet Global</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/laval.jpg" alt="">
              <strong>Laval</strong>
            </div>
          </div>
          <hr>
          <div id="info_congelados" class="row">
            <h3>Congelados</h3>
            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/malmo.jpg" alt="">
              <strong>Malmo</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/ankara.jpg" alt="">
              <strong>Ankara</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/brema.jpg" alt="">
              <strong>Brema</strong>
            </div>
            <!--div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/perth.jpg" alt="">
              <strong>Perth</strong>
            </div-->
          </div>
          <hr>
          <div id="info_pasillos" class="row">
            <h3>Pasillos de revisión</h3>

            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/rv_con_rinon.jpg" alt="">
              <strong>RV con riñon</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/rv_sin_rinon.jpg" alt="">
              <strong>RV sin riñon</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/rv_twin_b.jpg" alt="">
              <strong>RV twin B</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/vh_mayorista.jpg" alt="">
              <strong>VH mayorista</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/vh-twin.jpg" alt="">
              <strong>VH twin</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/rv-twin.jpg" alt="">
              <strong>RV twin</strong>
            </div>
          </div>
          <br>
          <div id="info_sistemas_frigorificos" class="row">
              <h2>Sistemas Frigoríficos</h2>
          </div>
          <br>
          <div id="info_equipamiento" class="row">
            <h3>Equipamiento frigorífico</h3>
            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/tirreno.jpg" alt="">
              <strong>Tirreno</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/small.jpg" alt="">
              <strong>Small</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/hpm.jpg" alt="">
              <strong>HPM</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/hpf.jpg" alt="">
              <strong>HPF</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/tokyo.jpg" alt="">
              <strong>Tokyo</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="img-responsive" src="img/trento.jpg" alt="">
              <strong>Trento</strong>
            </div>
          </div>
          <hr>
          <div id="info_camaras" class="row">
            <h3>Mini cámaras</h3>
            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/mini_camara_multi.jpg" alt="">
              <strong>Mini cámara multi</strong>
            </div>
            <div class="col-sm-8 text-center">
              <img class=" img-responsive" src="img/minicamaras.jpg" alt="">
            </div>
          </div>
          <hr>
          <div id="info_puertas" class="row">
            <h3>Puertas</h3>
            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/puertas_pivotantes.jpg" alt="">
              <strong>Puertas pivotantes</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/puertas_semiaislantes_oficina.jpg" alt="">
              <strong>Puertas semiaislantes oficina</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/puertas_semiaislantes_vaiven.jpg" alt="">
              <strong>Puertas semiaislantes vaiven</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/puertas_corredizas_isometricas.jpg" alt="">
              <strong>Puertas corredizas isométricas</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/puertas_corredizas_isometricas_paso_riel.jpg" alt="">
              <strong>Puertas corredizas isométricas con paso riel</strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class=" img-responsive" src="img/puertas_corredizas_isometricas-control-remoto.jpg" alt="">
              <strong>Puertas corredizas isométricas con control remoto</strong>
            </div>
          </div>
          <br>
        </div>
        <hr>
        <h2>¿Buscaba algo más?</h2>
        <p>Para más información consulte la lista completa de productos y sus especificaciones en el sitio oficial de <a href="http://www.arneg.it/en">Arneg</a></p>
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