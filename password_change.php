<?php
$new_pwd = $_POST["newPassword"];

if(file_exists("config/con.fig.php")) include("config/con.fig.php");
if(file_exists("includes/functions.php")) include("includes/functions.php");
session_start();
$id = $_SESSION["userid"];/* userid of the user */
echo $id;
$db = mysqli_connect($host, $login, $password, $dbname) or die("Nie można się połączyć");
// mysqli_query($db,"UPDATE project_users set password='$new_pwd' WHERE name='$id'") or die("nie udało sie");
$result = mysqli_query($db, "SELECT *from project_users WHERE login='" . $id . "'");
$row = mysqli_fetch_array($result);
if(count($_POST)>0) {
    if(md5($_POST["currentPassword"]) == $row["password"] && ($_POST["newPassword"] == $_POST["confirmPassword"]) ) {
        $new_password = md5($_POST["newPassword"]);
        mysqli_query($db, "UPDATE project_users set password='" . $new_password . "' WHERE login='" . $id . "'");
        header("location:index.php?wybor=password_change_form&answear=sucess");
        exit();
} else {
    header("location: index.php?wybor=password_change_form&answear=failure");
    exit();
    }
}
?>