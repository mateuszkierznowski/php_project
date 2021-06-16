<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/form.css">
<div class='form'>
<form class="mt-5" method="POST" action="admin.php">
<input type="hidden" name="wybor" value="admin.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Podaj nazwe użytkownika</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nazwauzytkownika" type="nazwauzytkownika" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Opcje</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="usun" required="required"> 
        <label for="radio_0" class="custom-control-label">Usuń użytkownika</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="nadajpremium" required="required"> 
        <label for="radio_1" class="custom-control-label">Nadaj premium</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="usunpremium" required="required"> 
        <label for="radio_2" class="custom-control-label">Usuń premium</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Wykonaj</button>
    </div>
  </div>
  <?php
  if (isset($_GET["error"])){
     if ($_GET["error"] == "usernotfound"){
       echo "<div class='wynik'><p>Podany użytkownik nie został znaleziony</p></div>";
     }
  }
  if (isset($_GET['answear'])){
    if ($_GET['answear'] == 'userdeleted'){
      echo "<div class='wynik'><p>Użytkownik został usuniety</p></div>";
    }
    if ($_GET['answear'] == 'userpremium'){
      echo "<div class='wynik'><p>Użytkownik został usuniety</p></div>";
    }
    if ($_GET['answear'] == 'usernotpremium'){
      echo "<div class='wynik'><p>Użytkownik został usuniety</p></div>";
    }
  }
  ?>
</form>
</div>
