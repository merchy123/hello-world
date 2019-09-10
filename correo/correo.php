<?php 

if (isset($_POST['enviar'])) {
	if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
		$name = $_POST['name'];
		$asunto = $_POST['asunto'];
		$msg = $_POST['msg'];
		$email = $_POST['msg'];
		$header = "From: merchysegundo@gmail.com" . "\r\n";
		$header.= "Reply-to: merchysegundo@gmail.com" . "\r\n";
		$header.= "X-Mailer: PHP/" . phpversion();
		$email = @mail($email,$asunto,$msg,$header);
		if ($email) {
			echo "<h4>su email fue exitosamente enviado";
		}

	}
}









 /*if (isset($_POST['enviar'])) {
 	if (!empty(($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
 	$name = $_POST['name'];
 	$asunto = $_POST['asunto'];
 	$msg = $_POST['msg'];
 	$email = $_POST['email'];
 	$header = "From: merchysegundo@gmail.com" . "\r\n";
 	$header.= "Reply-to: merchysegundo@gmail.com" . "\r\n";
 	$header.= "X-Mailer: PHP/". phpversion();
 	$mail = mail($email,$asunto,$msg,$header);

 	if ($mail) {
 		echo "<h4>su correo fue exitosamente enviado</h4>";
 	}

 	}
        }*/

 ?>