<?php
	/*
	if (isset( $_POST['registrationComplete'] ) ){
		header("Location: index.php");
		exit();
	};
	*/
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Pomyślna Rejestracja</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css" />
	
</head>

<body>


	<div class="login-container">
		<form action="index.php">

			Rejestracja przebiegła pomyślnie !<br/><br/>
			<input type="submit"  name="registationOk" value="OK">

		</form>
	</div>
	
</body>
</html>