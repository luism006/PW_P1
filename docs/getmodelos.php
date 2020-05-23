<?php

$connection = mysqli_connect("localhost","root","","datab_pw");
	
	$id_marcas = $_POST['id_marcas'];
	
	$queryM = "SELECT id_modelos, modelos FROM modelos WHERE id_marcas = '$id_marcas' ORDER BY modelos ASC";
	$resultadoM = mysqli_query($connection,$queryM);
	
	$html= "<option value='0'>Seleccione</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_modelos']."'>".$rowM['modelos']."</option>";
	}
	
	echo $html;
?>		