<?php
$connection = mysqli_connect("localhost","root","","datab_pw");
	
	$id_provincias = $_POST['id_provincias'];
	
	$queryM = "SELECT id_ciudades, ciudades FROM ciudades WHERE id_provincias = '$id_provincias' ORDER BY ciudades ASC";
	$resultadoM = mysqli_query($connection,$queryM);
	
	$html= "<option value='0'>Seleccione</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_ciudades']."'>".$rowM['ciudades']."</option>";
	}
	
	echo $html;
?>		