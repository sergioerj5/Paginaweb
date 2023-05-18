<?php
require('../BD/conexion.php');


        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $email = $_POST['correocontacto'];
        $fechanac = date("Y-m-d", strtotime($_POST['Fechanac']));
        $tel = $_POST['Telefono'];
        $telemer = $_POST['Telefonoemer'];
        
        // Utilizar una consulta preparada
        $insertar = "INSERT INTO pasajeros (nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes)    VALUES ( '$nombre', '$apellido', '$email', '$fechanac    ', '$tel', '$telemer')";
      
        $query = mysqli_query($conexion, $insertar);
        header("Location: adicionales.php?idvuelo=");
                exit;
        
        if ($query) {

            echo "Correcto";
            
        } else {
            echo "incorrecto";
        }
        
        ?>
    
    
      <?php 
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // Obtener los datos enviados por el formulario
    //     $nombre = $_POST['Nombre'];
    //     $apellido = $_POST['Apellido'];
    //     $email = $_POST['correocontacto'];
    //     $fechanac = date("Y-m-d", strtotime($_POST['Fechanac']));
    //     $tel = $_POST['Telefono'];
    //     $telemer = $_POST['Telefonoemer'];
    //     require_once ('../BD/conexion.php');
        
    //     $query="INSERT INTO pasajeros(nombre, apellido, correo, fecha_nacimiento, numero_telefono, numero_accidentes) VALUES ('$nombre', '$apellido', '$email', '$fecha_nac', '$tel','$telemer')";
        
    //     $consulta = mysqli_query($conexion, $query);
       
        
        
    // }else {
    //     echo "Error al insertar datos" . $conexion->error;
        
    // }  
    //     // La solicitud no se realizó mediante el método POST
    //     // Puedes mostrar un mensaje de error o redirigir a otra página
    //     echo "Error: La solicitud debe realizarse mediante el método GET.";
        
        ?>  