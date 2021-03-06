<?php
    session_start();

    if (isset($_SESSION['logged'])&&($_SESSION['logged']==true)){
        header('Location:main-menu.php');
        exit();
    }
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>BudgetManager v.0.0.1</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css" />
	
</head>

<body>
	<header>
		<div class="login-container">
			<img id="logo" src="img/logo.png" alt="Logo" >
		</div>
	</header>
	<main>

		<div class="login-container">
				<form action="login.php" method="POST">
					
					<input type="email"  placeholder="email" name="email" onfocus="this.placeholder=''" onblur="this.placeholder='email'">
					
					<input type="password" placeholder="hasło" name="password" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'"> 
					
					<input type="submit" value="Zaloguj się">
					
				</form>
				<?php

    				if(isset($_SESSION['error']))
       					echo $_SESSION['error'];
					unset($_SESSION['error']);
    
				?>
			<div id="registration">
				Nie posiadasz konta? <a href="registration.php">Zarejestruj się</a>
			</div>

		</div>
	</main>
</body>
</html>