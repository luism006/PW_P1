<?php 
session_start();
include('docs/dbconfig.php');

if($dbconfig)
{
    //echo "Database Connected";
}
else
{
    header("Location: docs/dbconfig.php");
} 

/*
if(isset($_SESSION['email']))
{
    if(!$_SESSION['email_emp'])
{
    header('Location: Login.php');
}

}
*/

?>