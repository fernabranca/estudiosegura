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
				<li class="actual"><a class="actual" href="#"> Contacto </a></li>
				<li><a href="consulta_virtual.php"> Consulta Virtual </a></li>
			</ul>
		    </nav>
		</header>
		<section id="contenido">
			<div id="superior">
			</div>
			
		<?php
			if(isset($_GET['e'])){
				?><h4 id="acreditado">El mensaje se envio con exito!</h4>
				<label>
						<a href="index.html"><input type="submit" value="Volver" />
				</label>
		<?php	} else {

		?>
			<h3 id="acreditado">
				Envianos tu Consulta
			</h3>
			<form method="post" action="consulta.php">
				<div id="formulario">
					<label>
						Nombre y Apellido:</br><input type="text" name="nombre" />
					</label></br>
					<label>
						Email:</br><input type="email" name="correo" placeholder="ejemplo@ejemplo" />
					</label></br>
					<label>
						Motivo:</br><select id="motivo" name="motivo">
										<option value="Consulta Virtual">
											Consulta Virtual
										</option>
										<option value="Consulta Presencial">
											Consulta Presencial
										</option>
										<option value="Consulta Simple">
											Pregunta Simple
										</option>
									</select>
					</label>
					<label>
						Mensaje:</br><textarea name="consulta" rows="5" placeholder="Detallanos tu duda..."></textarea>
					</label></br>
					<label>
						<input type="submit" />
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

