<?php
// require('../BD/conexion.php');

// class Pasajeros
// {
//     public $Nombre;
//     public $Apellido;
//     public $Telefono;
//     public $TelefonoEmer;
//     public $correocontacto;
//     public $Fechanac;

//     public function __construct($nombre, $apellido, $telefono, $telefonoEmer, $correo, $fecha_nac)
//     {
//         $this->Nombre = $nombre;
//         $this->Apellido = $apellido;
//         $this->Telefono = $telefono;
//         $this->TelefonoEmer = $telefonoEmer;
//         $this->correocontacto = $correo;
//         $this->Fechanac = $fecha_nac;
//     }

//     public function insertarDatosAsesor($conexion)
//     {
//         $query = "INSERT INTO pasajeros (nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes) 
//         VALUES ('$this->Nombre', '$this->Apellido', '$this->correocontacto', '$this->Fechanac', '$this->Telefono', '$this->TelefonoEmer')";

//         if ($conexion->query($query) === TRUE) {
//             return true;
//         } else {
//             return false;
//         }
//     }
// }

// // Resto del código de "insertar.php" (conexión a la base de datos, etc.)
// // ...
// if (isset($_POST['paquete'])) {
//     $paqueteSeleccionado = $_POST['paquete'];

//     // Insertar datos en la tabla "reservaciones"
//     $insertarReservacion = "INSERT INTO reservaciones (fk_tipo_paquete) VALUES ('$paqueteSeleccionado')";
//     $queryReservacion = mysqli_query($conexion, $insertarReservacion);

//     if ($queryReservacion) {
//         // Obtener el ID de la última reservación insertada
//         $ultimoIdReservacion = mysqli_insert_id($conexion);
        
//         // Redirigir a la página "pasajeros.php" con el parámetro "idvuelo"
//         header("Location: pasajeros.php?idvuelo=$ultimoIdReservacion");
//         exit;
//     } else {
//         echo "Error al insertar los datos de la reservación en la base de datos";
//     }
// } else {
//     echo "El parámetro 'paquete' no está presente en la solicitud";
// }

// $nombre = $_POST['Nombre'];
// $apellido = $_POST['Apellido'];
// $email = $_POST['correocontacto'];
// $fechanac = date("Y-m-d", strtotime($_POST['Fechanac']));
// $tel = $_POST['Telefono'];
// $telemer = $_POST['Telefonoemer'];

// // Insertar datos en la tabla "pasajeros"
// $insertar = "INSERT INTO pasajeros (nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes) VALUES ('$nombre', '$apellido', '$email', '$fechanac', '$tel', '$telemer')";
// $query = mysqli_query($conexion, $insertar);

// // Obtener el ID del último pasajero insertado
// $ultimoIdPasajero = mysqli_insert_id($conexion);

// // Insertar datos en la tabla "reservaciones"
// $insertQuery = "INSERT INTO reservaciones (fk_pasajero) VALUES ('$ultimoIdPasajero')";
// $queryReservaciones = mysqli_query($conexion, $insertQuery);

// // Obtener el ID de la última reservación insertada
// $ultimoIdReservacion = mysqli_insert_id($conexion);

// // Actualizar la fila de la tabla "reservaciones" con el ID del pasajero
// $updateQuery = "UPDATE reservaciones SET fk_pasajero = '$ultimoIdPasajero' WHERE pk_reservacion = '$ultimoIdReservacion'";
// $queryUpdate = mysqli_query($conexion, $updateQuery);

// header("Location: adicionales.php?idvuelo=");

// exit;

// if ($queryUpdate) {
//     echo "Correcto";
// } else {
//     echo "Incorrecto";
// }




?>


<?php
// require('../BD/conexion.php');

// // Verificar si se ha enviado el formulario de paquete
// if (isset($_POST['paquete'])) {
//     $paqueteSeleccionado = $_POST['paquete'];

//     // Insertar datos en la tabla "reservaciones"
//     $insertarReservacion = "INSERT INTO reservaciones (fk_tipo_paquete) VALUES ('$paqueteSeleccionado')";
//     $queryReservacion = mysqli_query($conexion, $insertarReservacion);

//     if ($queryReservacion) {
//         // Obtener el ID de la última reservación insertada
//         $ultimoIdReservacion = mysqli_insert_id($conexion);

//         // Redirigir a la página "pasajeros.php" con el parámetro "idReservacion"
//         header("Location: pasajeros.php?idReservacion=$ultimoIdReservacion");
//         exit;
//     } else {
//         echo "Error al insertar los datos de la reservación en la base de datos";
//     }
// }

// // Verificar si se ha enviado el formulario de pasajero
// if (isset($_POST['Nombre'], $_POST['Apellido'], $_POST['correocontacto'], $_POST['Fechanac'], $_POST['Telefono'], $_POST['Telefonoemer'])) {
//     $nombre = $_POST['Nombre'];
//     $apellido = $_POST['Apellido'];
//     $email = $_POST['correocontacto'];
//     $fechanac = date("Y-m-d", strtotime($_POST['Fechanac']));
//     $tel = $_POST['Telefono'];
//     $telemer = $_POST['Telefonoemer'];


