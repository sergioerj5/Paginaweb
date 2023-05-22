<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../dist/output.css" rel="stylesheet">
	<title>Cielo Olmeca</title>
	<style>
		html,
		body {
			height: 100%;
		}
	</style>
</head>

<body class="flex flex-col min-h-screen ">
	<header class="flex flex-row p-4 max-w-screen justify-between items-center backdrop-blur-xl bg-white/25">
		<nav class="flex ml-12 ">
			<a href="index.php" class="a-primary">Inicio</a>
			<a href="./paginas/Atencion.html" class="a-primary">Atencion al Cliente</a>
		</nav>
	</header>

	<main class="flex-grow bg-cover bg-center  items-center justify-center "
		style="background-image: url('img/img2.jpg');">
		<section class="flex  justify-center bg-cover w-full bg-center">
			<article class="flex flex-col justify-center items-center backdrop-blur-sm bg-white/25 self-center w-full p-3 mt-2 rounded-md">
				<a href="index.php" class="button-prymary">Regresar</a>
			</article>
		</section>

		<section class="container mx-auto">
			<article class="flex flex-col py-2 ">
				<?php
				require_once('../BD/conexion.php');

				$query = "SELECT
				reservaciones.pk_reservacion,
				reservaciones.folio AS folio,
				pasajeros.nombre AS nombre,
				pasajeros.apellido AS apellido,
				horarios.hora_salida AS hora_salida,
				horarios.hora_llegada AS hora_llegada,
				ciudad_salida.ciudad AS ciudad_salida,
				vuelos.`duración`,
				ciudad_destino.ciudad AS ciudad_destino,
				horarios.pk_horario AS pk_horario,
				tipo_paquetes.tipo,
				tipo_paquetes.costo AS costoTipo,
				reservaciones.fk_asiento AS NoAsiento,
				`Costo de maletas adicionales`.maleta_extra AS MaletasExtra,
				`Costo de maletas adicionales`.costo 
			FROM
				(
					(
						(
							( reservaciones JOIN pasajeros ON ( ( reservaciones.fk_pasajero = pasajeros.pk_pasajero ) ) )
							JOIN horarios ON ( ( reservaciones.fk_horario = horarios.pk_horario ) ) 
						)
						JOIN ciudades AS ciudad_salida ON ( ( horarios.fk_ciudad_salida = ciudad_salida.pk_ciudad ) ) 
					)
					JOIN ciudades AS ciudad_destino ON ( ( horarios.fk_ciudad_destino = ciudad_destino.pk_ciudad ) ) 
				)
				INNER JOIN tipo_paquetes ON reservaciones.fk_tipo_paquete = tipo_paquetes.pk_tipo_paquete
				INNER JOIN adicionales AS `Costo de maletas adicionales` ON reservaciones.fk_adicional = `Costo de maletas adicionales`.pk_adicional
				INNER JOIN vuelos ON horarios.fk_vuelo = vuelos.pk_vuelo 
			ORDER BY
				reservaciones.pk_reservacion DESC 
				LIMIT 1";
				
				$resultados = mysqli_query($conexion, $query);
								
				while ($row = mysqli_fetch_assoc($resultados)) {
					
					echo '<h1 class="flex items-center justify-between bg-amber-200 rounded-md shadow-md hover:shadow-xl w-full h-fit my-5">Datos del usuario</h1>';
					echo '<section class="flex items-center justify-between bg-white rounded-md shadow-md hover:shadow-xl w-full h-fit my-5">

					
						<div class="flex items-center" style="background-color: rgba(255, 255, 255, 0.25);">
						
							<div class="flex p-4" style="margin-right: 10px;">
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['pk_reservacion'] . '</h4> 
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['folio'] . '</h4> 
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['nombre'] . '</h4> 
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['apellido'] . '</h4> 
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['hora_salida'] . '</h4> 
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['hora_llegada'] . '</h4> 
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['ciudad_salida'] . '</h4> 
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['duración'] . '</h4> 
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['ciudad_destino'] . '</h4>
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['tipo'] . '</h4> 
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['costoTipo'] . '</h4> 
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['NoAsiento'] . '</h4> 
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['MaletasExtra'] . '</h4> 
								<h4 class="text-xl text-lime-700 font-bold px-2 m-4">' . $row['costo'] . '</h4> 
							</div>
					
						</div>
					</section>';
				}
				?>
			</article>
		</section>
	</main>
</body>

</html>
