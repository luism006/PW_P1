<?php

$mysqli = new mysqli("localhost", "root", "", "db_pwm");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (". $mysqli->connect_errno.")" .$mysqli->connect_error;
}

/*$link = mysqli_connect("localhost", "root", "") or die ("<h2>No se encuentra el servidor</h2>");
$db = mysqli_select_db("db_pwm",$link) or die("<h2>Error de conexion</h2>");*/

/*$req = (strlen($nombre)*strlen($apellido)*strlen($direccion)*strlen($telefono)) or die("no se han llenado todos los campos <br><br><a href='Registro.html'>");
mysql_query("INSERT INTO negocios (nombre,apellido,direccion,telefono)values('$_POST[Nombre]','$_POST[Apellido]','$_POST[Direccion]','$_POST[Telefono]')"); 
echo '
    <h2>Registro completo</h2>
    <a href="Login-cm.html">Logearse</a>';*/

?>