<?php
require('../BD/conexion.php');

if (isset($_POST['cantidad'])) {
    $noMaletaSeleccionado = $_POST['cantidad'];

    // Insertar datos en la tabla "reservaciones"
    $insertarReservacion = "INSERT INTO reservaciones (fk_adicional) VALUES ('$noMaletaSeleccionado')";
    $queryReservacion = mysqli_query($conexion, $insertarReservacion);

    if ($queryReservacion) {
        // Obtener el ID de la última reservación insertada
        $ultimoIdReservacion = mysqli_insert_id($conexion);
        
        // Redirigir a la página "pasajeros.php" con el parámetro "idvuelo"
        header("Location: reservacion.php");
        exit;
    }else {
        echo "Error al insertar los datos de la reservación en la base de datos";
    }
} else {
    echo "El parámetro 'paquete' no está presente en la solicitud";
}
?>
