<?php

if (isset($_POST["action"])){


	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$myemail = "contato@versalius.com.br";
	$emess = "Nome: ".$name."\n";
	$emess.= "Mensagem: ".$message;
	$ehead = "From: ".$email."\r\n";
	$subj = "Contato ".date("d/m/Y H:i:s");
	$mailsend = mail("$myemail","$subj","$emess","$ehead");
	$message = "Email was sent.";
	
	
}
?>
