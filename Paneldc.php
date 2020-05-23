<?php
include('docs/security.php');
?>

<!doctype html>
<html lang="en">

<head>
  <title>Moto Race</title>
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

          <!-- your sidebar here -->
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

            <!-- Titulo Panel de Control -->
            <a class="navbar-brand" href="Paneldc.html"><i class="fas fa-desktop"></i><strong>&nbspPanel de control</strong></a>
           <!-- Titulo Panel de Control -->
          
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">       
              
           </ul>
          </div>      

         <!-- search  -->
         <div class="collapse navbar-collapse justify-content-end">
          <form class="navbar-form">
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Buscar...">
              <button type="submit" class="btn btn-default btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <span class="ripple-container"></span>
              </button>
            </div>
          </form>

          <!-- Messenger notifications Boton -->
          <ul class="navbar-nav">
            <li class="nav-item">
             <a class="nav-link" href="javascript:void(0)">
               <i class="material-icons">chat</i>
               <span class="notification">5</span>
               <p class="d-lg-none d-md-block">
                 Stats
               </p>
             </a>
           </li>
 
            <!-- Dropdown usurio -->
           <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="javscript:void(0)" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php
              error_reporting(0);
                   if(!$_SESSION['email'])
                    {
                      echo $_SESSION['email_emp'];
                    }
                    else
                    {
                      echo $_SESSION['email'];
                    }
             ?></span>
                <img class="img-profile rounded-circle" width="30px" src="assets/img/faces/User1.png">
              </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="navbarDropdownMenuLink">
              
              <a class="dropdown-item" href="Perfilus.php"><i class="fas fa-user fa-lg fa-fw mr-2 text-gray-400"></i>
                Perfil
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-lg fa-fw mr-2 text-gray-400"></i>
                Configuración
              </a>
              <a class="dropdown-item" href="Paneldc.php">
                <i class="fas fa-desktop fa-lg fa-fw mr-2 text-gray-400"></i>
                Panel de control
              </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-lg fa-fw mr-2 text-gray-400"></i>
                Cerrar Sesión
                </a>
            </div>
          </li>
          <!-- Fin Dropdown usurio -->

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
                    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                    {
                      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                       '.$_SESSION['success'].' 
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                      unset($_SESSION['success']);
                    }

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

          <!-- Inicio breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb blue-grey lighten-4">
              <li class="breadcrumb-item"><a class="black-text" href="Inicio.php"><strong>Inicio</strong></a><i
                  class="fas fa-angle-double-right mx-2" aria-hidden="true"></i></li>              
              <li class="breadcrumb-item active"><strong>Panel de Control</strong></li>
            </ol>
          </nav>
<!-- Fin breadcrumb -->

          <!-- Inicio Texto central(Publicaciones) -->
          <div class="card card-nav-tabs text-center">
  <h4 class="card-header card-header-info">ANUNCIOS</h4>
  <div class="card-body">
    <h4 class="card-title">Publica tus mercancias</h4>
    <p class="card-text">Si deseas colocar tus anuncios, haz clic en el botón Publicar..!!</p>
    <a href="paneldcp.php" class="btn btn-warning"> <i class="far fa-newspaper"></i> PUBLICAR</a>
  </div>
</div>
<!-- Fin Texto central(Publicaciones) -->

<!-- Inicio Card Chart -->
        <div class="row">

          <!-- Inicio Dashboard -->
  <div class="col-md-4">
    <div class="card card-chart">
      <div class="card-header card-chart card-header-danger">
        <div class="ct-chart" id="dailySalesChart"></div>
        </div>  
      <div class="card-body">
        <h4 class="card-title">Ventas Diarias</h4>
        <p class="card-category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 55%  </span> Aumento en ventas.</p>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">access_time</i> actualizado hace 4 minutos
        </div>
      </div>
    </div>
  </div>
  <!-- 2do Dashboard -->
  <div class="col-md-4">
  <div class="card card-chart">
    <div class="card-header card-chart card-header-warning">
      <div class="ct-chart" id="completedTasksChart"></div>
    </div>  
    <div class="card-body">
      <h4 class="card-title">Publicaciones Realizadas</h4>
      <p class="card-category">Últimas publicaciones</p>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">access_time</i> actualizado hace 2 minutos

      </div>
    </div>
  </div>
</div>
<!-- Fin Dashboard -->

<!-- Inicio Card Stats -->
  <div class="col-md-4">
      <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
                <i class="material-icons">content_copy</i>
            </div>
            <p class="card-category">Espacio Utilizado</p>
            <h3 class="card-title">49/50 <small>GB</small></h3>
          </div>
          <div class="card-footer">
              <div class="stats">
                  <i class="material-icons text-warning">warning</i>
                  <a href="#pablo" class="warning-link">Obtener más espacio...</a>
              </div>
          </div>
      </div>
         <!-- 2do Card Stats -->
        <div class="col-lg-4 col-lg-12">
        <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                  <i class="far fa-newspaper"></i></i>
                  </div>
                  <p class="card-category">Total Anuncios</p>
                  <h3 class="card-title">
                    <?php


                      $query = "SELECT id_mercancias FROM mercancias ORDER BY id_mercancias";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3>' .$row. '</h3>';
                      ?>

                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Recién actualizado
                  </div>
                </div>
              </div>
      </div>
  </div>
