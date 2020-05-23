<?php
session_start();

$connection = mysqli_connect("localhost","root","","datab_pw");

if(isset($_POST['registrobtn_emp']))
{
    $id_ciudades = $_POST['id_ciudades'];
    $empresas = $_POST['empresas'];
    $email_emp = $_POST['email_emp'];
    $contraseña_emp = $_POST['contraseña_emp'];
    $cpassword = $_POST['confirmcontraseña'];
    $rnc_emp = $_POST['rnc_emp'];
    $ncf_emp = $_POST['ncf_emp'];
    $representante_emp = $_POST['representante_emp'];
    $tel_representante_emp = $_POST['tel_representante_emp'];
    $direccion_emp = $_POST['direccion_emp'];
    $telefono_emp = $_POST['telefono_emp'];
    $descripcion_emp = $_POST['descripcion_emp'];
    $imagen = $_FILES["imagen_merc"]['name'];
    $estado_emp = $_POST['estado_emp'];
    $fecha_actual_emp = $_POST['fecha_actual_emp'];
    $rolusuario_emp = $_POST['rolusuario_emp'];
    

    if(file_exists("Subidas/" . $_FILES["imagen_merc"]['name']))
    {
        $store = $_FILES["imagen_merc"]['name'];
        $_SESSION['status'] = "Imagen ya existe. '.$store.'";
        header('Location: Registroempresas.php');
    }
    else
    {
            if($contraseña_emp === $cpassword)
            {
                
                $query = "INSERT INTO empresas (id_ciudades,email_emp,empresas,contraseña_emp,rnc_emp,ncf_emp,representante_emp,tel_representante_emp,direccion_emp,telefono_emp,descripcion_emp,imagen,estado_emp,fecha_actual_emp,rolusuario_emp) 
                                        VALUES ('$id_ciudades','$email_emp','$empresas','$contraseña_emp','$rnc_emp','$ncf_emp','$representante_emp','$tel_representante_emp','$direccion_emp','$telefono_emp','$descripcion_emp','$imagen','$estado_emp','$fecha_actual_emp','$rolusuario_emp')";
                $query_run = mysqli_query($connection, $query);

                if($query_run)
                {
                    //echo "saved";
                    move_uploaded_file($_FILES["imagen_merc"]["tmp_name"], "Subidas/".$_FILES["imagen_merc"]['name']);
                    $_SESSION['success'] = "Registro exitoso!";
                    header('Location: Registroempresas.php');
                }
                else
                {
                    $_SESSION['status'] = "Admin Profile NOT Added";
                    header('Location: Registroempresas.php');
                }

            }
            else
            {
                $_SESSION['status'] = "Las contraseñas no coinciden.";
                header('Location: Registroempresas.php');
            }
    }
}
?>