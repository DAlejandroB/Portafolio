<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"> 
		<title>Contact</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<section class = "info" style="text-align: center">
			<h1 style="font-size:20px">¡Puedes contactarme por aquí, solo deja tu correo y el motivo por el cual te comunicas!</h1>
		<form method="post">
			<input type="text" name="email" placeholder="Correo Electronico">
			<input style = "height: 50px; padding-bottom: 100px;" type="text" name="message" placeholder="Mensaje">
			<input style="position: relative;" value="Enviar" type="submit" name="Enviar" action="sendMessage">
		</form>
		</section>
	</body>
</html>
<?php
	
	if(isset($_POST['Enviar'])){
		$date = "Date: ". date("Y/m/d") ."|". date("H:i:sa");
		$email = $_POST['email'];
		$message = $_POST['message']; 

		$myFile = fopen("messages.txt", "a");
		fwrite($myFile, $date. " Desde: " . $email . PHP_EOL. $message .PHP_EOL);
		echo "Archivo guardado";
		fclose($myFile);
	}
?>