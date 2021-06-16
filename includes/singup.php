<?php

if (isset($_POST["submit"])){

    $log = $_POST['login'];
    $pwd = $_POST['password'];
    $pwdrepeat = $_POST['password_repeat'];
    
    if (isset($_POST['radio'])){
        $premium = 1;
    } else {
        $premium = 0;
    }

    if(file_exists("config/con.fig.php")) include("config/con.fig.php");
    if(file_exists("includes/functions.php")) include("includes/functions.php");

    if (emptyInputSignup($login, $pwd, $pwdrepeat) !== false){
        header("location: registration_form.php?error=emptyinput");
        exit();
    }

    if (pwdMatch($pwd, $pwdrepeat) !== false){
        header("location: registration_form.php?error=passworddontmatch");
        exit();
    }


    $link = mysqli_connect($host, $login, $password, $dbname) or die("Nie można się połączyć");
    $db = mysqli_connect($host, $login, $password, $dbname) or die("Nie można się połączyć");
    $user_check_query = "SELECT * FROM project_users WHERE login='$log'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    $encyrpt_passowrd = md5($pwd);

    if ($user) { // if user exists
        header("location: registration_form.php?error=userexist");
    } else {
        $user = "user";
        $query = "INSERT INTO project_users (login, password, premium, uprawnienia) 
                  VALUES('$log', '$encyrpt_passowrd', $premium, '$user')";
        mysqli_query($db, $query);
        header('location: index.php');
    }
} else {
    header("location: registration_form.php");
}
?>