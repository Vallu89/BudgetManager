<?php

    session_start();
    if (!isset($_SESSION['logged'])){
        header("Location:index.php");
        exit();
    }

?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Menu główne</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />

	
</head>

<body>
    <nav>
        <div class="menu  navbar navbar-expand-lg navbar-dark " >

            <a class="navbar-brand" href="main-menu.php"><img src="img/Growth_icon.svg.png" width="30" height="30" class="d-inline-block mr-1 align-bottom" alt="">Budget Manager</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">

                <span class="navbar-toggler-icon"></span>
                
            </button>

            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav mr-auto my-2 mx-0">
                    

                        <li class="nav-item"><a class="nav-link" href="add-income.php">Dodaj przychód</a></li>

                        <li class="nav-item"><a class="nav-link" href="add-expense.php">Dodaj wydatek</a></li>

                        <li class="nav-item"><a class="nav-link" href="review-balance.php">Przegladaj bilans</a></li>

                        <li class="nav-item"><a class="nav-link" href="#">Ustawienia</a></li>

                        <li class="nav-item"><a class="nav-link" href="#">Wyloguj się</a></li>
                    
                </ul>
                <span class="text-light mx-2">Witaj -imię- ! </span>
            </div>
        </div>
    </nav>
	<main>
        <div class="content">
            Witaj -imię-! <br/><br/>
            Aby rozpocząć wybierz opcję z listy znajdujacej się powyżej :)
        </div>
    </main>
    <footer>
		<div class="footer"> BudgetManager v.0.0.1 &copy; Wszelkie Prawa Zastrzeżone</div>
	</footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
    
</body>
</html>