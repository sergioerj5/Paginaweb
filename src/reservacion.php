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
<?php

?>


<?php
session_start();

require_once('../BD/conexion.php');
session_start();
if (isset($_SESSION['pk_vuelo'])) {
    $pk_vuelo = $_SESSION['pk_vuelo'];
    // Puedes utilizar la variable $pk_vuelo para realizar consultas o acciones adicionales
} else {
    // El valor de pk_vuelo no está disponible en la sesión
    echo "Error: El valor de pk_vuelo no está disponible en la sesión.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Los parámetros se están enviando mediante el método POST
	
			$fechaSalida = $_SESSION['fs'];
			$fechaLlegada = $_SESSION['fll'];
			$ciudadSalida = $_SESSION['ciudadS'];
			$ciudadDestino = $_SESSION['ciudadD'];
			$tipodevuelo = $_SESSION['tipo'];
			

	// Aquí puedes realizar las validaciones adicionales que necesites


		// Verificar si la consulta devolvió resultados
		// Aquí puedes realizar las validaciones adicionales que necesites
if (empty($fechaSalida) || empty($fechaLlegada) || empty($ciudadSalida) || empty($ciudadDestino)) {
	// Algunos parámetros están vacíos, muestra un mensaje de error
	echo "Por favor, complete todos los campos.";
} else {
	// Todos los parámetros están presentes, puedes continuar con tu lógica de negocio
	// Ejecutar la consulta, procesar los datos, etc.
	$query = "SELECT
		reservaciones.folio AS folio,
		pasajeros.nombre AS nombre,
		pasajeros.apellido AS apellido,
		reservaciones.fk_tipo_paquete AS fk_tipo_paquete,
		reservaciones.fk_adicional AS fk_adicional,
		horarios.hora_salida AS hora_salida,
		horarios.hora_llegada AS hora_llegada,
		ciudad_salida.ciudad AS ciudad_salida,
		ciudad_destino.ciudad AS ciudad_destino 
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
		)";

	$resultados = mysqli_query($conexion, $query);

	// Verificar si la consulta devolvió resultados
	if (mysqli_num_rows($resultados) > 0) {
		while ($row = mysqli_fetch_assoc($resultados)) {
			// Mostrar los datos en el HTML
			echo '<section class="flex items-center justify-between bg-white rounded-md shadow-md hover:shadow-xl w-full h-fit my-4">
				<div class="flex items-center">
					<div class="flex p-4" style="margin-right: 100px;">
						<h4 class="text-xl text-lime-700 font-bold px-4 m-4">' . $row['ciudad_salida'] . ' </h4> 
						<div class="flex flex-col items-center">
							<p>--------<i class="fa-solid fa-plane-departure"></i>--------</p>
							<p>' . $row['duración'] . '</p>
						</div>
						<h4 class="text-xl text-lime-700 font-bold px-4 m-4">' . $row['ciudad_destino'] . '</h4>
					</div>
					<div class="flex" style="margin-top: 20px;">
						<div class="mx-1" style="margin-right: 100px;">
							<h3 class="text-base font-semibold">Hora de salida</h3>
							<p>' . $row['hora_salida'] . '</p>
							<h3 class="text-base font-semibold">Hora de llegada</h3>
							<p>' . $row['hora_llegada'] . '</p>
						</div>
						
						<div class="mx-1" style="margin-right: 100px;">
							<h3 class="text-base font-semibold">Fecha de salida</h3>
							<p>' . $fechaSalida . '</p>
							<h3 class="text-base font-semibold">Fecha de Regreso</h3>
							<p>' . $fechaLlegada . '</p>
						</div>
					</div>
					<h3 class="text-xl text-lime-700 font-bold px-100 m-4">' . $row['tipo'] . '</h3>
				</div>
				<div class="mx-4" style="margin-right: 100px;">
					<a class="button-prymary" href="combos.php?idVuelo=' . $row['pk_horario'] . '">Continuar</a>
				</div>
			</section>';
		}
	} else {
		// No se encontraron resultados
		echo "No se encontraron resultados.";
	}
}

} 
	?>
	
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
		<article
			class="flex flex-col justify-center items-center backdrop-blur-sm bg-white/25 self-center w-full p-3 mt-2 rounded-md">
			<a href="" class="button-prymary">Regresar</a>
		</article>
	</section>

	<section class="container mx-auto">
		<article class="flex flex-col py-2 ">
			<?php
			// El código de impresión de datos se mueve dentro de este bloque
			?>
		</article>
	</section>

</main>

</body>

</html>
