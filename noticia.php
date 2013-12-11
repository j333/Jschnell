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

    <div class="container margin">
      <div class="row">
        <div class="col-sm-8">
          <h1>JSCHNELL GROUP, estuvo durante los últimos días en la Cdad. Capital de Salta.</h1>
          <time>Jueves 12 de Noviembre de 2013</time>
          <p>Terminando de Poner en Marcha, el "Sistema Central de Frío Alimentario", en la nueva Sucursal de la cadena local, DAMESCO.</p>
          <p>Allí, se realizo el montaje de Camaras Frigoríficas, para alimentos perecederos. También se instalaron todas las exhibidoras para Carnes, Lácteos, Fiambres, Pozos de Frio, para productos Congelados, etc.</p>
          <p>Otra grata experiencia, que compartimos junto a los productos de la línea ARNEG.</p>
          <figure>
            <img class="img-responsive" src="img/damasco1.jpg" alt="">
            <!--figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing.</figcaption-->
          </figure>
          <figure>
            <img class="img-responsive" src="img/damasco2.jpg" alt="">
            <!--figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing.</figcaption-->
          </figure>
          <figure>
            <img class="img-responsive" src="img/damasco3.jpg" alt="">
            <!--figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing.</figcaption-->
          </figure>
          <div id="map-canvas-noticia" class="map-canvas"></div>
        </div>

        <div class="col-sm-4">
          <br>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar en noticias">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
            </span>
          </div>
          <br>
          <h2>Últimas Noticias</h2>
          <ul>
            <li><a href="noticia.php">JSCHNELL GROUP, estuvo durante los últimos días en la Cdad. Capital de Salta.</a></li>
          </ul>
        </div><!-- well -->
      </div>
    </div><!-- /.container -->

    <a id="subir" title="Subir" href=""></a>

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
          zoom: 12,
          scrollwheel: false,
          center: new google.maps.LatLng(-24.779877,-65.412651),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map-canvas-noticia'),
            mapOptions);
        setMarkers(map, beaches);
      }

    var beaches = [
        ['Salta', -24.779877,-65.412651, 1],
      ];

      function setMarkers(map, locations) {

        var image = {
          url: 'img/map.png',
          size: new google.maps.Size(32, 32),
          origin: new google.maps.Point(0,0),
          anchor: new google.maps.Point(02, 40)
        };

        var shape = {
            coord: [1, 1, 1, 20, 18, 20, 18 , 1],
            type: 'poly'
        };
        for (var i = 0; i < locations.length; i++) {
          var beach = locations[i];
          var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
          var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              icon: image,
              shape: shape,
              title: beach[0],
              zIndex: beach[3]
          });
        }
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </body>
</html>