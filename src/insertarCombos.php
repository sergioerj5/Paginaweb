<?php
// require('../BD/conexion.php');


//         $Zero = $_POST['botonZero'];
//         $Light = $_POST['botonLight'];
//         $Extra = $_POST['botonExtra'];

//         // Utilizar una consulta preparada
//         $insertar = "INSERT INTO pasajeros (nombre)  VALUES ( '$Zero')";

//         $query = mysqli_query($conexion, $insertar);
//         header("Location: pasajeros.php?idvuelo=");
//                 exit;

//         if ($query) {

//             echo "Correcto";

//         } else {
//             echo "incorrecto";
//         }

?>


<?php
require('../BD/conexion.php');

if (isset($_POST['paquete'])) {
    $paqueteSeleccionado = $_POST['paquete'];
    // Realiza la inserción de datos en la base de datos usando $paqueteSeleccionado
    // ...
    $insertar = "INSERT INTO reservaciones (fk_tipo_paquete) VALUES ('$paqueteSeleccionado')";
    $query = mysqli_query($conexion, $insertar);
    if ($query) {
        // Redirige a otra página o muestra un mensaje de éxito
        // ...
        header("Location: pasajeros.php");
        exit;
    } else {
        echo "Error al realizar la inserción en la base de datos";
    }
}
?>
