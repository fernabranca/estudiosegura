<?php
			$nombreyapellido=$_POST["nombre"];
			$correo=$_POST["correo"];
			$profesional=$_POST["profesional"];
			$consulta=$_POST["consulta"];
			
			$destino=$correo;
			$asunto="Cupón de Pago - Estudio Jurídico Segura y Asociados";
			$remitente="MIME-Version: 1.0\r\n";
			$remitente.="Content-Type: text/html; charset=UTF-8\r\n";
			$remitente.= 'From: segurayesi@gmail.com';
			ob_start();
			require_once 'webmail/email_de_pago.html';
			$mensaje= ob_get_clean();
			mail ($destino, $asunto, $mensaje, $remitente);
			header("Location: consulta_virtual.php?e=ok");
?>