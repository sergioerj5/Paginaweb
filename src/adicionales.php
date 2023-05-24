<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
	

    <!-- <link rel="stylesheet" href="../estilos.css"> -->
    <title>Adicionales</title>
    <style>
        html,
        body {
            height: 100%;
        }
    </style>
</head>
<?php
session_start();
require('../BD/conexion.php');

// Verificar si se envió el formulario 2
if (isset($_POST['guardar'])) {
    // Recuperar los datos de la sesión
    $paqueteSeleccionado = $_SESSION['paqueteSeleccionado'];
    $name = $_SESSION['name'];
    $ape = $_SESSION['ape'];
    $correo = $_SESSION['correo'];
    $fecha = $_SESSION['fecha'];
    $tel = $_SESSION['tel'];
    $telemer = $_SESSION['telemer'];
    $noMaletaSeleccionado = $_POST['cantidad']; // Corregir el nombre del campo aquí


    $folio = rand(1000, 9999); // Número aleatorio de 4 dígitos
    $NoAsiento = rand(1, 92);
    $metodoPAgo = rand(1, 4);
    $valorPorDefecto = "1";
    $noTerminal = rand(1, 3);
    $descuento = "1";


    // Insertar en la tabla de pasajeros
    $insertarPasajero = "INSERT INTO pasajeros (nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes, fk_tipo_pasajero) VALUES ('$name', '$ape', '$correo', '$fecha', '$tel', '$telemer', '$valorPorDefecto')";
    $queryPasajero = mysqli_query($conexion, $insertarPasajero);

    if ($queryPasajero) {
        $idPasajero = mysqli_insert_id($conexion); // Obtener el pk del pasajero insertado

        $query = "SELECT reservaciones.pk_reservacion FROM reservaciones 
        ORDER BY
        reservaciones.pk_reservacion DESC 
        LIMIT 1";
        $consulta = mysqli_query($conexion, $query);
        $user = mysqli_fetch_assoc($consulta);
        $id = $user['pk_reservacion'] ;


        $UpdateReservacion = "UPDATE reservaciones SET fk_tipo_paquete = '$paqueteSeleccionado', folio = '$folio', fk_pasajero = '$idPasajero', fk_descuento = '$descuento',fk_metodo_pago = '$metodoPAgo', fk_adicional= '$noMaletaSeleccionado', fk_asiento = '$NoAsiento', fk_terminal = '$noTerminal' WHERE pk_reservacion = $id";
        $queryReservacion = mysqli_query($conexion, $UpdateReservacion);

        if ($queryReservacion) {
            $idReservacion = mysqli_insert_id($conexion); // Obtener el pk de la reservación insertada

            // Insertar en la tabla de reservaciones con el fk_adicional
            header("Location: reservacion.php");
            exit;
        } else {
            echo "Error al realizar la inserción en la tabla de reservaciones";
        }
    } else {
        echo "Error al realizar la inserción en la tabla de pasajeros";
    }
}
?>

<body class="flex flex-col min-h-screen">
<header>
		<nav class="main-nav">
			<ul class="lista">
				<li><a href="index.php" >Destino</a></li>
				<li><a href="./paginas/Atencion.html" >¿Quienes somos?</a></li>
                <li><a href="./paginas/Atencion.html" class="a-primary">Atencion al Cliente</a></li>
			</ul>
		</nav>


	</header>
    <main class="flex-grow container mx-auto">
        <h2 class="text-2xl font-bold py-2 px-4">Servicios adicionales</h2>
        <form action="" method="post"
            class="flex flex-col bg-white shadow-lg rounded-md pl-4 pr-12 py-4 border border-gray-700">
            <article class="flex px-2">
                <div class="ml-4 mr-14">
                    <h2>Selección de equipaje</h2>
                    <h3>A bordo</h3>
                </div>
                <div class="border border-gray-700 px-2 rounded-md">
                    <h3>Viaje 1</h3>
                    <h3>Cantidad de maletas de mano</h3>
                    <h4>10 o 15 kg </h4>
                </div>
                <div class="w-64">
                    <select name="cantidad" id="cantidad" data-te-select-visible-options="3"
                        class="h-9 w-64 py-1 m-2 px-2 focus:outline-none focus:ring-0 focus:border-morado rounded-md">
                        <option value="1">1 maleta extra($350)</option>
                        <option value="2">2 maleta extra($700)</option>
                        <option value="3">3 maleta extra($1000)</option>
                    </select>
                </div>
                <div class="self-end">
                    <button type="submit" name="guardar" class="button-prymary ml-4 h-9">Siguiente</button>
                </div>
            </article>

        </form>
    </main>
</body>

</html>