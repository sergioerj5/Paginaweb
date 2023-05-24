<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../dist/output.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<title>Reservación</title>
	<style>
		html,
		body {
			height: 100%;
		}
	</style>
</head>

<body class="flex flex-col min-h-screen ">
	<header>
		<nav class="main-nav">
			<ul class="lista">
				<li><a href="index.php" >Destino</a></li>
				<li><a href="./paginas/Atencion.html" >¿Quienes somos?</a></li>
				<li><a href="./paginas/Atencion.html" class="a-primary">Atencion al Cliente</a></li>
			</ul>
		</nav>


	</header>

	<main class="flex-grow bg-cover bg-center  items-center justify-center "
		style="background-image: url('img/img2.jpg');">
		<section class="flex  justify-center bg-cover w-full bg-center">
			<article
				class="flex flex-col justify-center items-center backdrop-blur-sm bg-white/25 self-center w-full p-3 mt-2 rounded-md">
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
					echo '<h1 class="flex items-center justify-between bg-red-500 rounded-md shadow-md hover:shadow-xl w-full h-fit my-5">';
					echo '<span class="text-3xl font-bold">Datos del usuario</span>';
					echo '</h1>';

					echo '<section class="flex items-center justify-start h-fit my-5 px-4">
						<div class="flex items-center w-[90%] mx-auto" style="background-color: rgba(255, 255, 255, 0.25);">
							<div class="flex p-4" style="margin-right: 10px;">
								<div>
									<h1 class="text-2xl text-lime-700 font-bold px-1 m-4">Datos del pasajero</h1>
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'ID_RESERVACIÓN: ' . $row['pk_reservacion'] . '</h4> 
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Folio de la reservación: ' . $row['folio'] . '</h4>
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Nombre: ' . $row['nombre'] . '</h4> 
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Apellido: ' . $row['apellido'] . '</h4>
									
									<h1 class="text-2xl text-lime-700 font-bold px-1 m-4">Datos del Vuelo</h1> 
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Hora de salida: ' . $row['hora_salida'] . '</h4> 
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Hora de llegada: ' . $row['hora_llegada'] . '</h4> 
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Ciudad de salida: ' . $row['ciudad_salida'] . '</h4> 
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Duración del vuelo: ' . $row['duración'] . '</h4> 
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Ciudad de destino: ' . $row['ciudad_destino'] . '</h4>
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Tipo de paquete: ' . $row['tipo'] . '</h4> 
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Costo: ' . $row['costoTipo'] . '</h4> 
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Número de asiento: ' . $row['NoAsiento'] . '</h4> 
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Número de maletas extra: ' . $row['MaletasExtra'] . '</h4> 
									<h4 class="text-xl text-black font-bold px-2 m-4">' . 'Costo por maletas extra: ' . $row['costo'] . '</h4> 
								</div>
								
								<div>
									
								</div>
								
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