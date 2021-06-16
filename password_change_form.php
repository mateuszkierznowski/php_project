<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/form.css">

<div class='form'>
<form class="mt-5" method="POST" action="index.php">
  <input type="hidden" name="wybor" value="password_change">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Podaj aktualne hasło</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input type='password' id="currentPassword" name="currentPassword" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="text1">Podaj nowe hasło</label> 
    <div class="col-8">
      <input type='password' id="newPassword" name="newPassword" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Powtórz nowe hasło</label> 
    <div class="col-8">
      <input type='password' id="confirmPassword" name="confirmPassword" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Zmień hasło</button>
    </div>
  </div>
  <?php
  if (isset($_GET["answear"])){
     if ($_GET["answear"] == "sucess"){
       echo "<div class='wynik'><p>Hasło zostało pomyślnie zmienione</p></div>";
     }
     if ($_GET["answear"] == "failure"){
      echo "<div class='wynik'><p>Podano nie poprawne dane, spróbuj ponownie</p></div>";
    }
  }

  ?>
</form>    
</div>


