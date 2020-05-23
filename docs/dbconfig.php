<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "datab_pw";

$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection,$db_name);

if($dbconfig)
{
    // echo "Database conected";
}
else
{
    echo '
        <div class="container">
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center py-5 mt-5">
                    <div class="card">
                        <div class="card-body">
                        <h1 class="card-title bg-warning text-white"> Database connectio Failed</h1>
                        <h2 class="card-title"> Database Failure</h2>
                        <p class="card-text"> Please Check Your Database Connection.</p>
                        <a href="#" class="btn btn-primary"> :( </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ';
}
?>