<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../dist/output.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="../estilos.css"> -->	
	<title>Pasajeros</title>
</head>



<body class="flex flex-col min-h-screen ">
	<header class="flex flex-row p-4 max-w-screen justify-between items-center backdrop-blur-xl bg-white/25">
		<nav class="flex ml-12 ">
			<a href="index.php" class="a-primary">Inicio</a>
            <a href="Secondpage.php" class="a-primary">Destino</a>
            <a href="./paginas/somo.html" class="a-primary">¿Quienes somos?</a>
            <a href="./paginas/Atencion.html" class="a-primary">Atencion al Cliente</a>
		</nav>
	</header>

	<main class="flex-grow container mx-auto">
			<h3 class="text-4xl font-extrabold ">Información de pasajeros</h3>
            <h4 class="text-2xl font-bold text-sky-600">Completa los campos solicitodos a continuación.</h4>
        <form action= "" method="post" class="bg-gray-300 p-2 rounded-md">


        <?php
         

        //   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //       // Obtener los datos del formulario
        //       $nombre = $_POST['Nombre'];
        //       $apellido = $_POST['Apellido'];
        //       $email = $_POST['correocontacto'];
        //       $fechanac = date("Y-m-d", strtotime($_POST['Fechanac']));
        //       $tel = $_POST['Telefono'];
        //       $telemer = $_POST['Telefonoemer'];
      
        //       // Crear una instancia de la clase Pasajeros con los datos del formulario
        //       $pasajero = new Pasajeros($nombre, $apellido, $tel, $telemer, $email, $fechanac);
      
        //       // Insertar los datos en la base de datos
        //       if ($pasajero->insertarDatosAsesor($conexion)) {
        //           echo "Datos insertados correctamente";
        //       } else {
        //           echo "Error al insertar los datos";
        //       }
        //   }
        
session_start();
require('../BD/conexion.php');

// Verificar si se envió el formulario 2
if (isset($_POST['Nombre'])) {
    // Recuperar los datos de la sesión
    $paqueteSeleccionado = $_SESSION['paqueteSeleccionado'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $email = $_POST['correocontacto'];
    $fechanac = date("Y-m-d", strtotime($_POST['Fechanac']));
    $tel = $_POST['Telefono'];
    $telemer = $_POST['Telefonoemer'];

    // Insertar en la tabla de pasajeros
    $insertarPasajero = "INSERT INTO pasajeros (nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes) VALUES ('$nombre', '$apellido', '$email', '$fechanac', '$tel', '$telemer')";
    $queryPasajero = mysqli_query($conexion, $insertarPasajero);

    if ($queryPasajero) {
        $idPasajero = mysqli_insert_id($conexion); // Obtener el pk del pasajero insertado

        // Insertar en la tabla de reservaciones con el fk_tipo_paquete y fk_pasajero
        $insertarReservacion = "INSERT INTO reservaciones (fk_tipo_paquete, fk_pasajero) VALUES ('$paqueteSeleccionado', '$idPasajero')";
        $queryReservacion = mysqli_query($conexion, $insertarReservacion);

        if ($queryReservacion) {
            // Redirigir a otra página o mostrar un mensaje de éxito
            header("Location: adicionales.php");
            exit;
        } else {
            echo "Error al realizar la inserción en la tabla de reservaciones";
        }
    } else {
        echo "Error al realizar la inserción en la tabla de pasajeros";
    }
}
?>
            <section class="bg-white rounded-md shadow p-4 mx-2">
                <h3 class="font-semibold">
                Información personal
                </h3>
                <hr class=" border-gray-200 mb-4">
                <div class="my-2">
                    <label for="Nombre">Nombre(s): </label>
                    <input type="text" id="Nombre" name="Nombre" class="input-prymary" required placeholder="Nombre...">
                    <label for="Apellido">Apellido(s): </label>
                    <input type="text" id="Apellido" name="Apellido" class="input-prymary" required placeholder="Apellidos...">
                </div>
                <div class="my-2">
                   
                    <label for="Fecha de nacimiento">Fecha de nacimiento: </label>
                    <input type="date" name="Fechanac" id="Fechanac" class="input-prymary"  >
                </div>
            </section>

            <section class="bg-white rounded-md shadow p-4 mx-2 my-2">
                <h3  class="font-semibold">Información de contacto</h3>
                <hr class=" border-gray-200 mb-4">

                <label for="tipo-telefonos">Tipo de teléfono: </label>
                <select name="tipo-telefonos" id="tipo-telefonos" data-te-select-init
                data-te-select-visible-options="3"
                class="h-9 py-1 m-2 focus:outline-none focus:ring-0 focus:border-morado rounded-md">
                    <option value="Principal">Principal</option>
                </select>
                <label for="Teléfono">Teléfono: </label>
                <input type="tel" id="Telefono" name="Telefono" class="input-prymary" required placeholder="Telefono...">
                <label for="Teléfono">Teléfono Emergencia: </label>
                <input type="tel" id="Telefonoemer" name="Telefonoemer" class="input-prymary" required placeholder="Telefono...">
                <div>
                    <label for="correo-contacto">Correo de contacto: </label>
                    <input type="email" id="correocontacto" name="correocontacto" class="input-prymary" required placeholder="Correo de contacto">      
                </div>
            </section>
            <div class="flex justify-end items-center w-full">
            <button type="submit" class="button-prymary  left-0 mr-4">Continuar</button>

            </div>
            <?php 
class Pasajeros
{
    
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $telofonoEmer;
    public $fecha_nac;
    
    public function __construct($id,$nombre, $apellido, $telefono, $telefonoEmer,  $correo,  $fecha_nac)
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
        $query = "INSERT INTO pasajeros(nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes) 
        VALUES ('$this->Nombre', '$this->Apellido', ' $this->correocontacto', '$this->Fechanac', '$this->Telefono', '$this->TelefonoEmer')";

        if ($conexion->query($query) === TRUE) {
            return TRUE;
        }
    }
}

?>
        </form>    
	</main>
</body>
</html>