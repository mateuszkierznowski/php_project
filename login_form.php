<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="" />
    </div>

    <!-- Login Form -->
    <form class="mt-5" method="POST" action="index.php">
    <input type="hidden" name="wybor" value="login">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="hasło">
      <input type="submit" name="submit" class="fadeIn fourth" value="Zaloguj się">
    <div>
    <?php 
  
  
  if (isset($_GET["error"])){
     if ($_GET["error"] == "emptyinput"){
       echo "<p>Wypełnij wszystkie pola!</p>";
     }
     if ($_GET["error"] == "loginorpasswordwrong"){
      echo "<p>Login lub hasło są błędne</p>";
    }
  }

  ?>
    </div>
    <div>
          <a class="nav-link" href="registration_form.php">Rejestracja</a>
          <a class="nav-link" href="index.php">Strona główna</a>

    </div>
    </form>

  </div>
</div>