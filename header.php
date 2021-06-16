<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $nazwa_aplikacji; ?></title>


  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
    <?php
      if (isset($_SESSION["userid"])){
        echo '<a class="navbar-brand" href="index.php?wybor=wycen">Witaj '.$_SESSION["userid"].'</a>';
      } else {
        echo '<a class="navbar-brand" href="index.php?wybor=wycen">Wyceń motocykl</a>';
      }
    ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <a class="nav-link" href="index.php?wybor=wycen">Wyceń motocykl
            </a>
            <a class="nav-link" href="index.php">Info
            </a>

            <?php
            if ($_SESSION["type"] == 'admin'){
              echo '<a class="nav-link" href="index.php?wybor=admin_form">Panel Admina</a>';
              echo '<a class="nav-link" href="index.php?wybor=users_list">Użytkownicy</a>';
            }
            ?>
          <?php
            if (isset($_SESSION["userid"])){
              echo '<li class="nav-item">
              <a class="nav-link" href="logout.php">Wyloguj</a>';
              echo '<li class="nav-item">
              <a class="nav-link" href="index.php?wybor=password_change_form">Zmiana hasła</a>';
            } else {
              echo '<li class="nav-item">
              <a class="nav-link" href="login_form.php">Zaloguj</a>
              </li>';
              echo '<li class="nav-item">
              <a class="nav-link" href="registration_form.php">Rejestracja</a>';
              
            }
          ?>

          </li>
        </ul>
      </div>
    </div>
  </nav>

