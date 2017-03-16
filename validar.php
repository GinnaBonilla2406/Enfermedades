<!--
*Autores: Ginna Bonilla Y Jhon Moreno
*Fecha: 16/03/2017
*Plan de Mejoramiento.
-->
<?php 
	include'funciones.php';
	if(isset($_POST['salida']))
	{
		//echo $_POST['salida'];
		$valores=$_POST['salida'];
		echo consultar($valores);
	}
 ?>
