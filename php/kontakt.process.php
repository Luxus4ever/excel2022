<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function naPocetnu()
{
	header("Location: ../index.php");
}

naPocetnu();

/*------- Uključiti potrebne phpmailer fajlove -------*/
require "PHPMailer.php";
require "SMTP.php";
require "Exception.php";

/*------- Uključiti potrbene PHPmailer klase u globalni namespace. --- Napomena: Mora biti na vrhu ---  -------*/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/*------- Kreirati instancu PHPmailer-a -------*/
$mail= new PHPMailer();

/*------- Postaviti mailer da koristi SMTP -------*/
$mail->isSMTP();

$mail->SMTPDebug = 0;

/*------- Definisati SMTP host (u našem slučaju mail) -------*/
$mail->Host= "mail.namewebsite.com";

/*------- Postaviti port za konekciju na SMTP (465 ili 25) -------*/
$mail->Porth= 465;

/*-------  Uključiti SMTP autentifikaciju -------*/
$mail->SMTPAuth= true;

/*------- Postaviti korisničko ime mail naloga od sajta -------*/
$mail->Username= "some@mail.com";

/*------- Postaviti šifru za gore navedeni mail -------*/
$mail->Password= "somePassword";

/*------- Postaviti tip enkripcije (ssl/tls) -------*/
$mail->SMTPSecure= "tls";

/*------- Postaviti mail sa koga se šalje -------*/
$mail->setFrom($_POST['email'], $_POST['name']);

/*------- Kada kliknemo na odgovor u email klijentu da bude postavljeno da odgovor dobija onaj koji je i poslao -------*/
$mail->addReplyTo($_POST['email'], $_POST['name']);

/*------- Unosimo ko prima email iz kontakt forme (naša adresa) -------*/
$mail->addAddress('some@email.com', 'FirstName SecondName'); 

/*------- Naslov maila iz kontakt forme -------*/
$mail->Subject = $_POST['subject']; 

/*------- Tekst bez HTML-a tj. čisti tekst -------*/
$mail->AltBody = $_POST['message']; 

/*------- Moguće da se ubaci i HTML oblikovanje teksta -------*/
$mail->Body = $_POST['message']; 

/*------- Dozvoliti HTML -------*/
$mail->isHTML(true);


/*------- Poslati email -------*/
//$mail->Send();
if(!$mail->Send()){
	echo 'Грешка: ' . $mail->ErrorInfo;
}else{
		//echo 'Е-пошта је послата!';
		?> <script>alert('Е-пошта је послата!');</script> <?php
		//header("Location: ../index.php");
	}

/*------- Zatvaranje SMTP konekcije -------*/
$mail->smtpClose();


