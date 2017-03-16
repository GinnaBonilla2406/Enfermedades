<!--
*Autores: Ginna Bonilla Y Jhon Moreno
*Fecha: 16/03/2017
*Plan de Mejoramiento, este es el archivo donde salen las enfermedades.
-->
<html ng-app="acumuladorApp">
	<head>
		<title></title>
				<link rel="stylesheet"  href="CSS/bootstrap.min.css">
				<script type="text/javascript" src="JS/funcion.js"></script>
				<script src="JS/an00gular.min.js"></script>
	</head>
			<body>
					<form action="validar.php" method="post">
						<div ng-controller="acumuladorAppCtrl">
							<div class="container-fluid"></div>
								<div class="row">
									<div class="col-xs12 col-md-4 col-lg-4"></div>
										<div class="col-xs12 col-md-4 col-lg-4 well">
											<label>
												<h2>Sintomas y Signos</h2>
											</label>
												<?php 
												echo traer_lista_informacion("dato1", "tb_signos_sintomas", "id_signos", "signos_sintomas"); 
												?>
											<input type="hidden" id="cont-salida" name="salida">
											<br>
											<br>
											<input type="hidden" value="Analizar">
							 		<div class="col-xs12 col-md-4 col-lg-4">
							 			<div ng-repeat="x in campos">
							            Enfermedad: <b> {{ x.Alias }}</b><br> Cantidad Sintomas: {{ x.Nombres }} <br>Cantidad Sintomas Total:  {{ x.Documento }} <br><br>
							        	</div>
							 		</div>
					</form>
			</body>
</html>
