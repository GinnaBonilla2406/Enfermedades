<?php
	function traer_lista_informacion( $nombre_lista, $tabla, $campo_llave_primaria, $campo_a_mostrar )
		{
			include( "config.php" ); //Aquí se traen los parámetros de la base de datos.
			//Hay que recordar que solo debería existir un archivo que permita dicha configuración.

			$salida = "";
			//------------SQL Se traen datos----------------------------------------------------
			$sql = "SELECT * FROM  $tabla ";
			//if( $sn_pruebas == "s" ) echo "<div class='contenedor-sql-pruebas'>".$sql."</div>";

			$conexion = mysqli_connect( $servidor, $usuario, $clave, $bd );
			$resultado = $conexion->query( $sql );	

			echo "<SELECT id='select' MULTIPLE='multiple' size='6' ng-click='cargar_datos_php();'>";

			while( $fila = mysqli_fetch_assoc( $resultado ) )
			{
				echo "<option value='".$fila[ 'id_signo' ]."'>".$fila[ $campo_a_mostrar ]."</option>";
			}

			echo "</SELECT>";
			return $salida;	
		}
		function consultar($valores)
			{	
				
				include( "config.php" );
				$salida="";
			  $sql="SELECT tb_enfermedades.enfermedad , COUNT(tb_resultado.id_enfermedad) as conteo_sintomas , (SELECT COUNT(tb_resultado.id_enfermedad) conteo_total FROM tb_resultado where tb_enfermedades.id_enfermedad = tb_resultado.id_enfermedad GROUP BY id_enfermedad) as conteo_total FROM tb_resultado , tb_enfermedades WHERE tb_resultado.id_enfermedad = tb_enfermedades.id_enfermedad AND tb_resultado.id_signo in($valores) GROUP BY tb_resultado.id_enfermedad";
				 	//echo $sql;
				$conexion = mysqli_connect( $servidor, $usuario, $clave, $bd );
				$resultado = $conexion->query( $sql );
				while( $fila = mysqli_fetch_assoc( $resultado ) )
			{
			      $salida.=$fila[ 'enfermedad' ]."<br>";
				  $salida.=$fila['conteo_sintomas']."<br>";
				  $salida.=$fila['conteo_total']."<br>";
			}
			 return $salida;
		}


		
?>
