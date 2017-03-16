<!--
*Autores: Ginna Bonilla Y Jhon Moreno
*Fecha: 16/03/2017
*Plan de Mejoramiento, este es el archivo base.
-->

<?php include('funciones.php'); ?>

<html ng-app="acumuladorApp">
	<head>
		<center>
			<img width="1350" src="IMG/imagen.jpg" class="img-responsive">
		</center>
			<title>Mascotas</title>
			<script type="text/javascript" src="JS/funcion.js"></script>
			<script src="JS/an00gular.min.js"></script>
	</head>
	<body>
		<div ng-controller="acumuladorAppCtrl">
			<?php 
			include('lista.php');
			include('enfermedades.php');
			//include('formulario.php');
	 		?>
	 	</div>
			<script type="text/javascript" src="JS/angular.js"></script>
	</body>

</html>
