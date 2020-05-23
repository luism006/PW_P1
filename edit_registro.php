<?php
include('docs/security.php');

	
  $id_provincias = 2;
	
	$query = "SELECT id_ciudades, ciudades.id_provincias FROM provincias INNER JOIN ciudades ON provincias.id_provincias=ciudades.id_provincias WHERE ciudades.id_provincias = '$id_provincias'";
	$resultado =  mysqli_query($connection, $query);
	$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
	$provincia = $row['id_provincias'];
	$ciudad = $row['id_ciudades'];
	
	$queryE = "SELECT id_provincias, provincias FROM provincias ORDER BY provincias";
	$resultadoE =  mysqli_query($connection, $queryE);
	
	$queryM = "SELECT id_ciudades, ciudades FROM ciudades WHERE id_provincias = '$provincia' ORDER BY ciudades";
  $resultadoM =  mysqli_query($connection, $queryM);
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
  <!--Jquery-->
<script language="javascript" src="./assets/js/jquery-3.1.1.min.js"></script>

<script language="javascript">
		  $(document).ready(function(){
			  $("#id_provincias").change(function () {

				  $("#id_provincias option:selected").each(function () {
					  id_provincias = $(this).val();
					  $.post("docs/getciudades.php", { id_provincias: id_provincias }, function(data){
						  $("#id_ciudades").html(data);
					  });            
				  });
			  })
		  });
</script>
 

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
        <a href="Inicio.html" class="simple-text logo-normal">
          Moto Race
        </a>
      </div>

      <!-- your sidebar here -->
      <div class="sidebar-wrapper">
        <ul class="nav">

          <!-- your sidebar here -->
          <li class="nav-item active">            
            <a class="nav-link" href="admin.php">
              <i class="fas fa-users"></i>
              <p>USUARIOS</p>
            </a>
          </li>

          
          <li>            
            <a class="nav-link" href="admin-Pub.html">
              <i class="fas fa-newspaper"></i>
              <p>PUBLICACIONES</p>
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
          <a  class="navbar-brand" href="adm.html">
            <i class="fas fa-users-cog"></i> Administración
          </a>
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
          

          <!-- Messenger notifications Boton -->
          <ul class="navbar-nav">
            <li class="nav-item">
             <a class="nav-link" href="javascript:void(0)">
              <i class="fas fa-inbox fa-2x"></i>
               <span class="notification">5</span>
               <p class="d-lg-none d-md-block">
                 Stats
               </p>
             </a>
           </li>
 
            <!-- Dropdown usurio -->
           <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="javscript:void(0)" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['email'];?></span>
                <img class="img-profile rounded-circle" width="30px" src="assets/img/faces/User1.png">
              </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="navbarDropdownMenuLink">
              
              
              <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-lg fa-fw mr-2 text-gray-400"></i>
                Configuración
              </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Inicio.html" data-toggle="modal" data-target="#logoutModal">
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
          


 <!-- Inicio Formulario  --> 
 <div class="row">
 <div class="col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
            <div class="card">
              <div class="card-header card-header-info">
                <h4 class="card-title">Edición de registro</h4>
                <p class="card-category">Edita el registro seleccionado</p>
              </div>
              <div class="card-body">

              
      <?php 

