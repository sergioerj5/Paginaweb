<?php
require('../BD/conexion.php');

class Pasajeros
{
    public $Nombre;
    public $Apellido;
    public $Telefono;
    public $TelefonoEmer;
    public $correocontacto;
    public $Fechanac;

    public function __construct($nombre, $apellido, $telefono, $telefonoEmer, $correo, $fecha_nac)
    {
        $this->Nombre = $nombre;
        $this->Apellido = $apellido;
        $this->Telefono = $telefono;
        $this->TelefonoEmer = $telefonoEmer;
        $this->correocontacto = $correo;
        $this->Fechanac = $fecha_nac;
    }

    public function insertarDatosAsesor($conexion)
    {
        $query = "INSERT INTO pasajeros (nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes) 
        VALUES ('$this->Nombre', '$this->Apellido', '$this->correocontacto', '$this->Fechanac', '$this->Telefono', '$this->TelefonoEmer')";

        if ($conexion->query($query) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}

// Resto del código de "insertar.php" (conexión a la base de datos, etc.)
// ...
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
    } 
}

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['correocontacto'];
$fechanac = date("Y-m-d", strtotime($_POST['Fechanac']));
$tel = $_POST['Telefono'];
$telemer = $_POST['Telefonoemer'];

// Insertar datos en la tabla "pasajeros"
$insertar = "INSERT INTO pasajeros (nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes) VALUES ('$nombre', '$apellido', '$email', '$fechanac', '$tel', '$telemer')";
$query = mysqli_query($conexion, $insertar);

// Obtener el ID del último pasajero insertado
$ultimoIdPasajero = mysqli_insert_id($conexion);

// Insertar datos en la tabla "reservaciones"
$insertQuery = "INSERT INTO reservaciones (fk_pasajero) VALUES ('$ultimoIdPasajero')";
$queryReservaciones = mysqli_query($conexion, $insertQuery);

// Obtener el ID de la última reservación insertada
$ultimoIdReservacion = mysqli_insert_id($conexion);

// Actualizar la fila de la tabla "reservaciones" con el ID del pasajero
$updateQuery = "UPDATE reservaciones SET fk_pasajero = '$ultimoIdPasajero' WHERE pk_reservacion = '$ultimoIdReservacion'";
$queryUpdate = mysqli_query($conexion, $updateQuery);

header("Location: adicionales.php?idvuelo=");

exit;

if ($queryUpdate) {
    echo "Correcto";
} else {
    echo "Incorrecto";
}


?>


