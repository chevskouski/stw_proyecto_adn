<!DOCTYPE html>
<html>

<head>
	<!-- Metadata-->
	<title>Aduana</title>
	<meta charset="UTF-8">

	<meta name="description" content="Ya Pasenos Inge porfaaaaaaaaa.">
	<meta name="author" content="nosotros :v">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- El favicon-->
	<link rel="icon" type="image/x-icon" href="https://www.yapasenosinge.syswebgroup.online/assets/imgs/placeholder.ico">

	<!-- Importación de CSS-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>layout/main/css/style.css">

	<!-- Importación de javascript-->
	<script src="https://kit.fontawesome.com/cd3d646c75.js" crossorigin="anonymous"> </script>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="<?php echo BASE_URL; ?>layout/main/js/poliza.js"></script>

</head>

<body class="w3-black">

	<!-- Icon Bar (Sidebar - hidden on small screens) -->
	<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
		<!-- Avatar image in top left corner -->
		<a href="https://www.yapasenosinge.syswebgroup.online/" class="w3-bar-item w3-button w3-padding-large w3-black"><img src="https://www.yapasenosinge.syswebgroup.online/assets/imgs/placeholder.svg" style="width:100%"></a>
		<a href="#home" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-home w3-xxlarge"></i>
			<p>Inicio</p>
		</a>
		<a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-user w3-xxlarge"></i>
			<p>Acerca de Nosotros</p>
		</a>
		<a href="#upload" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-cloud-upload w3-xxlarge"></i>
			<p>Subir Manifiesto</p>
		</a>
		<a href="#search" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-eye w3-xxlarge"></i>
			<p>Buscar Poliza de Importaci&oacute;n</p>
		</a>
		<a href="#pay" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-credit-card w3-xxlarge"></i>
			<p>Pagar Poliza de Importaci&oacute;n</p>
		</a>
	</nav>

	<!-- Navbar on small screens (Hidden on medium and large screens) -->
	<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
		<div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
			<a href="#" class="w3-bar-item w3-button" style="width:25% !important">Inicio</a>
			<a href="#about" class="w3-bar-item w3-button" style="width:25% !important">Acerca de Nosotros</a>
			<a href="#search" class="w3-bar-item w3-button" style="width:25% !important">Buscar Poliza de Importaci&oacute;n</a>
			<a href="#pay" class="w3-bar-item w3-button" style="width:25% !important">Pagar Poliza de Importaci&oacute;n</a>
		</div>
	</div>

	<?php
	$mod = $this->request->obtener_modulo();
	?>

	<?php if ($mod != 'aduanas') { ?>
		<?php include_once $ruta_vista; ?>

		<!-- Page Content -->
		<div class="w3-padding-large" id="main">
			<!-- Header/Home -->
			<header class="w3-container w3-padding-32 w3-center w3-black" id="home">
				<h1 class="w3-jumbo"><span class="w3-hide-small">Bienvenido/a a</span> Aduana.</h1>
				<p>Servicio de Aduana Online</p>
				<img src="https://www.yapasenosinge.syswebgroup.online/assets/imgs/aduana.png" alt="Servicio de Aduana" class="w3-image" width="496" height="554"><!--Otras resoluciones: 992x1108; 248x277 -->
			</header>

			<!-- About Section -->
			<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
				<h2 class="w3-text-light-grey">Acerca de Nosotros</h2>
				<hr style="width:200px" class="w3-opacity">
				<p>Este servicio de aduana online es brindado a ustedes por el grupo <q>Ya Pasenos Inge</q> de la organizaci&oacute;n <q>Sys Web Group</q> de la <q>Universidad San Pablo de Guatemala</q> del <q>Campus Central</q> de la <q>Facultad de Ciencias Empresariales</q> del pregrado de la <q>Escuela de Ingenier&iacute;a</q> de la Licenciatura de <q>Ingenier&iacute;a en Sistemas y Ciencias de la Computaci&oacute;n.</q>

					Puede leer m&aacute;s acerca de nuestro grupo haciendo click en
					<q>Inicio</q> en la secci&oacute;n de
					<q>Nuestro Equipo</q>. La idea detr&aacute;s de este servicio de ADUANA es recibir un
					<q>Manifiesto</q> del area de
					<q>Logistica</q> y marcamos los bienes recibidos con un estatus <span style="color: #00ff00ff">verde</span> o <span style="color: #ff0000ff">rojo</span>. Nosotros recibimos los manifiestos por medio de un web service y el estatus de estos dependen de nuestro algoritmo super avanzado y secreto que es totalmente avanzado y complicado y muy secreto &semi; &rpar;. Nosotros brindamos una
					<q>Poliza de Importaci&oacute;n</q> por estado; es decir, una para las verdes y otra para las rojas. Esta información va a est&aacute;r disponible para busqueda y se enviar&aacute; por correo. Tambi&eacute;n tenemos la funci&oacute;n de pagar la poliza.
					Espero que disfrutes usando nuestra pagina web y nuestros web services.
				</p>
				<div class="w3-white">
					<div class="w3-dark-grey" style="height:10px;width:95%"></div>
				</div>
				<div class="w3-white">
					<div class="w3-dark-grey" style="height:10px;width:75%"></div>
				</div>
				<div class="w3-white">
					<div class="w3-dark-grey" style="height:10px;width:55%"></div>
				</div>
				<div class="w3-white">
					<div class="w3-dark-grey" style="height:10px;width:35%"></div>
				</div>
				<div class="w3-white">
					<div class="w3-dark-grey" style="height:10px;width:5%"></div>
				</div><br>

				<div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
					<div class="w3-quarter w3-section">
						<span class="w3-xlarge">5+</span><br>
						Mam&aacute;s orgullosas de nuestro equipo.
					</div>
					<div class="w3-quarter w3-section">
						<span class="w3-xlarge">55+</span><br>
						Reuniones hechas para hacer este proyecto
					</div>
					<div class="w3-quarter w3-section">
						<span class="w3-xlarge">89+</span><br>
						<q>Baj&aacute; a comer y&aacute; que se enfr&iacute;a</q>
					</div>
					<div class="w3-quarter w3-section">
						<span class="w3-xlarge">875+</span><br>
						Insultos y gritos entre nosotros <span>
							<font size="-3">PD: Excelente ambiente laboral &semi; &rpar;</font>
						</span>
					</div>
				</div>

				<!-- Testimonials -->
				<h3 class="w3-padding-24 w3-text-light-grey">Calificaci&oacute;n y Valoraci&oacute;n</h3>
				<hr>
				<p><span class="w3-large w3-margin-right">Inu</span>, perro de Jacob:</p>
				<p><q>wow</q> &emsp;&emsp; <span style="color: #ffff00ff">
						<font size="+3">5/5</font>
					</span></p>
				<hr>
				<p><span class="w3-large w3-margin-right">Hermana</span> de Rodrigo:</p>
				<p><q>Si no te sales de mi cuarto te pego</q> &emsp;&emsp; <span style="color: #ffff00ff">
						<font size="+3">5/5</font>
					</span></p>
				<hr>
				<p><span class="w3-large w3-margin-right">Abuelita</span> de Diego:</p>
				<p><q>Que lindo les quedo mijito, no queres galletas?</q> &emsp;&emsp; <span style="color: #ffff00ff">
						<font size="+3">10/5</font>
					</span></p>
				<hr>
				<p><span class="w3-large w3-margin-right">Vecina</span> de Kevin:</p>
				<p><q>Que haces en mi casa? Salte!</q> &emsp;&emsp; <span style="color: #ffff00ff">
						<font size="+3">4/5</font>
					</span></p>
				<hr>
				<p><span class="w3-large w3-margin-right">Extraño</span> que se encontr&oacute; Esdras de camino a la U:</p>
				<p><q>Joven, yo solo le pregunte por la hora. Por que me muestra esto?</q> &emsp;&emsp; <span style="color: #ffff00ff">
						<font size="+3">4.5/5</font>
					</span></p>
				<hr>
				<!-- End About Section -->
			</div>

			<!-- Boton de Upload-->
			<div class="w3-padding-64 w3-content" id="upload">
				<h2 class="w3-text-light-grey">Subir Manifiesto</h2>
				<hr style="width:200px" class="w3-opacity">

				<p>Si no gustas usar nuestro web service o si estás usando nuestro PWA (Progressive Web Application) puedes usar este apartado para subir manualmente el archivo de manifiesto.</p>
				<p>Actualmente solo se soportan archivos de formato CSV:</p>
			
				<form action=""> <!--agregar funcion interna de manifiesto-->
					<input type="file" id="uploadManifiesto" name="uploadManifiesto" accept=".csv, CSV">
					<br>
					<button onclick="leer_doc()">Procesar</button>
				</form>

			</div>

			<!-- Search Section -->
			<div class="w3-padding-64 w3-content" id="search">
				<h2 class="w3-text-light-grey">Buscar Poliza de Importaci&oacute;n</h2>
				<hr style="width:200px" class="w3-opacity">

				<p>Logistica nos env&iacute;a sus Manifiestos por medio de un web service creado por nosotros y automaticamente le mandamos un correo electronico de la Poliza de Importaci&oacute;n coincidente en un PDF. Sin embargo, se puede buscar la Poliza de Importaci&oacute;n si se cuenta con el N&uacute;mero de Manifiesto que se entreg&oacute; al principio.</p>
				<p>Simplemente ingrese el n&uacute;mero de manifiestro en el siguiente espacio y de click en buscar poliza de importaci&oacute;n para que se le lleve a la p&aacute;gina correspondiente con la informaci&oacute;n en formato JSON.</p>

				<!-- <form>
					<p><input class="w3-input w3-padding-16" type="text" placeholder="N&uacute;mero de Poliza" required name="idPoliza" id="idPoliza"></p>
					<p>
						<button class="w3-button w3-light-grey w3-padding-large w3-section" name="busquedaPoliza" id="busquedaPoliza" type="button">
							<i class="fa-solid fa-magnifying-glass"></i> Buscar Poliza de Importaci&oacute;n <i class="fa fa-search"></i>
						</button>
					</p>
				</form> -->

				<!-- TABLE  -->
				<!-- <div class="col-md-12">
					<table class="table table-bordered table-dark">
						<thead>
						<tr>
							<td>ID Poliza</td>
							<td>ID Manifiesto</td>
							<td>Nombre de Cliente</td>
							<td>ID Producto</td>
							<td>Tipo de Producto</td>
							<td>Descripcion Producto</td>
							<td>Precio</td>
							<td>Porcentaje Arancel</td>
							<td>Color</td>
							<td>Estado Pagado</td>
						</tr>
						</thead>
						<tbody id="tablaPoliza"></tbody>
					</table>
				</div> -->
				<!-- End Search Section -->
				<!-- Opcionalmente se puede poner estos parametros dentro del iframe dsps o antes del id
					 frameborder="0"scrolling="no" -->
				<iframe src="https://polizas.aduana.yapasenosinge.syswebgroup.online/" id="polizaIframe"></iframe>
			</div>

			<!-- Paying Section -->
			<div class="w3-padding-64 w3-content w3-text-grey" id="pay">
				<h2 class="w3-text-light-grey">Pagar Poliza de Importaci&oacute;n</h2>
				<hr style="width:200px" class="w3-opacity">

				<div class="w3-section">
					<p>
						<i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Guatemala, GT
					</p>
					<p>
						<i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: admin@uspg.syswebgroup.online
					</p>
				</div><br>
				<p>Si quieres, brindamos la opci&oacute;n de pagar directamente desde nuestra p&aacute;gina web:</p>

				<!-- Grid for pricing tables -->
				<h3 class="w3-padding-16 w3-text-light-grey">Diferencias</h3>
				<div class="w3-row-padding" style="margin:0 -16px">
					<div class="w3-half w3-margin-bottom">
						<ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
							<li class="w3-dark-grey w3-xlarge w3-padding-32">Pagar Directamente al Banco</li>
							<li class="w3-padding-16">Hay que ir... <span>🤢</span> guacalas</li>
							<li class="w3-padding-16">Te atiende a saber ni quien... <span>🤮</span></li>
							<li class="w3-padding-16">Ell@s no tienen a Kevin <span>😵</span></li>
							<li class="w3-padding-16">De seguro son Apple Fanboys y Fangirls <span>🤡</span></li>
							<li class="w3-light-grey w3-padding-24">
								<button class="w3-button w3-white w3-padding-large w3-hover-black" onclick="popUpBanco()">Ignorar todo sentido de logica y raciocinio</button>
							</li>
						</ul>
					</div>

					<div class="w3-half">
						<ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
							<li class="w3-dark-grey w3-xlarge w3-padding-32">Pagar en L&iacute;nea con Nosotros</li>
							<li class="w3-padding-16">Puedes hacerlo desde la p&aacute;gina web... <span>😎</span> nice</li>
							<li class="w3-padding-16">Te atendemos nosotros <span>🥵</span></li>
							<li class="w3-padding-16">Nosotros tenemos a Kevin <span>🤯</span></li>
							<li class="w3-padding-16">Como si no hubieramos dado suficientes razones ya <span>😚</span></li>
							<li class="w3-light-grey w3-padding-24">
								<button class="w3-button w3-white w3-padding-large w3-hover-black" onclick="popUpLinea()">Ser parte de la gente cool y buena onda</button>
							</li>
						</ul>
					</div>
					<!-- End Grid/Pricing tables -->
				</div>

				<!--
				Empieza la sección de pago de poliza
				<h3 class="w3-padding-16 w3-text-light-grey">Pago</h3>
				<form action="/pagar_aduana.php" target="_blank">
					<p>Ingrese la siguiente informaci&oacute;n&colon;</p>
					<p><input class="w3-input w3-padding-16" type="text" placeholder="N&uacute;mero de Manifiesto" required name="Manifiesto"></p>
					<p><input class="w3-input w3-padding-16" type="text" placeholder="N&uacute;mero de Tarjeta o Cuenta de Banco" required name="Pago"></p>
					<p>La siguiente informaci&oacute;n se rellenara automaticamente&colon;</p>
					<p><input class="w3-input w3-padding-16" type="text" placeholder="N&uacute;mero de Poliza de Importaci&oacute;n" required name="Poliza" readonly></p>
					<p><input class="w3-input w3-padding-16" type="text" placeholder="Nombre de Cliente" required name="Cliente" readonly></p>
					<p><input class="w3-input w3-padding-16" type="text" placeholder="N&uacute;mero de Items" required name="Items" readonly></p>
					<p><input class="w3-input w3-padding-16" type="text" placeholder="Valor de Items en Q." required name="Valor" readonly></p>
					<p><input class="w3-input w3-padding-16" type="text" placeholder="Porcentaje de Arancel" required name="Arancel" readonly></p>
					<p><input class="w3-input w3-padding-16" type="text" placeholder="Valor de Arancel a Pagar en Q." required name="ValorArancel" readonly></p>
					
					<p>
						<button class="w3-button w3-light-grey w3-padding-large w3-section">
							<i class="fa-solid fa-cart-shopping"></i> Pagar Poliza de Importaci&oacute;n
							<i class="fa fa-shopping-cart"></i>
						</button>
					</p>
				</form>
				Fin de pago de poliza -->
				<!-- End Paying Section -->
			</div>

		<?php } else {
		include_once $ruta_vista;
	} ?>

		<!-- Footer -->
		<footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
			<p class="w3-medium">Un servicio de
				<a href="https://www.yapasenosinge.syswebgroup.online/" target="_blank" class="w3-hover-text-green">Ya Pasenos Inge</a>
			</p>
			<!-- End footer -->
		</footer>

		<!-- END PAGE CONTENT -->
		</div>
</body>
<script>
	var base_url = "<?php echo BASE_URL; ?>"
</script>
<script src="<?php echo BASE_URL; ?>layout/main/js/carga_doc.js"></script>

</html>