<? php
if ($_POST['submit']) {
	if (empty($_POST['name']) || empty ($_POST['email']) || empty ($_POST['comments'])) {
		$error=true;
	} else {
		$to ="h.thompson13@imperial.ac.uk";
		$name= trim ($_POST ['name']);
		$email= trim ($_POST ['email']);
		$comments= trim ($_POST ['comments']);

		$subject= "Contact Form";
		$messges= "Name: $name \r\n Email: $email \r\n Comments: $comments";
		$headers= "From:" . $name;
		$mailsent= mail($to, $subject, $messages, $headers);

		if ($mailsent) {
			$sent=true;
		}
	}
}
?>
<?php if ($error ==true){?>
<p class="error">An error has occurred. Please try to send your message again. </p>
<?php } if ($sent == true) {?>
<p class="sent"> Thank you for your email</p>
<?php } ?>