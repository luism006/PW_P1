<?php


$connection = mysqli_connect("localhost","root","","datab_pw");

if(isset($_POST['registroadmbtn']))
{
    $id_ciudades = $_POST['id_ciudades'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $cpassword = $_POST['confirmcontraseña'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];
    $rolusuario = $_POST['rolusuario'];
    $imagen = $_FILES["imagen_merc"]['name'];
    $estado = $_POST['estado'];
    $fecha_actual = $_POST['fecha_actual'];

    if(file_exists("Subidas/" . $_FILES["imagen_merc"]['name']))
    {
        $store = $_FILES["imagen_merc"]['name'];
        $_SESSION['status'] = "Imagen ya existe. '.$store.'";
        header('Location: Registro.php');
    }
    else
    {
            if($contraseña === $cpassword)
            {
                
                $query = "INSERT INTO registro (id_ciudades,email,contraseña,nombre,apellido,telefono,descripcion,direccion,rolusuario,imagen,estado,fecha_actual)
                VALUES ('$id_ciudades','$email','$contraseña','$nombre','$apellido','$telefono','$descripcion','$direccion','$rolusuario','$imagen','$estado','$fecha_actual')";
                $query_run = mysqli_query($connection, $query);

                if($query_run)
                {
                    //echo "saved";
                    move_uploaded_file($_FILES["imagen_merc"]["tmp_name"], "Subidas/".$_FILES["imagen_merc"]['name']);
                    $_SESSION['success'] = "Registro exitoso!";
                    header('Location: admin.php');
                }
                else
                {
                    $_SESSION['status'] = "Admin Profile NOT Added";
                    header('Location: admin.php');
                }

            }
            else
            {
                $_SESSION['status'] = "Las contraseñas no coinciden.";
                header('Location: admin.php');
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
    $id_registro = $_POST['delete_id'];


    $query = "DELETE FROM registro WHERE id_registro='$id_registro' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Usuario eliminado.";
        header('Location: admin.php');
    }
    else
    {
        $_SESSION['status'] = "Usuario no eliminado.";
        header('Location: admin.php');

    }

}

?>




