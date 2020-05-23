<?php
include('docs/security.php');

$connection = mysqli_connect("localhost","root","","datab_pw");

if(isset($_POST['publicarbtn']))
{
    $id_modelos = $_POST['id_modelos'];
    $tipo = $_POST['tipo'];
    $año = $_POST['año'];
    $condicion = $_POST['condicion'];
    $color = $_POST['color'];
    $combustible = $_POST['combustible'];
    $transmision = $_POST['transmision'];
    $cc = $_POST['cc'];
    $precio = $_POST['precio']; 
    $descripcion = $_POST['descripcion'];
    $imagen = $_FILES["imagen_merc"]['name'];
    $estado = $_POST['estado'];
    $fecha_actual = $_POST['fecha_actual'];

    if(file_exists("Subidas/" . $_FILES["imagen_merc"]['name']))
    {
        $store = $_FILES["imagen_merc"]['name'];
        $_SESSION['status'] = "Imagen ya existe. '.$store.'";
        header('Location: paneldcp.php');
    }
    else
    {

        $query = "INSERT INTO mercancias (id_modelos,tipo,año,condicion,color,combustible,transmision,cc,precio,descripcion,imagen,estado,fecha_actual) 
        VALUES ('$id_modelos','$tipo','$año','$condicion','$color','$combustible','$transmision','$cc','$precio','$descripcion','$imagen','$estado','$fecha_actual')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            //echo "saved";
            move_uploaded_file($_FILES["imagen_merc"]["tmp_name"], "Subidas/".$_FILES["imagen_merc"]['name']);
            $_SESSION['success'] = "Publicación Realizada!";
            header('Location: paneldc.php');
        }
        else
        {
            $_SESSION['status'] = "Publicación erronea (No realizada).";
            header('Location: paneldc.php');
        }

    }
        
    

    
}




//Code editar
if(isset($_POST['actualizarpcbtn']))
{
    $id_mercancias = $_POST['edit_id'];
    $id_modelos = $_POST['edit_modelos'];
    $tipo = $_POST['edit_tipo'];
    $año = $_POST['edit_año'];
    $condicion = $_POST['edit_condicion'];
    $color = $_POST['edit_color'];
    $combustible = $_POST['edit_combustible'];
    $transmision = $_POST['edit_transmision'];
    $cc = $_POST['edit_cc'];
    $precio = $_POST['edit_precio'];
    $descripcion = $_POST['edit_descripcion'];
    $edit_imagen_merc = $_FILES["imagen_merc"]['name'];
    $actualizar_estado = $_POST['actualizar_estado'];
    
    $query = "UPDATE mercancias SET id_modelos='$id_modelos', tipo='$tipo', año='$año', condicion='$condicion', color='$color', 
    combustible='$combustible', transmision='$transmision', cc='$cc', precio='$precio', descripcion='$descripcion', imagen='$edit_imagen_merc', estado='$actualizar_estado' WHERE id_mercancias = '$id_mercancias' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["imagen_merc"]["tmp_name"], "Subidas/".$_FILES["imagen_merc"]['name']);
        $_SESSION['success'] = "Los datos se han actualizado.";
        header('Location: paneldc.php');        
    }
    else
    {
        $_SESSION['status'] = "Los datos no se han actualizado.";
        header('Location: paneldc.php');

    }


}



//Code eliminar
if(isset($_POST['deletepc_btn']))
{
    $id_mercancias = $_POST['delete_id'];


    $query = "DELETE FROM mercancias WHERE id_mercancias='$id_mercancias' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Mercancia eliminada.";
        header('Location: paneldc.php');
    }
    else
    {
        $_SESSION['status'] = "Mercancia no eliminado (Erroneo).";
        header('Location: paneldc.php');

    }

}


?>