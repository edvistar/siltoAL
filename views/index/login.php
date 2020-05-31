<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login SILTO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo constant('URL'); ?>public/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style0.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style2.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>

   <!-- Cabecera y menu -->
<header id="header-home">
  <div class="hero">
    <div class="container-fluid">
      <div class="container-log">
        <div class="row-back">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="col-md-4">
                      <a href="<?php echo constant('URL'); ?>">
                          <img src="<?php echo constant('URL'); ?>public/img/SILTO.png" alt="logo de la pagina">
                      </a>
                  </div>
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                  <a href="<?php echo constant('URL'); ?>" class="btn btn-danger">INICIO</a>
                  </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="back-link back-backend"></div>
              </div>
        </div>
        <div class="row-log">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-6">
                <div class="hpanel">
                  <div class="panel-body">
                    <h1>INICIA SESION</h1>
                        <form action="<?php echo constant('URL'); ?>main" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="email">USUARIO</label>                              <input type="email" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="email" id="email" class="form-control">               <span class="help-block small">Escriba su usuario</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">CONTRASEÑA</label>                      <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control"><span class="help-block small">Escriba su contraseña</span>
                                <input type="hidden" name="auth" value="auth"/>
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Ingresar</button>
                       </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
      </div>
    </div>
  </div>
</header>




    <!-- jquery
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo constant('URL'); ?>public/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo constant('URL'); ?>public/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/icheck/icheck.min.js"></script>
    <script src="<?php echo constant('URL'); ?>public/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
    <script src="<?php echo constant('URL'); ?>public/js/main1.js"></script>
</body>

</html>