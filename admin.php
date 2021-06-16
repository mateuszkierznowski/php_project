<?php
if(file_exists("config/con.fig.php")) include("config/con.fig.php");
if(file_exists("includes/functions.php")) include("includes/functions.php");
session_start();


echo $_POST['radio'];
echo $_POST['nazwauzytkownika'];

$db = mysqli_connect($host, $login, $password, $dbname) or die("Nie można się połączyć");
// mysqli_query($db,"UPDATE project_users set password='$new_pwd' WHERE name='$id'") or die("nie udało sie");
$result = mysqli_query($db, "SELECT * from project_users WHERE login='" . $_POST['nazwauzytkownika'] . "'");
$row = mysqli_fetch_array($result);

if(isset($row['login'])){
    if($_POST['radio'] == 'usun'){
        mysqli_query($db, "DELETE from project_users WHERE login='" . $_POST['nazwauzytkownika'] . "'");
        header("location: index.php?wybor=admin_form&answear=userdeleted");

    } elseif ($_POST['radio'] == 'nadajpremium') {
        mysqli_query($db, "UPDATE project_users set premium='1' WHERE login='" . $_POST['nazwauzytkownika'] . "'");
        header("location: index.php?wybor=admin_form&answear=userpremium");

    } elseif ($_POST['radio'] == 'usunpremium') {
        mysqli_query($db, "UPDATE project_users set premium='0' WHERE login='" . $_POST['nazwauzytkownika'] . "'");
        header("location: index.php?wybor=admin_form&answear=usernotpremium");

    }
} else {
    header("location: index.php?wybor=admin_form&error=usernotfound");
}

// $db = mysqli_connect($host, $login, $password, $dbname) or die("Nie można się połączyć");
// mysqli_query($db,"UPDATE project_users set password='$new_pwd' WHERE name='$id'") or die("nie udało sie");
// $result = mysqli_query($db, "SELECT *from project_users WHERE login='" . $id . "'");
// $row = mysqli_fetch_array($result);
// if(count($_POST)>0) {
//     if(md5($_POST["currentPassword"]) == $row["password"] && ($_POST["newPassword"] == $_POST["confirmPassword"]) ) {
        
//         mysqli_query($db, "UPDATE project_users set password='" . $_POST["newPassword"] . "' WHERE login='" . $id . "'");
//         header("location:index.php?wybor=password_change_form&answear=sucess");
//         exit();
// } else {
//     header("location: index.php?wybor=password_change_form&answear=failure");
//     exit();
//     }
// }
?>