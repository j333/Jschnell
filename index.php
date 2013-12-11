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
    	<!-- Indicators -->
    	<ol class="carousel-indicators">
    		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
    	</ol>

    	<!-- Wrapper for slides -->

    	<div id="carousel_imagenes_inicio" class="carousel-inner">

    		<!--div class="item active">
    			<img src="img/new01.jpg" alt="">
    			<div class="carousel-caption">
	    			<div class="container">
	    				<h3>Nuevo frigorífico modelo en Argentina</h3>
	    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, at a iste hic non placeat assumenda fugiat quaerat! Dolores, quae!</p>
	    				<a class="btn btn-default" href="#"><i class="glyphicon glyphicon-plus"></i> Más Info</a>
	    			</div>
    			</div>
    		</div-->

    		<div class="item active">
    			<img src="img/ini_nosotros.png" alt="">
	    		<div class="carousel-caption">
	    			<div class="container">
	    				<h3>Nosotros</h3>
	    				<p>Nos proyectamos a pasos ciertos y sostenidos con una expansión creciente dia a día. Conozca quienes somos.</p>
	    				<a class="btn btn-default" href="nosotros.php"><i class="glyphicon glyphicon-plus"></i> Más Info</a>
	    			</div>
    			</div>
    		</div>

    		<div class="item">
    			<img src="img/ini_productos.png" alt="">
    			<div class="carousel-caption">
	    			<div class="container">
	    				<h3>Productos</h3>
	    				<p> Con el respaldo de Arneg, contamos con equipamiento de primera línea y alta tecnología a nivel internacional a  medida de su negocio.</p>
	    				<a class="btn btn-default" href="productos.php"><i class="glyphicon glyphicon-plus"></i> Más Info</a>
	    			</div>
	    		</div>
    		</div>

    		<div class="item">
    			<img src="img/ini_servicios.png" alt="">
    			<div class="carousel-caption">
	    			<div class="container">
	    				<h3>Servicios</h3>
	    				<p>Proveemos servicios de ingeniería, suministros, montaje e instalación, como también operación y gestión de proyectos minoristas, industriales, complejos y de gran escala, desde el diseño hasta la puesta en marcha.</p>
	    				<a class="btn btn-default" href="servicios.php"><i class="glyphicon glyphicon-plus"></i> Más Info</a>
	    			</div>
    			</div>
    		</div>

    	</div>

    </div>

    <div class="section-colored text-center">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">    			
    				<img id="arneg_logo" src="img/logo-arneg.png">
    				<strong><p>Representante Comercial Arneg</p></strong>
    			</div>
    		</div><!-- /.row -->
    	</div><!-- /.container -->
    </div>

    <div class="container news-inicio">
      
      <div class="row">
        <div class="col-lg-8">
          <div class="row news">
            <div class="col-lg-8">
              <img class="img-responsive" src="img/new02.jpg">
            </div>
            <div class="col-lg-4">
              <h3>JSCHNELL GROUP, estuvo durante los últimos días en la Cdad. Capital de Salta.</h3>
              <p>Terminando de Poner en Marcha, el "Sistema Central de Frío Alimentario", en la nueva Sucursal de la cadena local, DAMESCO.</p>
              <p><a href="noticia.php"><i class="glyphicon glyphicon-chevron-right"></i> Continuar leyendo</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <h2>Últimas Noticias</h2>
          <ul>
            <li><a href="noticia.php">JSCHNELL GROUP, estuvo durante los últimos días en la Cdad. Capital de Salta.</a></li>
            <li><a href=""><i class="glyphicon glyphicon-plus"></i> Ver más</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="map-canvas" class="map-canvas"></div>

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
      function initialize() {
        var mapOptions = {
          zoom: 4,
          scrollwheel: false,
          center: new google.maps.LatLng(-40.369141,-60.61687),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);

        setMarkers(map, beaches);
      }

      var beaches = [
        ['VEA - Complejo Patio Palmeras, Catamarca', -28.467484,-65.77932, 1],
        ['VEA - Paso de los Libres, Corrientes', -27.470201,-58.839737, 2],
        ['Supermercados De la Montaña - Neuquén', -38.898515,-71.333252, 3],
        ['Autoservicio PITTY - Río Negro', -38.668356,-68.220034, 4],
        ['INVAP S.E. - Bariloche', -41.131607,-71.31099, 5],
        ['Supermercados La Esperanza - San Luis', -51.631657,-69.22657, 6],
        ['Vea - Tucumán', -26.806299,-65.218384, 7],
        ['Mayorista BUJ - Mendoza', -32.874974,-68.831116, 8],
        ['Metalurgica ANDERLUCCI - Mendoza', -32.931471,-68.796097, 9],
        ['Supermercados Sarmiento - Mendoza', -32.973244,-68.785797, 10],
        ['VEA - Complejo BARRACAS OPEN MALL - Mendoza', -32.913027,-68.81984, 11],
        ['ORALCO Obras Civiles - Mendoza', -32.945968,-68.83289, 12],
        ['Mayorista Oscar David - Mendoza', -32.922537,-68.838986, 13],
        ['Mayorista CARNES DE MI CAMPO - Mendoza', -32.919079,-68.825279, 14],
        ['Mayorista CARNES DE MI CAMPO - Mendoza', -32.919079,-68.825279, 15]
      ];

      function setMarkers(map, locations) {

        var image = {
          url: 'img/map.png',

          size: new google.maps.Size(32, 32),

          origin: new google.maps.Point(0,0),

          anchor: new google.maps.Point(12, 50)
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