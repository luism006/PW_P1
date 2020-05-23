<?php
include('codedatab.php');

$query = "SELECT id_provincias, provincias FROM provincias ORDER BY provincias ASC";
	$resultado=mysqli_query($connection,$query);

?>