<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGD Childprogramming| </title>

    <!-- Bootstrap -->
    <link href="{{asset('/sgd/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/sgd/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/sgd/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{asset('/sgd/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('/')}}" class="site_title"><i class="fa fa-reply"></i> <span>Regresar</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('sgd/images/user.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>Andres Vega</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            @include('tutor.menu');

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <nav>
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>


              </nav>
              @yield('subtittle')


            </div>
            @include('flash::message')
            @yield('content')

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('/sgd/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('/sgd/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('/sgd/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('/sgd/vendors/nprogress/nprogress.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('/sgd/build/js/custom.min.js')}}"></script>

    <script>
      $('#flash-overlay-modal').modal();
    </script>

    @yield('js')
  </body>
</html>
