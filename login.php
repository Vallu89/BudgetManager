<?php
    // https://pasja-informatyki.pl/programowanie-webowe/php-mysqli-wariant-proceduralny/ --> podstawowe komendy MySQLi 
    session_start();
    if(!isset($_POST['email']) && !isset( $_POST['password'])){
        header("Location:index.php");
        exit();
    }
    require_once "connect.php";

    $connect = @new mysqli($host,$db_user,$db_password,$db_name);

    if ($connect->connect_errno != 0){
       echo "Error: ".$connect->connect_errno;
    }
    else{
        $email = $_POST['email'];
        $password = $_POST['password'];

        //$email = htmlentities($email, ENT_QUOTES,"UTF-8");

        $sql =sprintf("SELECT * FROM users WHERE email='%s'",mysqli_real_escape_string($connect,$email));

        if($result = $connect->query($sql)){
           $ilu_userow = $result->num_rows; 
           if($ilu_userow>0){
                $row= $result->fetch_assoc();

                if (password_verify($password,$row['password'])){

                    $_SESSION['logged'] = true;
                    $_SESSION['userId'] = $row['id'];
                    unset($_SESSION['error']);
                    $result->free_result();
                    header("Location:main-menu.php");

                } else {

                    $_SESSION['error'] = '<span style="color:red" >Nieprawidłowy login lub hasło !</span>';
                    header('Location:index.php');
                }
           } else {
                $_SESSION['error'] = '<span style="color:red" >Nieprawidłowy login lub hasło !</span>';
                header('Location:index.php');
           }
        }

        $connect->close();
    }

?>

