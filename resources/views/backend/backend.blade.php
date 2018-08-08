<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Administrador -  </title>
  
    <!-- Custom Theme Style -->
    <link href="{{ asset('css/my.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>CMC Poblenou</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{url('')}}/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Lloc web <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Categories</a></li>
                      <li><a href="index.html">Esdeveniments</a></li>
                      <li><a href="index2.html">Cursos i tallers</a></li>
                      <li><a href="index2.html">Agenda</a></li>
                      <li><a href="index3.html">Galeria</a></li>
                      <li><a href="index2.html">Banners</a></li>
                      <li><a href="index2.html">Slider</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Secretaria <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Usuaris</a></li>
                      <li><a href="form_advanced.html">Reserves</a></li>
                      <li><a href="form_validation.html">Fer-me soci</a></li>
                      <li><a href="form_wizards.html">Cursos i tallers</a></li>
                      <li><a href="form_wizards.html">Contacte</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Butlleti <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">Mostrar</a></li>
                      <li><a href="general_elements.html">Crear</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">     

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
           
            </div>
          
          </div>

        </div>
        <!-- end of weather widget -->
      </div>
    </div>
    
    <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Made with Ssancle 
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</div>

<!-- Custom Theme Scripts -->
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/smartresize.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