<!-- Fin Card Stats -->



<!-- Tabla de anuncios -->
            <div class="card shadow mb-4">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tus anuncios</h4>
                  <p class="card-category"> Listado de mercancias Publicadas</p>
                </div>
                <div class="card-body">                 
                  <div class="table-responsive">

                  <?php
                     

                     $query = "SELECT * FROM mercancias";                     
                     $query_run = mysqli_query($connection, $query);

                 ?>
                    <table id="dtBasicExample" class="table table-hover ">
                      <thead>
                        <tr>
                          <th><strong>ID</strong></th>
                          <th><strong>Foto</strong></th>
                          <th><strong>Estado</strong></th>                          
                          <th><strong>Marca</strong></th>
                          <th><strong>Modelo</strong></th>
                          <th><strong>Cc</strong></th>
                          <th><strong>Fecha</strong></th>                          
                          <th><strong>Editar</strong></th>
                        </tr>
                    </thead>
                      <tbody>

                      <?PHP
                      if(mysqli_num_rows($query_run)> 0)
                      {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                          ?>




                        <tr>
                          <td><?php echo $row['id_mercancias']; ?></td>
                          
                          <td><?php echo'  
                            <div class="card-avatar">
                              <a href="#">
                                <img class="rounded float-left" src="Subidas/'.$row['imagen'].'" width="100px;" alt="Problema al cargar imagen">
                              </a>
                            </div>   '?> 
                            </td>
                            <td><?php echo $row['estado']; ?></td>            
                            <td><?php echo $row['tipo']; ?></td>  
                          <td><?php echo $row['id_modelos']; ?></td>
                          <td class="text-info"><?php echo $row['cc']; ?></td>
                          <td class="text-info"><?php echo date('d-m-Y', strtotime($row['fecha_actual'])); ?></td>

                          <td class="td-actions text-left">
                          <form action="edit_panel.php" method="post">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id_mercancias']; ?>">         
                          <button type="submit" name="edit_btn" class="btn btn-info btn-just-icon btn-sm" title="Editar">
                              <i class="material-icons">edit</i>
                          </button>
                      
                            
                            </form>
                          </td>
                            
                            
                        </tr>
                        <?php
                        }

                      }
                      else{
                        echo "No Record Found";
                      }                        
                      ?>
                        

                      </tbody>
                    </table>                   
                  </div>
                </div>
              </div>
            </div>
            <!-- Fin Tabla de anuncios -->


<!-- Fin Card Chart -->
  </div>
<!-- Fin Card Chart -->

  <!-- Fin Container  --> 
  </div>
</div>
 <!-- Fin Container  --> 
        

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


    <!-- Modal Cerrar sesion -->
  <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  
    <!-- Modal Cerrar sesion -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Seguro que desea salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>

            <form action="logout.php" method="POST">
          <button type="submit" name="salir_btn" class="btn btn-success" >Cerrar sesión</button>
          </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin Modal Cerrar sesion -->


     <!-- Modal (eliminar) -->
<div id="deletemodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modaleliminar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">¿Seguro que quieres borrar este elemento?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
            </div>
            <form action="codedatabpcp.php" method="post">
            <div class="modal-body">
            <input type="hidden" name="delete_id" id="delete_id">                  
                <p class="text-warning">Si lo borras, nunca podrás recuperarlo.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
               
                  <button type="submit" name="deletepc_btn" class="btn btn-danger">Eliminar</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal (eliminar) -->


    
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
    //Javascript

    

    //Tabla (Anuncios)

   //modal-eliminar
  $('document').ready(function () {
    $('.deletepc_btn').on('click', function(){
      $('#deletemodal').modal('show');

      $tr= $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#delete_id').val(data[0]);
    });
  });

//español-pdf,csv, excel
  $(document).ready(function() {
    $('#dtBasicExample').DataTable({
      "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
          {
            extend:  'pdfHtml5',
            text: '<i class="fas fa-file-pdf"></i>',
            tittleAttr: 'Exportar a Pdf',
            className:  'btn btn-danger btn-just-icon btn'
          },
          {
            extend:  'excelHtml5',
            text: '<i class="fas fa-file-csv"></i>',
            tittleAttr: 'Exportar a Csv',
            className:  'btn btn-warning btn-just-icon btn'
          },
          {
            extend:  'excelHtml5',
            text: '<i class="fas fa-file-excel"></i>',
            tittleAttr: 'Exportar a Excel',
            className:  'btn btn-success btn-just-icon btn'
          },
          

            
        ],
                
    });
} );
    // Fin Tabla (Anuncios)



    
    
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