$connection = mysqli_connect("localhost","root","","datab_pw");

      if(isset($_POST['edit_btn']))
      {
          $id_registro = $_POST['edit_id'];
          
          $query = "SELECT * FROM registro WHERE id_registro='$id_registro' ";
          $query_run = mysqli_query($connection, $query);

          foreach($query_run as $row)
          {
            ?>

                <form action="codedatab.php" method="POST">
                  <input type="hidden" name="edit_id" value="<?php echo $row['id_registro']; ?>">
                   <div class="row">
                     <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Correo Electrónico</label>
                        <input type="email" name="edit_email" value="<?php echo $row['email']; ?>" class="form-control" required="">
                      </div>
                    </div>


                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Contraseña</label>
                        <input type="password" name="edit_contraseña" value="<?php echo $row['contraseña']; ?>" class="form-control" required="">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nombre(s)</label>
                        <input type="text" name="edit_nombre" value="<?php echo $row['nombre']; ?>" class="form-control" required="">
                      </div>
                    </div>


                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Apellido(s)</label>
                        <input type="text" name="edit_apellido" value="<?php echo $row['apellido']; ?>" class="form-control" required="">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Dirección</label>
                        <input type="text" name="edit_direccion" value="<?php echo $row['direccion']; ?>" class="form-control" required="">
                      </div>
                    </div>
                  </div>

                  <div class="row">                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Provincia</label>
                          <select name="edit_provincias" id="edit_provincias" class="form-control" required="">
                                <option value="0">Seleccione</option>
                                <?php while($rowE = $resultadoE->fetch_assoc()) { ?>                      
                                  <option value="<?php echo $rowE['id_provincias']; ?>" <?php if($rowE['id_provincias']==$provincia) { echo 'selected'; } ?> ><?php echo $rowE['provincias']; ?></option>
                                <?php } ?>
                            </select>                            
                        </div>
                      </div>

                    <div class="col-md-4">
                      <div>
                        <div class="form-group"> 
                          <label for="exampleFormControlSelect1">Ciudad</label>            
                            <select name="edit_ciudades" id="edit_ciudades" class="form-control" required="">
                                <?php while($rowM = $resultadoM->fetch_assoc()) { ?>
                                  <option value="<?php echo $rowM['id_ciudades']; ?>" <?php if($rowM['id_ciudades']==$ciudad) { echo 'selected'; } ?>><?php echo $rowM['ciudades']; ?></option>
                                <?php } ?>	
                            </select>            
                          </div> 
                        </div>
                      </div>   


                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Teléfono</label>
                            <input type="tel" name="edit_telefono" value="<?php echo $row['telefono']; ?>" class="form-control" required="">
                        </div>
                      </div>
                  </div>


                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>Descripción</label>
                        <div class="form-group">
                          <label class="bmd-label-floating"> A que te dedicas?</label>
                          <textarea type="text" name="edit_descripcion" value="" class="form-control" rows="5" ><?php echo $row['descripcion']; ?></textarea>
                        </div>
                      </div>
                    </div>


                    <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tipo usuario</label>
                          <select name="actualizar_rolusuario" class="form-control">
                            <option value="admin"> Admin </option>
                            <option value="usuario"> usuario </option>
                          </select>  
                        </div>
                      </div>
                    </div>

                    <div class="col-md-2">
                      <div class="form-group">
                         <label for="exampleFormControlSelect1">Estado</label>
                         <select name="actualizar_estado" id="actualizar_estado" class="form-control" required="">
                         <option value="A" <?php if($row['estado']=="A") { echo "selected"; }?>>A</option>
                         <option value="I" <?php if($row['estado']=="I") { echo "selected"; }?>>I</option>
                         </select>                             
                      </div>
                    </div>
             

                     <!-- imagen -->
                     <div class="card card-nav-tabs text-center">
                      <h4 class="card-header card-header-info">IMAGEN</h4>
                      <div class="card-body">
                        <h4 class="card-title">SELECCIONA IMAGEN QUE DESA CAMBIAR</h4>
                          <p class="card-text">Para seleccionar una imagen, haz clic en el botón Examinar.</p>
                          <div class="file-upload-wrapper">
                           <input type="file" name="imagen_merc" id="imagen_merc" value="<?php echo $row['imagen']; ?>" class="file-upload"/>
                          </div>
                        </div>
                      </div>

                  
                  <button type="submit" name="actualizarbtn" class="btn btn-success center-block">Actualizar</button>
                   <a class="btn btn-danger" href="admin.php">Cancelar</a>
                  <div class="clearfix"></div>
                                  
         
              
          </form>
              <?php
          }
      }
      ?>

            </div>
          </div>
        </div>
      
           
          <!-- Fin Formulario  --> 


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
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>

          <form action="logout.php" method="POST">
          <button type="submit" name="salir_btn" class="btn btn-primary">Cerrar sesión</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Modal Cerrar sesion -->








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
      $(document).ready(function () {
      $('#dtBasicExample').DataTable();
      $('.dataTables_length').addClass('bs-select');
      });
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
</body>

</html>