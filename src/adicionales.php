<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
   
    <!-- <link rel="stylesheet" href="../estilos.css"> -->
    <title>Adicionales</title>
    <style>
        html,
        body {
            height: 100%;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen">
    <header class="flex flex-row p-4 max-w-screen justify-between items-center ">
        <nav class="flex ml-12 ">
            <a href="index.php" class="a-primary">Inicio</a>
			<a href="Secondpage.php" class="a-primary">Destino</a>
			<a href="./paginas/somo.html" class="a-primary">¿Quienes somos?</a>
			<a href="./paginas/Atencion.html" class="a-primary">Atencion al Cliente</a>
        </nav>
    </header>
    <main class="flex-grow container mx-auto">
        <h2 class="text-2xl font-bold py-2 px-4">Servicios adicionales</h2>
        <form action="reservacion.html" method="post" class="flex flex-col bg-white shadow-lg rounded-md pl-4 pr-12 py-4 border border-gray-700" >
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
                    <select name="cantidad" id="CantidadMaletas"
                    data-te-select-visible-options="3"
                        class="h-9 w-64 py-1 m-2 px-2 focus:outline-none focus:ring-0 focus:border-morado rounded-md">
                        <option value="1">1 maleta extra($350)</option>
                        <option value="2">2 maleta extra($700)</option>
                        <option value="3">3 maleta extra($1000)</option>
                    </select>
                </div>
                <div class="self-end">
                    <button type="submit" class="button-prymary ml-4 h-9">Siguiente</button>
                </div>
            </article>

        </form>
    </main>
</body>

</html>