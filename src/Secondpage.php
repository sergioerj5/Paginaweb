<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../dist/output.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<title>Cielo Olmeca</title>
	<style>
		html,
		body {
			height: 100%;
		}
	</style>
</head>

<body class="flex flex-col min-h-screen">
	<header>
		<nav class="main-nav">
			<ul class="lista">
				<li><a href="index.php">Destino</a></li>
				<li><a href="./paginas/Atencion.html">¿Quienes somos?</a></li>
				<li><a href="./paginas/Atencion.html" class="a-primary">Atencion al Cliente</a></li>
			</ul>
		</nav>
	</header>
	<main class="flex-grow bg-cover bg-center  items-center justify-center "
		style="background-image: url('img/img2.jpg');">
		<section class="flex  justify-center bg-cover w-full bg-center">
			<article class=" backdrop-blur-sm bg-white/25 self-center w-fit p-3 m-12 rounded-md">
				<h1
					class="text-5xl  font-extrabold ml-11 mt-11 text-center line-clamp-3 text-gray-900 leading-10 mb-2 ">
					Encuentra tu Vuelo
				</h1>

				<form class="" action="vuelosencontrados.php" method="post" class="flex  items-center justify-center ">
					<div class=" flex flex-col items-center justify-center backdrop-hue-rotate-0-sm ">


						<div class="flex items-center justify-center ">
							<label for="origen" class="block font-bold mx-2">Lugar de salida</label>
							<select name="ciudad-salida" id="ciudad-salida" data-te-select-init
								data-te-select-visible-options="8"
								class="h-9 py-1 m-2 focus:outline-none focus:ring-0 focus:border-morado rounded-md">
								<option value="5" selected>Villahermosa</option>
							</select>

							<label for="destino" class="block font-bold mx-2">Lugar de destino:</label>
							<select name="ciudad-destino" id="ciudad-destino" data-te-select-init
								data-te-select-visible-options="8"
								class="h-9 py-1 m-2 focus:outline-none focus:ring-0 focus:border-morado rounded-md">
								<option value="1">Cancun</option>
								<option value="2">Merida</option>
								<option value="3">Veracruz</option>
								<option value="4">Campeche</option>
								<option value="5">Villahermosa</option>
								<option value="6">Chetumal</option>

							</select>


							<label for="tipo_pasajeros" class="block font-bold mx-2">Pasajeros: </label>
							<select name="tipo-de-pasajeros" id="tipo-de-pasajeros" data-te-select-init
								data-te-select-visible-options="3"
								class="h-9 py-1 m-2 focus:outline-none focus:ring-0 focus:border-morado rounded-md">
								<option value="1">Adultos</option>
							</select>



							<label for="tipo_vuelo" class="block font-bold mx-2">Tipo de vuelo: </label>
							<select name="tipo-de-vuelo" id="tipo-de-Vuelo" data-te-select-init
								data-te-select-visible-options="3"
								class="h-9 py-1 m-2 focus:outline-none focus:ring-0 focus:border-morado rounded-md">
								<option value="1">Directo</option>
								<option value="2">Escalas</option>
							</select>
						</div>
						<div class="flex items-center justify-center">

							<label for="fecha-salida mr-2" class="block font-bold mx-2">Fecha de salida:</label>
							<input required type="date" id="fecha-salida" name="fecha-salida" class="rounded-md m-2">
							<!-- <label for="fecha-salida mr-2" class="block font-bold mx-2">Fecha de llegada:</label>
							<input required type="date" id="fecha-llegada" name="fecha-llegada" class="rounded-md m-2"> -->
						</div>
					</div>
					<div class="flex justify-center items-center">
						<button class="button-prymary w-48 mt-5 " type="submit">Buscar vuelo</button>
					</div>
				</form>
			</article>
		</section>

	</main>
	<footer>
	</footer>
</body>

</html>