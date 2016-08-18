<?php
			$nombreyapellido=$_POST["nombre"];
			$correo=$_POST["correo"];
			$motivo=$_POST["motivo"];
			$consulta=$_POST["consulta"];
			
			$destino="segurayesi@gmail.com";
			$asunto="Consulta enviada desde Estudio Juridico Segura y Asociados";
			$remitente="MIME-Version: 1.0\r\n";
			$remitente.="Content-Type: text/html; charset=UTF-8\r\n";
			ob_start();
			require_once 'webmail/email_de_consulta.html';
			$mensaje= ob_get_clean();
			mail ($destino, $asunto, $mensaje, $remitente);
			header("Location: contacto.php?e=ok");
?>
