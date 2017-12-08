<?php
	require 'PHPMailerAutoload.php';
	$mail = new PHPMailer;

	if (isset($_POST['mejlAdresa']) &&
			isset($_POST['naslov']) 		&&
			isset($_POST['tekst'])
			) {
		$mejlAdresa = $_POST['mejlAdresa'];
		$naslov = $_POST['naslov'];
		$sadrzaj = $_POST['tekst'];
		
		$mail->setFrom($mejlAdresa, '');
		$mail->addAddress('mladen.sijan@live.com', 'mladen sijan');
		$mail->Subject  = $naslov;
		$mail->Body     = $sadrzaj;
		if(!$mail->send()) {
		  echo 'Mejl je poslat';
		  echo 'Mailer error: ' . $mail->ErrorInfo;
		} else {
		  echo 'Mejl nije poslat';
		}
	}

	
?>