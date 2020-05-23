<?php
session_start();

$connection = mysqli_connect("localhost","root","","datab_pw");

if(isset($_POST['registrobtn_empadm']))
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
                    header('Location: admin_emp.php');
                }
                else
                {
                    $_SESSION['status'] = "Admin Profile NOT Added";
                    header('Location: admin_emp.php');
                }

            }
            else
            {
                $_SESSION['status'] = "Las contraseñas no coinciden.";
                header('Location: admin_emp.php');
            }
    }
}


//Code editar
if(isset($_POST['actualizarbtn']))
{
    $id_registro = $_POST['edit_id'];
    $id_ciudades = $_POST['edit_ciudades'];
    $email = $_POST['edit_email'];
    $contraseña = $_POST['edit_contraseña'];
    $nombre = $_POST['edit_nombre'];
    $apellido = $_POST['edit_apellido'];
    $direccion = $_POST['edit_direccion'];
    $telefono = $_POST['edit_telefono'];
    $descripcion = $_POST['edit_descripcion'];
    $rolusuarioupdate =  $_POST['actualizar_rolusuario'];
    $edit_imagen_merc = $_FILES["imagen_merc"]['name'];
    $actualizar_estado = $_POST['actualizar_estado'];
    
    $query = "UPDATE registro SET email='$email', contraseña='$contraseña', nombre='$nombre', apellido='$apellido', direccion='$direccion', id_ciudades='$id_ciudades', telefono='$telefono', descripcion='$descripcion', rolusuario='$rolusuarioupdate', imagen='$edit_imagen_merc', estado='$actualizar_estado' WHERE id_registro= '$id_registro' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["imagen_merc"]["tmp_name"], "Subidas/".$_FILES["imagen_merc"]['name']);
        $_SESSION['success'] = "Los datos se han actualizado.";
        header('Location: admin.php');
    }
    else
    {
        $_SESSION['status'] = "Los datos no se han actualizado.";
        header('Location: admin.php');

    }


}






//Code eliminar
if(isset($_POST['delete_btn']))
{
    $id_empresas = $_POST['delete_id'];


    $query = "DELETE FROM empresas WHERE id_empresas='$id_empresas' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "empresa eliminado.";
        header('Location: admin_emp.php');
    }
    else
    {
        $_SESSION['status'] = "empresa no eliminado.";
        header('Location: admin_emp.php');

    }

}

?>

?>