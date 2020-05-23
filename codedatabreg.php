<?php
session_start();

$connection = mysqli_connect("localhost","root","","datab_pw");

if(isset($_POST['registrobtn']))
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
                    header('Location: Registro.php');
                }
                else
                {
                    $_SESSION['status'] = "Admin Profile NOT Added";
                    header('Location: Registro.php');
                }

            }
            else
            {
                $_SESSION['status'] = "Las contraseñas no coinciden.";
                header('Location: Registro.php');
            }
    }
}
?>