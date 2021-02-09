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
    
    <title>Dodawanie wydatku</title>
    
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

                        <li class="nav-item active"><a class="nav-link" href="add-expense.php">Dodaj wydatek</a></li>

                        <li class="nav-item"><a class="nav-link" href="review-balance.php">Przegladaj bilans</a></li>

                        <li class="nav-item"><a class="nav-link" href="#">Ustawienia</a></li>

                        <li class="nav-item"><a class="nav-link" href="#">Wyloguj się</a></li>
                    
                </ul>
                <span class="text-light mx-2">Witaj -imię- ! </span>
            </div>
        </div>
    </nav>
	<main>
        <article>
            <div class="content">
                <form action="addIncome.php" id="addIncome" method="POST">
                    <fieldset>
                        <legend>Dodaj wydatek</legend>
                        <div>
                            <label for="expense-almount">Kwota:</label>
                            <input type="text" name="almount" id="expense-almount">
                        </div>
                        <div>
                            <label for="expense-date">Data:</label>
                            <input id="expense-date" type="date" name="date" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                        <fieldset>
                            <legend>Sposób płatności</legend>
                            <div><label><input type="radio" name="paymentWay">Gotówka</label></div>
                            <div><label><input type="radio" name="paymentWay">Karta debetowa</label></div>
                            <div><label><input type="radio" name="paymentWay">Karta kredytowa</label></div>
                        </fieldset>
                        <fieldset>
                            <legend>Kategoria</legend>
                            <div><label><input type="radio" name="incomeCategory">Jedzenie</label></div>
                            <div><label><input type="radio" name="incomeCategory">Mieszkanie</label></div>
                            <div><label><input type="radio" name="incomeCategory">Transport</label></div>
                            <div><label><input type="radio" name="incomeCategory">Telekomunikacja</label></div>
                            <div><label><input type="radio" name="incomeCategory">Opieka zdrowotna</label></div>
                            <div><label><input type="radio" name="incomeCategory">Ubranie</label></div>
                            <div><label><input type="radio" name="incomeCategory">Higiena</label></div>
                            <div><label><input type="radio" name="incomeCategory">Dzieci</label></div>
                            <div><label><input type="radio" name="incomeCategory">Rozrywka</label></div>
                            <div><label><input type="radio" name="incomeCategory">Wycieczka</label></div>
                            <div><label><input type="radio" name="incomeCategory">Szkolenia</label></div>
                            <div><label><input type="radio" name="incomeCategory">Książki</label></div>
                            <div><label><input type="radio" name="incomeCategory">Oszczędności</label></div>
                            <div><label><input type="radio" name="incomeCategory">Na emeryturę</label></div>
                            <div><label><input type="radio" name="incomeCategory">Spłata długów</label></div>
                            <div><label><input type="radio" name="incomeCategory">Darowizna</label></div>
                            <div><label><input type="radio" name="incomeCategory" checked>Inne</label></div>
                            <br/>
                            <div><label>Komentarz( Opcjonalnie ):<br/><textarea name="addIncomeCommand" form="addIncome" rows="5" cols="33"></textarea></label></div>

                        </fieldset>
                    </fieldset>
                    <input type="submit" value="Dodaj wydatek"> 
                    <a id="cancel" href="main-menu.php">Anuluj</a>
                </form>
            </div>
        </article>
        
    </main>
    <footer>
		<div class="footer"> BudgetManager v.0.0.1 &copy; Wszelkie Prawa Zastrzeżone</div>
	</footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>	
</body>
</html>