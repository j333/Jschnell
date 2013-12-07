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

  </head>

  <body>

    <?php include 'header.php'; ?>

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
             -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/servicios.jpg" alt="">
              </div>
            </div>
          </div>

          <div id="servicios">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <h1>Servicios</h1>
                  <ul>
                    <li><a id="btn_montajes" href="">Montajes ></a></li>
                    <li><a id="btn_servicio" href="">Servicio Técnico ></a></li>
                    <li><a id="btn_instalaciones" href="">Instalaciones ></a></li>
                  </ul>
                </div>
              </div>  
            </div>
          </div>

    <br>

    <div class="container">
      
      <div class="row">
        <div class="col-sm-8">
          <h1 id="h1_servicios">Servicios</h1>
          <p>En función de sus requerimientos le proveemos una propuesta con la mejor solución, la valuación de la misma, la elaboración del proyecto ejecutivo con definiciones de las características de terminación y montaje con llave en mano.</p>
          <p>A través del servicio de Construcción y Montaje Industrial se da respuesta a las crecientes necesidades en el mercado de la construcción, montaje industrial, puesta en marcha y mantenimiento de instalaciones industriales de manera “estandar” o a medida.</p>
          <br>
        </div>
        <div class="col-sm-4">
        </div>
      </div>
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
          <h2>Servicio técnico</h2>
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
    <script src="js/script.js"></script>
  </body>
</html>