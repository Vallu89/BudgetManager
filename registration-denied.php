<?php

	if (isset( $_POST['registation-denied'] ) ){
		header("Location: index.php");
		exit();
	};

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Błąd</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css" />
	
</head>

<body>


	<div class="login-container">
		<form action="registration.php">

			Błąd rejestracji :( <br/><br/>
			Naciśnij OK aby powrócić <br/>
			<input type="submit"  name="registation-denied" value="OK">

		</form>
	</div>
	
</body>
</html>