//     // Insertar datos en la tabla "pasajeros"
//     $insertarPasajero = "INSERT INTO pasajeros (nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes) 
//                          VALUES ('$nombre', '$apellido', '$email', '$fechanac', '$tel', '$telemer')";
//     $queryPasajero = mysqli_query($conexion, $insertarPasajero);

//     if ($queryPasajero) {
//         // Obtener el ID del último pasajero insertado
//         $ultimoIdPasajero = mysqli_insert_id($conexion);
//         $ultimoIdReservacion = $_GET['idReservacion'];

//             // Actualizar la fila de la tabla "reservaciones" con el ID del pasajero
//             // $updateReservacion = "UPDATE reservaciones SET fk_pasajero = '$ultimoIdPasajero' WHERE pk_reservacion = '$ultimoIdReservacion'";
//             $updateReservacion = "UPDATE reservaciones SET fk_pasajero = '$ultimoIdReservacion' WHERE pk_reservacion = '$ultimoIdReservacion'";

//             $queryUpdateReservacion = mysqli_query($conexion, $updateReservacion);

//             if ($queryUpdateReservacion) {
//                 // Redirigir a la página "adicionales.php" con el parámetro "idvuelo"
//                 header("Location: adicionales.php");
//                 exit;
//             } else {
//                 echo "Error al actualizar la reservación con el ID del pasajero";
//             }
//         } else {
//             echo "ID de la reservación no proporcionado";
//         }
//     } else {
//         echo "Error al insertar los datos del pasajero en la base de datos";
//     }

?>

<?php
// require('../BD/conexion.php');

// if (isset($_POST['paquete'])) {
//     $paqueteSeleccionado = $_POST['paquete'];

//     $nombre = $_POST['Nombre'];
//     $apellido = $_POST['Apellido'];
//     $email = $_POST['correocontacto'];
//     $fechanac = date("Y-m-d", strtotime($_POST['Fechanac']));
//     $tel = $_POST['Telefono'];
//     $telemer = $_POST['Telefonoemer'];
    
//     // Insertar en la tabla de pasajeros
//     $insertarPasajero = "INSERT INTO pasajeros (nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes) VALUES ('$nombre', '$apellido', '$email', '$fechanac', '$tel', '$telemer')";
//     $queryPasajero = mysqli_query($conexion, $insertarPasajero);
    
//     if ($queryPasajero) {
//         $idPasajero = mysqli_insert_id($conexion); // Obtener el pk del pasajero insertado
        
//         // Insertar en la tabla de reservaciones con el fk_pasajero
//         $insertarReservacion = "INSERT INTO reservaciones (fk_tipo_paquete, fk_pasajero) VALUES ('$paqueteSeleccionado', '$idPasajero')";
//         $queryReservacion = mysqli_query($conexion, $insertarReservacion);
        
//         if ($queryReservacion) {
//             // Redirigir a otra página o mostrar un mensaje de éxito
//             header("Location: pasajeros.php");
//             exit;
//         } else {
//             echo "Error al realizar la inserción en la tabla de reservaciones";
//         }
//     } else {
//         echo "Error al realizar la inserción en la tabla de pasajeros";
//     }
// }
?>

<?php
require('../BD/conexion.php');

if (isset($_POST['paquete'])) {
    $paqueteSeleccionado = $_POST['paquete'];

    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $email = $_POST['correocontacto'];
    $fechanac = date("Y-m-d", strtotime($_POST['Fechanac']));
    $tel = $_POST['Telefono'];
    $telemer = $_POST['Telefonoemer'];

    // Iniciar una transacción
    mysqli_begin_transaction($conexion);

    try {
        // Insertar en la tabla de pasajeros
        $insertarPasajero = "INSERT INTO pasajeros (nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes) VALUES ('$nombre', '$apellido', '$email', '$fechanac', '$tel', '$telemer')";
        $queryPasajero = mysqli_query($conexion, $insertarPasajero);

        if (!$queryPasajero) {
            throw new Exception("Error al realizar la inserción en la tabla de pasajeros");
        }

        $idPasajero = mysqli_insert_id($conexion); // Obtener el pk del pasajero insertado

        // Insertar en la tabla de reservaciones con el fk_tipo_paquete y fk_pasajero
        $insertarReservacion = "INSERT INTO reservaciones (fk_tipo_paquete, fk_pasajero) VALUES ('$paqueteSeleccionado', '$idPasajero')";
        $queryReservacion = mysqli_query($conexion, $insertarReservacion);

        if (!$queryReservacion) {
            throw new Exception("Error al realizar la inserción en la tabla de reservaciones");
        }

        // Confirmar la transacción
        mysqli_commit($conexion);

        // Redirigir a otra página o mostrar un mensaje de éxito
        header("Location: pasajeros.php");
        exit;
    } catch (Exception $e) {
        // Revertir la transacción en caso de error
        mysqli_rollback($conexion);

        echo "Error: " . $e->getMessage();
    }
}
?>

