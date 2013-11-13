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
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/new02.jpg" alt="">
              </div>
            </div>
          </div>

          <div id="servicios">
            <h1>Servicios</h1>
            <ul>
              <li><a href="">Lorem ipsum dolor sit amet ></a></li>
              <li><a href="">Sed at pretium turpis ></a></li>
              <li><a href="">Curabitur nec sapien id velit ></a></li>
            </ul>
          </div>

        </div>
      </div>
      
      <hr>
      
      <div class="row">
        <div class="col-lg-8">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Servicios #1
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                  <ul>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetur.</a></li>
                    <li><a href="">Lorem ipsum dolor sit.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    Servicios #2
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse in">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                  <ul>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetur.</a></li>
                    <li><a href="">Lorem ipsum dolor sit.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    Servicios #3
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse in">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                  <ul>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetur.</a></li>
                    <li><a href="">Lorem ipsum dolor sit.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
                  </ul>
                </div>
              </div>
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
        </div>
      </div>
    </div><!-- /.container -->

    <?php include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <script>
      $(".collapse").collapse()
    </script>
  </body>
</html>