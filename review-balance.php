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

    <title>Przeglądaj bilans</title>
    
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

                        <li class="nav-item active"><a class="nav-link" href="review-balance.php">Przegladaj bilans</a></li>

                        <li class="nav-item"><a class="nav-link" href="#">Ustawienia</a></li>

                        <li class="nav-item"><a class="nav-link" href="#">Wyloguj się</a></li>
                    
                </ul>
                <div>
                    <div class="text-light mx-2  ">Witaj -imię-!</div>
                    <div class="text-light mx-2 " style="font-size:14px;">Bilans:</div>
                </div>
                
            </div>
        </div>
    </nav>
	<main>
        <div class="content">
            <section> 
                <div class="row" >
       
                            <select class="period form-control  mx-auto my-2 ">
                                <option>Ten miesiąc</option>
                                <option>Poprzedni miesiąc</option>
                                <option type="button"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Wybierz zakres</option>
                            
                            </select>
  
                </div>
            

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Wybierz zakres</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-row">
                                <div class="form-group col-6">
                                  <label for="date-from">od dnia:</label>
                                  <input type="date" class="form-control" id="date-from">
                                </div>
                                <div class="form-group col-6">
                                  <label for="date-to">do dnia:</label>
                                  <input type="date" class="form-control" id="date-to">
                                </div>
                              </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
                          <button role="submit" class="btn btn-primary">OK</button>
                        </div>
                      </div>
                    </div>
                </div>
                
            </section>
            <article>
              <div class="row">
                    <div class="table-responsive p-4 col-xl-6">
                        <table class="table table-hover ">
                            <thead>
                              <tr>
                                <th scope="col" colspan="3">Dochody</th>
                              </tr>
                              <tr>
                                
                                <th scope="col">Data</th>
                                <th scope="col">Kategoria</th>
                                <th scope="col">Kwota [ zł ]</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                
                                <td>03-07-2020</td>
                                <td>Inne</td>
                                <td>200</td>
                              </tr>
                              <tr>
                                <td>05-07-2020</td>
                                <td>Sprzedaż na Allegro</td>
                                <td>50</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>

                    <div class="table-responsive p-4 col-xl-6">
                      <table class="table table-hover ">
                        <thead>
                          <tr>
                            <th scope="col" colspan="3">Wydatki</th>
                          </tr>
                          <tr>
                            
                            <th scope="col">Data</th>
                            <th scope="col">Kategoria</th>
                            <th scope="col">Kwota [ zł ]</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            
                            <td>07-07-2020</td>
                            <td>Jedzenie</td>
                            <td>134</td>
                          </tr>
                          <tr>                          
                            <td>08-07-2020</td>
                            <td>Mieszkanie</td>
                            <td>580</td>
                          </tr>
                          <tr>
                            <td>08-07-2020</td>
                            <td>Higiena</td>
                            <td>18</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
                <div class="row">
                
                  <div  id="piechart" class="col-12"></div>
                  
                      
                  </div>
                  <table>
                    <tr>
                        <th>Bilans:</th>
                        <th>-531</th>
                    </tr>
                  </table>
                  <div style="color: red; padding: 10px;">
                      Uważaj, wpadasz w długi!
                </div>
              </div>
                

                
            </article> 
        </div>      
    </main>
    <footer>
		<div class="footer"> BudgetManager v.0.0.1 &copy; Wszelkie Prawa Zastrzeżone</div>
	</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script  src="https://www.gstatic.com/charts/loader.js"></script> 
    <script src="dropdown.js"></script>
    <script src="piechart.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
</body>
</html>