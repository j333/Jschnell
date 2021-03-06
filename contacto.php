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

    <?php include "header.php"; ?>

    <div class="container margin">
      <h1>Contacto</h1>

      <div class="row">
        <div class="col-sm-4">
          <p>Para más información y asesoramiento personalizado, por favor complete el formulario y a la brevedad nos estaremos comunicando con usted.</p>
          <p>También podemos atenderlo en los siguientes teléfonos</p>
          <p>+54 2615 888222 o 3415066336 <br> de lunes a viernes de 9 a 21 hs.</p>
          <p>Encuéntrenos en las redes sociales</p>
          <ul class="list-inline">
            <li><a class="ico twitter" href=""></a></li>
            <li><a class="ico facebook" href=""></a></li>
            <li><a class="ico googleplus" href=""></a></li>
          </ul>
        </div>

      <div class="well col-sm-8">
          <div class="row">
              <div class="col-sm-5">
                  <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input type="text" class="form-control" placeholder="Su nombre y apellido">
                </div>
                  <div class="form-group">
                  <label>Empresa</label>
                  <input type="text" class="form-control" placeholder="Nombre de la empresa">
                </div>
                  <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" placeholder="Su email">
                </div>
                  <div class="form-group">
                  <label>Asunto</label>
                  <select id="subject" name="subject" class="form-control">
                      <option value="na" selected="">Servicios en general</option>
                      <option value="product">Departamento Comercial</option>
                      <option value="service">Servicios</option>
                      <option value="suggestions">Productos</option>
                  </select>
                </div>
              </div>
              <div class="col-md-7 form-group">
                  <label>Mensaje</label>
                  <textarea name="message" id="message" class="form-control" rows="12"></textarea>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-send"></i>  Enviar</button>
              </div>
          </div>
      </div>
        <!-- well -->
      </div>
      
    </div><!-- /.container -->

    <?php include "footer.php"; ?>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>