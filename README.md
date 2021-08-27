<?php
	if($_POST["usuario_txt"]=="Mauricio Yepez" && $_POST["password_txt"]=="12345"){
		//inicio de la sesión
		session_start();
		
		//Declaramos las  variables de la  sesión
		$_SESSION["autentificado"] = true;
		$_SESSION["usuario"] = $_POST["usuario_txt"];
		
		header("Location: pagina1.php");
	}else{
		header("Location: index.php?error=si");
	}
?>
