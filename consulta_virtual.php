<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="estilos_maqueta.css">
<head>
	<title>Estudio Jurídico Segura</title>
	<link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">
	<link rel="shortcut icon" href="Martillosegura.ico">
</head>
<body>
	<section id="contenedor">
		<header>
			<div id="estudio">
			<h1>Estudio Jurídico y Notarial Segura y Asociados</h1>
			</div>
			<nav id="botonera">
			<ul>
				<li><a href="index.html"> Inicio </a></li>
				<li><a href="quienessomos.html"> Quienes Somos </a></li>
				<li><a href="contacto.php"> Contacto </a></li>
				<li><a href="#"> Consulta Virtual </a></li>
			</ul>
		    </nav>
		</header>
		<section id="contenido">
			<div id="superior">
			</div>
			<?php
			if(isset($_GET['e'])){
				?><h4 id="acreditado">El Cupón se envió con exito!</h4>
				<label>
						<a href="index.html"><input type="submit" value="Volver" />
				</label>
		<?php	} else {

		?>
			<div>
			<h2 id="acreditado" align="center"> Podes Solicitar tu Consulta Virtual Ahora!</h2>
			<h4 id="acreditado" align="justify"> Es sencillo, mediante el siguiente formulario, completá con tus datos personales para recibir en tu correo electrónico un botón de pago. Lo podes pagar con los distintos medios que mercadopago.com te ofrece. Una vez acreditado, coordinaremos con vos el mejor momento para realizar la consulta virtual. Despreocupate, podrás evacuar todas tus dudas y consultas, sin condiciones de tiempo, en una charla virtual con el profesional que necesites. Utilizamos distintos medios de conferencia virtual como ser: Skype, Hang Out u otro que vos utilices. Si tenés inconvenientes de cómo hacer para abonar o no tenes una cuenta mercadopago para pagar o no posees una cuenta para la video conferencia, te compartimos un video que te explicará el uso de una cuenta de videoconferencia, la creación de una cuenta de mercadopago para abonar y como es el proceso de pago haciendo click aqui.</h4>
			</div></br>
		<form method="post" action="pago_virtual.php">
				<div id="formulario">
					<label>
						Nombre y Apellido:</br><input type="text" name="nombre" />
					</label></br>
					<label>
						Email:</br><input type="email" name="correo" placeholder="ejemplo@ejemplo" />
					</label></br>
					<label>
						Profesional Requerido:</br><select id="motivo" name="profesional">
										<option value="abogado">
											Abogado
										</option>
										<option value="notario">
											Notario
										</option>
										<option value="mediador">
											Mediador
										</option>
										<option value="gestor_automotor">
											Gestor del Automotor
										</option>
									</select>
					</label>
					</br>
					<label>
						<input type="submit" value="Enviarme Cupón de Pago" />
					</label>
				</div>
			</form>
			<?php } ?>
		</section>
	</section>
	<footer>
			<div id="developer">
				<h5>Design <strong><em>Fernando Branca</em></strong></h5>
			</div>
		</footer>
</body>
</html>
