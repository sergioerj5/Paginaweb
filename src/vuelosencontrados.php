<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../dist/output.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- <link rel="stylesheet" href="../estilos.css"> -->	
	<title>Vuelos</title>
</head>

<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Los parámetros se están enviando mediante el método POST
		$fechaSalida = $_POST['fecha-salida'];
		$fechaLlegada = $_POST['fecha-llegada'];
		$ciudadSalida = $_POST['ciudad-salida'];
		$ciudadDestino = $_POST['ciudad-destino'];
		$tipodevuelo = $_POST['tipo-de-vuelo'];
		// Aquí puedes realizar las validaciones adicionales que necesites
		if (empty($fechaSalida) || empty($fechaLlegada) || empty($ciudadSalida) || empty($ciudadDestino)) {
			// Algunos parámetros están vacíos, muestra un mensaje de error
			echo "Por favor, complete todos los campos.";
		} else {
			// Todos los parámetros están presentes, puedes continuar con tu lógica de negocio
			// Ejecutar la consulta, procesar los datos, etc.
			// ...
			require_once ('../BD/conexion.php');
			$query="SELECT
			c_salida.ciudad AS salida,
			c_llegada.ciudad AS destino,
			h.hora_salida,
			h.hora_llegada,
			aeropuertos.nombre,
			vuelos.fecha_salida,
			vuelos.fecha_llegada,
			vuelos.duración,
			tipos_vuelos.tipo as tipovuelo,
			tipos_pasajeros.tipo as tipopasajero,
			h.pk_horario 
		FROM
			horarios AS h
			JOIN ciudades AS c_salida ON h.fk_ciudad_salida = c_salida.pk_ciudad
			JOIN ciudades AS c_llegada ON h.fk_ciudad_destino = c_llegada.pk_ciudad
			INNER JOIN aeropuertos ON h.fk_aeropuerto = aeropuertos.pk_aeropuerto
			INNER JOIN vuelos ON h.fk_vuelo = vuelos.pk_vuelo
			INNER JOIN tipos_vuelos ON vuelos.fk_tipo_vuelo = tipos_vuelos.pk_tipo_vuelo,
			pasajeros
			INNER JOIN tipos_pasajeros ON pasajeros.fk_tipo_pasajero = tipos_pasajeros.pk_tipo_pasajero 
		WHERE
			vuelos.fecha_salida >= '$fechaSalida'
			AND vuelos.fecha_llegada >= '$fechaLlegada'
			AND h.fk_ciudad_destino = '$ciudadDestino' 
			AND h.fk_ciudad_salida = '$ciudadSalida' 
			AND vuelos.fk_tipo_vuelo = '$tipodevuelo'";
		$resultados= mysqli_query($conexion, $query);

		}
	} else {
		// Los parámetros no se están enviando mediante el método POST
		echo "Error: Los parámetros deben enviarse mediante el método POST.";
	}
	

?>

<body class="flex flex-col min-h-screen ">
	<header class="flex flex-row p-4 max-w-screen justify-between items-center backdrop-blur-xl bg-white/25">
		<nav class="flex ml-12 ">
		<a href="index.php" class="a-primary">Inicio</a>
        <a href="./paginas/Atencion.html" class="a-primary">Atencion al Cliente</a>
		</nav>
	</header>
	<main class="flex-grow bg-cover bg-center  items-center justify-center " style="background-image: url('img/img2.jpg');">
		<section  class="flex  justify-center bg-cover w-full bg-center">
			<article class="flex flex-col justify-center items-center backdrop-blur-sm bg-white/25 self-center w-full p-3 mt-2 rounded-md">
				<a href="Secondpage.php" class="button-prymary">Seguir Buscando</a>
			</article>
		</section>

		<section class="container mx-auto">
			<article class="flex flex-col py-2 ">

	<?php
			// Verificar si la consulta devolvió resultados
		if (mysqli_num_rows($resultados) > 0) {
			// Imprimir los datos
			while ($row = mysqli_fetch_assoc($resultados)) {
				echo '<section class="flex items-center justify-between bg-white rounded-md shadow-md hover:shadow-xl w-full h-fit my-1">
				<div class="flex items-center ">
					<div class="flex p-4">
						<h4 class="text-xl text-lime-700 font-bold px-4 m-4">'.$row['salida'].' </h4> 
						<div class="flex flex-col items-center">
							<p>--------<i class="fa-solid fa-plane-departure "></i>--------</p>
							<p>'.$row['duración'].'</p>
						</div>
						<h4 class="text-xl text-lime-700 font-bold px-4 m-4">'.$row['destino'].'</h4>
					</div>
					<div class="flex ">
						<div class="mx-1 ">
							<h3 class="text-base font-semibold">Hora de salida</h3>
							<p>'.$row['hora_salida'].'</p>
							<h3 class="text-base font-semibold">Hora de llegada</h3>
							<p >'.$row['hora_llegada'].'</p>
						</div>
						<div class="mx-1">
							<h3 class="text-base font-semibold">Fecha de salida</h3>
							<p>'.$row['fecha_salida'].'</p>
							<h3 class="text-base font-semibold">Fecha de Regreso</h3>
							<p >'.$row['fecha_llegada'].'</p>
						</div>
					</div>
					<h3 class="text-xl text-lime-700 font-bold px-4 m-4">'.$row['tipovuelo'].'</h3>
				</div>
				<div class="mx-4">
					<a class="button-prymary" href="combos.php?idVuelo='.$row['pk_horario'].'">Continuar</a>
				</div>
			</section>';
			}
		} else {
			// No se encontraron resultados
			echo "No se encontraron resultados.";
		}
	
	?>
	
			</article>
			
		</section>

	</main>



	</main>
</body>
</html>