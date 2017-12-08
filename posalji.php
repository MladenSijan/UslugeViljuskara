<?php
	header('Content-Type: application/json');
	require_once 'mail/PHPMailerAutoload.php';
	$mail = new PHPMailer;

  $data = json_decode(json_encode($_POST['json']), true);

  if (isset($data[0]['mejl'])  &&
    	isset($data[1]['naslov'])  &&
    	isset($data[2]['tekst'])
	   ) {

	 	$mejlAdresa = trim($data[0]['mejl']);
		$naslov = $data[1]['naslov'];
		$tekst = $data[2]['tekst'];

		$mail->setFrom($mejlAdresa,'');
		$mail->addAddress('mladen.sijan@live.com','mladen sijan');
		$mail->Subject = $naslov;
		$mail->Body = $tekst;

    $niz=array();

		if ($mail->send()) {
			$niz = array("poruka"=>"<span class='okMessage'><p>Uspešno ste poslali mejl.</p></span>");
			echo json_encode($niz['poruka']);
		}
		else {
			$niz = array("poruka"=>"<span class='errorMessage'><p>Došlo je do greške.</p></span>");
			echo json_encode($niz['poruka']);
		}
	}
?>