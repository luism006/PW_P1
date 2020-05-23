<?php
include('docs/security.php');
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
$connection = mysqli_connect("localhost","root","","datab_pw");

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $contraseña_login = $_POST['contraseña']; 
    $rolusuario = $_POST['rolusuario']; 

    if($rolusuario == 'usuario'){

    $query = "SELECT * FROM registro WHERE email='$email_login' AND contraseña='$contraseña_login' ";
    $query_run = mysqli_query($connection, $query);
    $rolusuario = mysqli_fetch_array($query_run);

    if($rolusuario['rolusuario'] == "admin")
    {
        $_SESSION['email'] = $email_login;
        header('Location: admin.php');
    }
    else if($rolusuario['rolusuario'] == "usuario")
    {
        $_SESSION['email'] = $email_login;
        header('Location: inicio.php');
        
    }
    else
    {
        $_SESSION['status'] = "Email / Contraseña es incorrecto.";
        header('Location: Login.php');

    }  

}
else if($rolusuario == 'empresa'){

    $queryemp = "SELECT * FROM empresas WHERE email_emp='$email_login' AND contraseña_emp='$contraseña_login' ";
    $query_run = mysqli_query($connection, $queryemp);
    $rolusuario_emp = mysqli_fetch_array($query_run);
    if($rolusuario_emp)
    {
        $_SESSION['email_emp'] = $email_login;
        header('Location: inicio.php');
    }
    else
    {
        $_SESSION['status'] = "Email / Contraseña es incorrecto.";
        header('Location: Login.php');

    }

 }

}


?>