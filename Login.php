<?php

session_start();

?>

<!doctype html>
<html lang="en">

<head>
  <title>Moto Race</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700%7CRoboto+Slab:400,700%7CMaterial+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!--Link de Iconos fontawesome-->
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>

  <!--relacionado con la (datatable)-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" >


</head>


<!-- Body -->
<body class="dark-edition">

  
  <!-- sidebar -->
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="black" data-image="./assets/img/scooter1.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"



      Tip 2: you can also add an image using data-image tag
  --> <!-- Logo -->
      <div class="logo">
        <a href="Inicio.php" class="simple-text logo-normal">
          Moto Race
        </a>
      </div>

      <!-- your sidebar here -->
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a class="nav-link" href="Inicio.php">
              <i class="material-icons">house</i>
              <p>INICIO</p>
            </a>
          </li>

          <li>
            <a class="nav-link" href="Empresas.php">
              <i class="material-icons">store</i>
              <p>EMPRESAS</p>
            </a>
          </li>

          <li>
            <a class="nav-link" href="Nosotros.php">
              <i class="material-icons">supervisor_account</i>
              <p>NOSOTROS</p>
            </a>
          </li>

          <li>
            <a class="nav-link" href="Ayuda.php">
              <i class="material-icons">contact_support</i>
              <p>AYUDA</p>
            </a>
          </li>

          <!-- your sidebar here -->

        </ul>
      </div>
    </div>
    
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">

        <!-- your navbar here -->
        </ul>
        </div>
      </div>
    </nav>
      <!-- End Navbar -->
      

      <!-- Inicio Container  -->  
      <div class="content">
        <div class="container-fluid">


        <?php
      if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                    {
                      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                       '.$_SESSION['status'].' 
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                      unset($_SESSION['status']);
                    }

                    ?>


          <!-- Inicio Login  -->  
          <div class="page-header header-filter" style="background-color: #21243d; background-size: cover; background-position: top center;">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                  <div class="card card-login">
                    <form class="form" action="logincode.php" method="POST">


                      <div class="card-header card-header-primary text-center"><i class="fas fa-user-circle fa-4x"></i>
                        <h4 class="card-title">Login</h4>                        
                      </div>  


                      <div class="card-body">
                        &nbsp;
                        
                            <!-- Material switch -->
                            <div class="form-check form-check-radio">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="rolusuario" id="exampleRadios1" value="empresa" >
                                  Empresa
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                              </label>
                          </div>
                          <div class="form-check form-check-radio">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="rolusuario" id="exampleRadios2" value="usuario" checked>
                                  Particular
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                              </label>
                          </div>
                          
                          <div class="btn-group btn-group-toggle" data-toggle="buttons" style="text-align: center">
  <label class="btn btn-success form-check-label active">
    <input class="form-check-input" type="radio" name="options" id="option1" autocomplete="off" checked>
    Empresa
  </label>
  <label class="btn btn-success form-check-label">
    <input class="form-check-input" type="radio" name="options" id="option2" autocomplete="off"> Particular
  </label>
</div>

                        <div class="input-group">

                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">mail</i>
                            </span>
                          </div>
                          <input type="email"  name="email" class="form-control" placeholder="Email...">
                        </div>
                        &nbsp;
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">lock_outline</i>
                            </span>
                          </div>
                          <input type="password"  name="contraseña" class="form-control" placeholder="Contraseña...">
                        </div>
                        <div style="text-align: right">
                          <p><a href="olcontrasena.php" >¿Olvidaste tu Contraseña?</a></p>
                      </div>      

                      <div style="text-align: center">
                        <button type="submit" name="login_btn" class="btn btn-success">Iniciar Sesión</button>
                    </div>

                      <hr>
                      <p class="description text-center">No tienes una cuenta?<a href="Registro_eleccion.php" > ¡Registrate!</a></p>
                      </div>                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Fin Login  --> 
          
          <!-- your content here -->
        </div>
      </div>
      <!-- footer -->
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="#">
                  Company YL
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made by Yeremis & Luis.
          </div>
          <!-- your footer here -->
          
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="./assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>


  <!--Funciones tabla y modal eliminar (tabla)-->
  <!--problemas con drows-->
 <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>-->
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<!--Botones exportar (tabla)-->
  <script src="assets/js/tabla/jszip.min.js"></script>
  <script src="assets/js/tabla/pdfmake.min.js"></script>
  <script src="assets/js/tabla/dataTables.buttons.min.js"></script>
  <script src="assets/js/tabla/buttons.print.min.js"></script>
  <script src="assets/js/tabla/buttons.html5.min.js"></script>
  <script src="assets/js/tabla/vfs_fonts.js"></script>



</body>

</html>