<?php
// require('../BD/conexion.php');

// if (isset($_POST['paquete'])) {
//     $paqueteSeleccionado = $_POST['paquete'];
//     // Realiza la inserción de datos en la base de datos usando $paqueteSeleccionado
//     // ...
//     $insertar = "INSERT INTO reservaciones (fk_tipo_paquete) VALUES ('$paqueteSeleccionado')";
//     $query = mysqli_query($conexion, $insertar);
// }

// $nombre = $_POST['Nombre'];
// $apellido = $_POST['Apellido'];
// $email = $_POST['correocontacto'];
// $fechanac = date("Y-m-d", strtotime($_POST['Fechanac']));
// $tel = $_POST['Telefono'];
// $telemer = $_POST['Telefonoemer'];

// // Insertar datos en la tabla "pasajeros"
// // $insertar = "INSERT INTO pasajeros (nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes) VALUES ('$nombre', '$apellido', '$email', '$fechanac', '$tel', '$telemer')";
// // $query = mysqli_query($conexion, $insertar);

// // Obtener el ID del último pasajero insertado
// $ultimoIdPasajero = mysqli_insert_id($conexion);

// // Insertar datos en la tabla "reservaciones"
// // $insertQuery = "INSERT INTO reservaciones (fk_pasajero) VALUES ('$ultimoIdPasajero')";
// // $queryReservaciones = mysqli_query($conexion, $insertQuery);

// // Obtener el ID de la última reservación insertada
// // $ultimoIdReservacion = mysqli_insert_id($conexion);

// // // Actualizar la fila de la tabla "reservaciones" con el ID del pasajero
// // $updateQuery = "UPDATE reservaciones SET fk_pasajero = '$ultimoIdPasajero' WHERE pk_reservacion = '$ultimoIdReservacion'";
// // $queryUpdate = mysqli_query($conexion, $updateQuery);

// header("Location: pasajeros.php?idvuelo=");

// exit;

// if ($queryUpdate) {
//     echo "Correcto";
// } else {
//     echo "Incorrecto";
// }


?>


<?php
require('../BD/conexion.php');

if (isset($_POST['paquete'])) {
    $paqueteSeleccionado = $_POST['paquete'];

    // Insertar datos en la tabla "reservaciones"
    $insertarReservacion = "INSERT INTO reservaciones (fk_tipo_paquete) VALUES ('$paqueteSeleccionado')";
    $queryReservacion = mysqli_query($conexion, $insertarReservacion);

    if ($queryReservacion) {
        // Obtener el ID de la última reservación insertada
        $ultimoIdReservacion = mysqli_insert_id($conexion);
        
        // Redirigir a la página "pasajeros.php" con el parámetro "idvuelo"
        header("Location: pasajeros.php?idvuelo=$ultimoIdReservacion");
        exit;
    } else {
        echo "Error al insertar los datos de la reservación en la base de datos";
    }
} else {
    echo "El parámetro 'paquete' no está presente en la solicitud";
}
?>




<?php
// require('../BD/conexion.php');

// if (isset($_POST['paquete'])) {
//     $paqueteSeleccionado = $_POST['paquete'];
//     // Realiza la inserción de datos en la base de datos usando $paqueteSeleccionado
//     // ...
//     $insertar = "INSERT INTO reservaciones (fk_tipo_paquete) VALUES ('$paqueteSeleccionado')";
//     $query = mysqli_query($conexion, $insertar);
//     if ($query) {
//         // Redirige a otra página o muestra un mensaje de éxito
//         // ...
//         header("Location: pasajeros.php");
//         exit;
//     } else {
//         echo "Error al realizar la inserción en la base de datos";
//     }
// }
?>