<?php
    session_start();

    if (isset($_POST['newEmail'])){
        //Udana walidacja
        $everythingOk = true;

        //Sprawdz poprawnosc adresu email
        $email=$_POST['newEmail'];
        $emailB=filter_var($email,FILTER_SANITIZE_EMAIL);

        if ((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email)){
            $everythingOk=false;
            $_SESSION['e_email']="Podaj poprawny adres email";   
        }

        //Sprawdz poprawnosc hasła
        $password1 = $_POST['newPassword']; //password1 = newPassword
        $password2 = $_POST['repeatPassword']; //password2 = repeatPassword

        if(( strlen($password1)<8 || strlen($password1)>20 )){
            $everythingOk=false;
            $_SESSION['e_password']="haslo musi mieć od 8 do 20 znaków"; 
        }

        if( $password1 != $password2){
            $everythingOk=false;
            $_SESSION['e_password']="Podane hasła są różne"; 
        }

        $passwordHash = password_hash($password1,PASSWORD_DEFAULT);


        //sprawdzenie duplikatów w mailu
        require_once "connect.php";
        mysqli_report(MYSQLI_REPORT_STRICT);

        try {
            $connect = new mysqli($host,$db_user,$db_password,$db_name);
            if ($connect->connect_errno != 0){
                throw new Exception(mysqli_connect_errno());
             }
            else{
                //Czy email już istnieje?
                $result = $connect->query("SELECT id FROM users WHERE email='$email'");
                if (!$result) 
                    throw new Exception($connect->error);
                $howManySimilarEmails = $result->num_rows;
                if($howManySimilarEmails >0){
                    $everythingOk=false;
                    $_SESSION['e_email']="Istnieje już konto przypisane do tego adresu email"; 
                }
                //Czy nick już istnieje?
                $nick = $_POST['newName'];
                $result = $connect->query("SELECT id FROM users WHERE username='$nick'");
                if (!$result) 
                    throw new Exception($connect->error);
                $howManyNicksLikeThis = $result->num_rows;
                if($howManyNicksLikeThis >0){
                    $everythingOk=false;
                    $_SESSION['e_nick']="Istnieje już gracz o takim nicku!"; 
                }

                if($everythingOk ==true){
                    //Wszystkie testy zaliczone
                    if($connect->query("INSERT INTO users VALUES(NULL,'$nick','$passwordHash','$email')") && 
                    $connect->query("INSERT INTO incomes_category_assigned_to_users (user_id, name) SELECT users.id, incomes_category_default.name FROM users, incomes_category_default WHERE users.email= '$email'") && 
                    $connect->query("INSERT INTO expenses_category_assigned_to_users (user_id, name) SELECT users.id, expenses_category_default.name FROM users, expenses_category_default WHERE users.email= '$email'") &&
                    $connect->query("INSERT INTO payment_methods_assigned_to_users (user_id, name) SELECT users.id, payment_methods_default.name FROM users, payment_methods_default WHERE users.email= '$email'")){
                        $_SESSION['registrationComplete']=true;
                        header('Location: registration-accept.php');    
                    }else{
                        header('Location: registration-denied.php');  
                    }
        
                }

                $connect->close(); 
            }

        } catch (Exception $e) {
            echo '<span style ="color:red">Błąd serwera :/ Spróbuj ponownie później !</span>';
            echo '<br/>Informacja deweloperska:'.$e;
        }

    }
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Zarejestruj się!</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css" />
	
</head>

<body>

	<main>
		<article>
			<div class="container">
				<form  action="registration.php" method = "POST">
					
					<div><label>Podaj adres email:*  <input type="email" placeholder="email" name="newEmail" onfocus="this.placeholder=''" onblur="this.placeholder='email'" required></label></div>
					
					<div><label>Podaj imię: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" placeholder="imię" name="newName" onfocus="this.placeholder=''" onblur="this.placeholder='imię'"></label></div>
					
					<div><label>Podaj hasło:*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="hasło" name="newPassword" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" required></label></div>

					<div><label>Powtórz hasło:*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="powtórz hasło" name="repeatPassword" onfocus="this.placeholder=''" onblur="this.placeholder='powtórz hasło'" required></label></div>
					
					<input type="submit" value="Zarejestruj się">

					<div class="tip">
						* Pola wymagane.
					</div>
					
				</form>
			</div>
		</article>
	</main>
	
</body>
</html>