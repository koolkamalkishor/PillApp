<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<body>
	<?php
	require("connectiondatabase.php");?>
	<p>
	<?php
	if($CONNEXION)
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		
		$create=	"INSERT INTO user(user_id, email, password, phone)
					VALUES(NULL, '$email', '$password', '$phone');";
		$action_create=mysql_query($create, $CONNEXION);
		?>
			<p>Your account has been created, you can now login to your new account.</p>
			<p>You will now be redirected to the homepage.</p>
			<br/><br/>
		<?php
		header('Refresh: 5; URL=index.html');
	}
	else{
	}
		?>
	</p>
	
</body>
	
