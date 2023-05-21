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
        <form action="" method="post" class="bg-gray-300 p-2 rounded-md">

        <?php
		session_start();

		// Verificar si se envió el formulario 2
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {


			// Guardar los datos en variables de sesión
            $nombre = $_POST['Nombre'];
            $apellido = $_POST['Apellido'];
            $email = $_POST['correocontacto'];
            $fechanac = date("Y-m-d", strtotime($_POST['Fechanac']));
            $tel = $_POST['Telefono'];
            $telemer = $_POST['Telefonoemer'];


        // Guardar los datos en variables de sesión
            $_SESSION['name'] = $nombre;
            $_SESSION['ape'] = $apellido;
            $_SESSION['correo'] = $email;
            $_SESSION['fecha'] = $fechanac;
            $_SESSION['tel'] = $tel;
            $_SESSION['telemer'] = $telemer;


			// Redirigir al formulario 3
			header("Location: adicionales.php");
			exit;
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
                    <input type="text" id="Apellido" name="Apellido" class="input-prymary" required
                        placeholder="Apellidos...">
                </div>
                <div class="my-2">

                    <label for="Fecha de nacimiento">Fecha de nacimiento: </label>
                    <input type="date" name="Fechanac" id="Fechanac" class="input-prymary">
                </div>
            </section>

            <section class="bg-white rounded-md shadow p-4 mx-2 my-2">
                <h3 class="font-semibold">Información de contacto</h3>
                <hr class=" border-gray-200 mb-4">

                <label for="tipo-telefonos">Tipo de teléfono: </label>
                <select name="tipo-telefonos" id="tipo-telefonos" data-te-select-init data-te-select-visible-options="3"
                    class="h-9 py-1 m-2 focus:outline-none focus:ring-0 focus:border-morado rounded-md">
                    <option value="Principal">Principal</option>
                </select>
                <label for="Teléfono">Teléfono: </label>
                <input type="tel" id="Telefono" name="Telefono" class="input-prymary" required
                    placeholder="Telefono...">
                <label for="Teléfono">Teléfono Emergencia: </label>
                <input type="tel" id="Telefonoemer" name="Telefonoemer" class="input-prymary" required
                    placeholder="Telefono...">
                <div>
                    <label for="correo-contacto">Correo de contacto: </label>
                    <input type="email" id="correocontacto" name="correocontacto" class="input-prymary" required
                        placeholder="Correo de contacto">
                </div>
            </section>
            <div class="flex justify-end items-center w-full">
                <button type="submit" class="button-prymary  left-0 mr-4">Continuar</button>

            </div>
        </form>
    </main>
</body>

</html>