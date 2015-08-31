<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recom - Contacto</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <link href='http://fonts.googleapis.com/css?family=Teko:400,600' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700' rel='stylesheet' type='text/css'>


      <link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>

      
    
  </head>

  <body>

    <nav class=" navbar reconav navbar-inverse navbar-fixed-top" role="navigation">
        <div class=" container">
            <div class=" navbar-header">

                <a class="navbar-brand" href="index.html"><img src="img/logotipo.png" width="19%"></a>



                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=" collapse navbar-collapse navbar-ex1-collapse">
                <ul class=" nave nav navbar-nav navbar-right">
                    <li><a href="nosotros.html">Nosotros</a>
                    </li>
                    <li><a href="mezcla.html">Mezcla Brava</a>
                    </li>
                     <li><a href="preguntas.html">Preguntas</a>
                    </li>
                    <li><a href="productos.html">Productos</a>
                    </li>
                    <li><a href="contacto.php">Contacto</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Escríbenos <small>¡Con gusto te atenderémos!</small></h1>
         
        </div>
        
        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
        

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1885.627855173784!2d-98.23845319999997!3d19.0524916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc7279d602cdf%3A0x6cb84dae7d088d9!2sAv+25+Pte+5301%2C+Reforma%2C+Her%C3%B3ica+Puebla+de+Zaragoza%2C+Pue.!5e0!3m2!1ses!2smx!4v1441061808120" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>


        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Let's Get In Touch!</h3>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Nombre</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Teléfono</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Escribe tus comentarios</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Enviar</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Visítanos</h3>
          <h4>25 pte 5301</h4>
          <p>
             Col. Santa Cruz Buena Vista.
          </p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">T</abbr>: (222) 605 1937</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">@</abbr>: <a href="mailto:contacto.recom@gmail.com">contacto.recom@gmail.com</a></p>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: 8:00 AM to 5:00 PM</p>

          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="https://es-la.facebook.com/people/Recom-Construcciones-SA-DE-CV/100006261977983" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
          </ul>

        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="copy col-lg-12">
            <p>Algunos derechos reservados © Recom Construcciones 2015 - 2016.</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

  </body>
</html>
