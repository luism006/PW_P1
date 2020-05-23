<?php
session_start();

if(isset($_POST['salir_btn']))
{
    session_destroy();
    unset($_SESSION['email']);
    header('Location: Login.php');
}
else if(isset($_POST['salir_btn']))
{
    session_destroy();
    unset($_SESSION['email_emp']);
    header('Location: Login.php');
}

?>