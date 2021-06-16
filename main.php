<?php 

if(isset($_GET['wybor'])) $wybor = $_GET['wybor'];
if(isset($_POST['wybor'])) $wybor = $_POST['wybor'];

switch ($wybor){
    case 'install':
        break;

    case 'wynik':
        if(file_exists("ask_model.php")) include("ask_model.php");
        break;

    case 'login':
        if(file_exists("includes/login.php")) include("includes/login.php");
        break;

    case 'singup':
        if(file_exists("includes/singup.php")) include("includes/singup.php");
        break;
    
    case 'admin_form':
        if(file_exists("admin_form.php")) include("admin_form.php");
        break;

    case 'password_change_form':
        if(file_exists("password_change_form.php")) include("password_change_form.php");
        break;

    case 'password_change':
        if(file_exists("password_change.php")) include("password_change.php");
        break;

    case 'wycen':
        if(file_exists("form.php")) include("form.php");
        break;

    case 'users_list':
        if(file_exists("user_list.php")) include("user_list.php");
        break;

    default:
        if(file_exists("info2.php")) include("info2.php");
        break;


}
?>