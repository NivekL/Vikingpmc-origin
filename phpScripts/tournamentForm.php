<!--TOURNAMENT FORM-->
<?php
	if (isset($_POST["submit3"])) {
		$name = $_POST['name3'];
		$email = $_POST['email3'];
		$message = $_POST['message3'];
		$human = intval($_POST['human3']);
		$from = 'Tournament apply form';
		$to = 'vikingpmc1@gmail.com';
		$subject = 'Tournament apply form';

		$body ="From: $name\n E-Mail: $email\n Message: \n$message";
		// Check if name has been entered
		if (!$_POST['name3']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email3'] || !filter_var($_POST['email3'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message3']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Success!</div>';
	} else {
		$result='<div class="alert alert-danger">Error! Try again.</div>';
	}
}
	}

?>
