<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../dist/output.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Combo</title>
</head>




<body class="flex flex-col min-h-screen ">
<header>
        <nav class="main-nav">
            <ul class="lista">
                <li><a href="index.php">Destino</a></li>
                <li><a href="./paginas/Atencion.html">¿Quienes somos?</a></li>
                <li><a href="./paginas/Atencion.html" class="a-primary">Atencion al Cliente</a></li>
            </ul>
        </nav>
    </header>
	<main class="flex-grow ">

		<h1 class=" font-extrabold text-center text-5xl ">Elije tu forma de viajar</h1>
		<!-- ofertas de viajes -->
		<section class="flex justify-center">

			<article
				class="group shadow-md rounded-md px-3 m-2 h-96 hover:shadow-xl w-fit flex flex-col justify-between bg-white">
				<div>
					<h2 class="text-3xl font-extrabold mt-2 group-hover:text-sky-500">
						Zero
					</h2>
					<hr class=" border-gray-100 mb-4">
					<p class="text-md font-semibold mb-2 group-hover:font-bold">
						Tarifa preferencial por viajar ligero.
					</p>
					<ul class="list-disc list-inside ">
						<li class="">1 articulo personal</li>
						<li class="">La TUA se agregará automáticamente</li>
						<li class="">X no puede elegir su asiento</li>

					</ul>
				</div>
				<div class="self-end mb-2">
					<h4 class="text-2xl font-bold text-orange-500 text-right w-full my-2">250$</h4>
					<?php
					//  echo '<a href="pasajeros.php?idvuelo=' . $idvuelo . '&paquete=1" class="text-lg text-right button-prymary">Continuar con Zero</a>';
					?>



					<?php
					session_start();

					// Verificar si se envió el formulario 1
					if (isset($_POST['paquete'])) {
						// Guardar los datos en variables de sesión
						$_SESSION['paqueteSeleccionado'] = $_POST['paquete'];

						// Redirigir al formulario 2
						header("Location: pasajeros.php");
						exit;

					}

					?>
					<?php
					require('../BD/conexion.php');

					if (isset($_GET['pkHorario'])) {
						$pk_Horario = $_GET['pkHorario'];

						$query = "SELECT reservaciones.pk_reservacion FROM reservaciones 
						ORDER BY
						reservaciones.pk_reservacion DESC";

						$consulta = mysqli_query($conexion, $query);
						$user = mysqli_fetch_assoc($consulta);
						$id = $user['pk_reservacion'] + 1;

						$query2 = "INSERT INTO reservaciones (pk_reservacion, fk_horario) VALUES ('$id', '$pk_Horario')";
						$queryReservacion = mysqli_query($conexion, $query2);


					} else {
						echo "No se ha realizado la inserción";
					}

					?>
					<form action="" method="POST">
						<button type="submit" name="paquete" value="1"
							class="text-lg text-right button-prymary">Continuar con Zero</button>
					</form>
					<!-- <button type="submit" name ="botonZero" class='&paquete=1" class="text-lg text-right button-prymary"'>Continuar con Zero</button> -->
				</div>
			</article>

			<article
				class="group shadow-md rounded-md px-3 m-2 h-96 hover:shadow-xl w-fit flex flex-col justify-between bg-white">
				<div>
					<h2 class="text-3xl font-extrabold mt-2 group-hover:text-lime-500">
						Light
					</h2>
					<hr class=" border-gray-100 mb-4">

					<p class="text-md font-semibold mb-2 group-hover:font-bold">
						Tarifa preferencial por viajar ligero.
					</p>
					<ul class="list-disc list-inside">
						<li>1 articulo personal</li>
						<li>10kg de maleta de mano</li>
						<li>Hasta 3 cambios gratuitos</li>
						<li>Elige cuándo pagar la TUA</li>
						<li>Pase Flex, adelanta tu vuelo sin costo</li>
						<li>Meses sin intereses</li>
					</ul>
				</div>

				<div class="self-end mb-2">
					<h4 class="text-2xl font-bold text-orange-500 text-right w-full my-2">+300$</h4>
					<?php
					//   echo '<a href="pasajeros.php?pk_horario=' . $idvuelo . '&paquete=2" class="text-lg text-right button-prymary">Continuar con Light</a>';
					?>
					<form action="" method="POST">
						<button type="submit" name="paquete" value="2"
							class="text-lg text-right button-prymary">Continuar con Light</button>
					</form>
				</div>
			</article>

			<article
				class="group shadow-md rounded-md px-3   m-2 h-96 hover:shadow-xl w-fit flex flex-col justify-between bg-white">
				<div>
					<h2 class="text-3xl font-extrabold mt-2 group-hover:text-purple-500">
						Extra
					</h2>
					<hr class=" border-gray-100 mb-4">

					<p class="text-md font-semibold mb-2 group-hover:font-bold">
						Tarifa preferencial por viajar ligero.
					</p>
					<ul class="list-disc list-inside">
						<li>1 articulo personal</li>
						<li>10kg de maleta de mano</li>
						<li>Hasta 3 cambios gratuitos</li>
						<li>15 kg de equipaje documentado</li>
						<li>Elige cuándo pagar la TUA</li>
						<li>Pase Flex, adelanta tu vuelo sin costo</li>
						<li>Meses sin intereses</li>
						<li>Puede elegir su asiento</li>

					</ul>
				</div>

				<div class="self-end mb-2">
					<h4 class="text-2xl font-bold text-orange-500 text-right w-full my-2">+1,484$</h4>
					<?php
					// echo '<a href="pasajeros.php?idvuelo=' . $idvuelo . '&paquete=3" class="text-lg text-right button-prymary">Continuar con Extra</a>';
					?>
					<form action="" method="POST">
						<button type="submit" name="paquete" value="3"
							class="text-lg text-right button-prymary">Continuar con Extra</button>
					</form>

					<!-- <button type="submit" name ="botonExtra" class='&paquete=1" class="text-lg text-right button-prymary"'>Continuar con Extra </button> -->
				</div>
			</article>
			<article>

		</section>

	</main>
</body>

</html>