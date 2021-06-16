<?php
// session_start();
echo "ello";
if (isset($_POST["submit"])){
    echo "it works!";

    $log = $_POST['login'];
    $pwd = $_POST['password'];
    $pwdrepeat = "valid";

    $encyrpt_passowrd = md5($pwd);


    if(file_exists("config/con.fig.php")) include("config/con.fig.php");
    if(file_exists("includes/functions.php")) include("includes/functions.php");

    if (emptyInputSignup($login, $pwd, $pwdrepeat) !== false){
        header("location: login_form.php?error=emptyinput");
        exit();
    }

    $db = mysqli_connect($host, $login, $password, $dbname) or die("Nie można się połączyć");
    $user_check_query = "SELECT * FROM project_users WHERE login='$log' AND password='$encyrpt_passowrd'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        session_start();
        $_SESSION['userid'] = $log;
        $_SESSION['premium'] = $user['premium'];
        $_SESSION['type'] = $user['uprawnienia'];
        header("location: index.php");
    } else {
        header("location: login_form.php?error=loginorpasswordwrong");
    }


} else {
    header("location: login_form.php");
}
?>