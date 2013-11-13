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

    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div id="carousel_imagenes_inicio" class="carousel-inner">
              <div id="arneg">
                <div id="arneg_logo"></div>
                <span>Representante Comercial Exclusivo</span>
              </div>
              <div class="item active">
                <img src="img/new01.jpg" alt="">
                <div class="carousel-caption">
                  <h3>Noticia destacada</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, at a iste hic non placeat assumenda fugiat quaerat! Dolores, quae!</p>
                  <a class="btn btn-default" href="#">Más Info</a>
                </div>
              </div>
              <div class="item">
                <img src="img/new01.jpg" alt="">
                <div class="carousel-caption">
                  <h3>Nosotros</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, at a iste hic non placeat assumenda fugiat quaerat! Dolores, quae!</p>
                  <a class="btn btn-default" href="#">Más Info</a>
                </div>
              </div>
              <div class="item">
                <img src="img/new02.jpg" alt="">
                <div class="carousel-caption">
                  <h3>Productos</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, at a iste hic non placeat assumenda fugiat quaerat! Dolores, quae!</p>
                  <a class="btn btn-default" href="#">Más Info</a>
                </div>
              </div>
              <div class="item">
                <img src="img/new03.jpg" alt="">
                <div class="carousel-caption">
                  <h3>Servicios</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, at a iste hic non placeat assumenda fugiat quaerat! Dolores, quae!</p>
                  <a class="btn btn-default" href="#">Más Info</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      
      <hr>
      
      <div class="row">
        <div class="col-lg-8">
          <div class="row news">
            <div class="col-lg-8">
              <img class="img-responsive" src="img/new02.jpg">
            </div>
            <div class="col-lg-4">
              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin auctor quam ac tempor.</p>
              <p><a href="">Leer más</a></p>
            </div>
          </div>
          <div class="row news">
            <div class="col-lg-8">
              <img class="img-responsive" src="img/new03.jpg">
            </div>
            <div class="col-lg-4">
              <h3>Lorem ipsum dolor sit amet.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin auctor quam ac tempor.</p>
              <p><a href="">Leer más</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="well input-group">
            <input type="text" class="form-control" placeholder="Buscar">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
            </span>
          </div>
          <h2>Últimas Noticias</h2>
          <hr>
          <ul>
            <li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
            <li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
            <li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
            <li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
            <li><a href="">Ver todas</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="map-canvas-inicio" class="map-canvas"></div>

    <div id="carousel_comentarios" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="active item">
          <span>
            <strong>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores praesentium itaque dolorem aut. Assumenda, doloribus!"</strong>
            <i>Nombre Apellido, Cargo de Empresa X</i>
          </span>
        </div>
        <div class="item">
            <strong>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, por non magni quod tempore error sapiente eos cupiditate aspernatur blanditiis."</strong>
            <i>Nombre Apellido, Cargo de Empresa X</i>
          </span>
        </div>
        <div class="item">
            <strong>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis praesentium necessitatibus quos repellendus."</strong>
            <i>Nombre Apellido, Cargo de Empresa X</i>
          </span>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
      var map;
      function initialize() {
        var mapOptions = {
          zoom: 8,
          scrollwheel: false,
          center: new google.maps.LatLng(-34.397, 150.644),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map-canvas-inicio'),
            mapOptions);
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </body>
</html>