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
    <link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet">

  </head>

  <body>

    <?php include 'header.php'; ?>

    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <article>
            <h2>Título de una noticia de ejemplo</h2>
            <time>Jueves 12 de Noviembre de 2013</time>
            <img class="img-responsive" src="img/new01.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, <a href="">consectetur adipiscing elit</a>. Nullam sollicitudin auctor quam ac tempor. Cras a ante sed libero mollis sodales. Praesent fringilla, neque ut ultrices faucibus, dolor eros ultrices neque, nec bibendum arcu ipsum eget justo.</p>
            <p><a href="noticia.php">Continuar leyendo ></a></p>
          </article>
          <hr>
          <article>
            <h2>Título de una noticia de ejemplo</h2>
            <time>Jueves 12 de Noviembre de 2013</time>
            <img class="img-responsive" src="img/new02.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, <a href="">consectetur adipiscing elit</a>. Nullam sollicitudin auctor quam ac tempor. Cras a ante sed libero mollis sodales. Praesent fringilla, neque ut ultrices faucibus, dolor eros ultrices neque, nec bibendum arcu ipsum eget justo.</p>
            <p><a href="noticia.php">Continuar leyendo ></a></p>
          </article>
          <hr>
          <article>
            <h2>Título de una noticia de ejemplo</h2>
            <time>Jueves 12 de Noviembre de 2013</time>
            <img class="img-responsive" src="img/new03.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, <a href="">consectetur adipiscing elit</a>. Nullam sollicitudin auctor quam ac tempor. Cras a ante sed libero mollis sodales. Praesent fringilla, neque ut ultrices faucibus, dolor eros ultrices neque, nec bibendum arcu ipsum eget justo.</p>
            <p><a href="noticia.php">Continuar leyendo ></a></p>
          </article>
          <hr>
          <article>
            <h2>Título de una noticia de ejemplo</h2>
            <time>Jueves 12 de Noviembre de 2013</time>
            <img class="img-responsive" src="img/new01.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, <a href="">consectetur adipiscing elit</a>. Nullam sollicitudin auctor quam ac tempor. Cras a ante sed libero mollis sodales. Praesent fringilla, neque ut ultrices faucibus, dolor eros ultrices neque, nec bibendum arcu ipsum eget justo.</p>
            <p><a href="noticia.php">Continuar leyendo ></a></p>
          </article>

          <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>

        </div>

        <div class="col-lg-4">
          <div class="well input-group">
            <input type="text" class="form-control" placeholder="Buscar en noticias">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
            </span>
          </div>

        <div class="row">

          <div id="datepicker" class="col-xs-12 col-sm-6"></div>

          <div class="col-xs-12 col-sm-6">
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

        </div><!-- well -->
      </div>
    </div><!-- /.container -->

    <?php include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
      $(function() {$( "#datepicker" ).datepicker();});
      $(function($){
          $.datepicker.regional['es'] = {
              closeText: 'Cerrar',
              prevText: '<Ant',
              nextText: 'Sig>',
              currentText: 'Hoy',
              monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
              monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
              dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
              dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
              dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
              weekHeader: 'Sm',
              dateFormat: 'dd/mm/yy',
              firstDay: 1,
              isRTL: false,
              showMonthAfterYear: false,
              yearSuffix: ''
          };
          $.datepicker.setDefaults($.datepicker.regional['es']);
      });
    </script>
    <script src="js/script.js"></script>
  </body>
</html>