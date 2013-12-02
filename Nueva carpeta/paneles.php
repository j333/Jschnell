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
        <div class="col-lg-8">
          <h2>Título de una noticia de ejemplo</h2>
          <time>Jueves 12 de Noviembre de 2013</time>
          <p>Lorem ipsum dolor sit amet, <a href="">consectetur adipiscing elit</a>. Nullam sollicitudin auctor quam ac tempor. Cras a ante sed libero mollis sodales. Praesent fringilla, neque ut ultrices faucibus, dolor eros ultrices neque, nec bibendum arcu ipsum eget justo.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, distinctio, error dolorem minima iusto non vitae odit culpa blanditiis nihil aperiam id corrupti quod dignissimos incidunt ipsum illum quis eius.</p>
          <figure>
            <img class="img-responsive" src="img/new01.jpg" alt="">
            <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing.</figcaption>
          </figure>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, eos deserunt incidunt ex officia voluptatibus corporis consequatur adipisci reprehenderit impedit eius quos eligendi at enim quibusdam sequi cum sunt velit tempora ea commodi accusamus in. Hic, officiis ea nulla explicabo quisquam dolor! Animi, tempora perferendis accusantium eos deleniti omnis quas!</p>
          <div id="map-canvas-noticia" class="map-canvas"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, distinctio, error dolorem minima iusto non vitae odit culpa blanditiis nihil aperiam id corrupti quod dignissimos incidunt ipsum illum quis eius.</p>
        </div>

        <div class="col-lg-4">
          <br>
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
        </div><!-- well -->
      </div>
    </div><!-- /.container -->

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
        map = new google.maps.Map(document.getElementById('map-canvas-noticia'),
            mapOptions);
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </body>
</html>