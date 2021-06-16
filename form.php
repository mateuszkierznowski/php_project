<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/form.css">


<div class='form'>
  <form class="mt-5" method="POST" action="index.php">
  <input type="hidden" name="wybor" value="wynik">
    <div class="form-group row">
      <label for="marka" class="col-4 col-form-label">Marka motocykla</label> 
      <div class="col-8">
        <input id="marka" name="marka" required="required" class="custom-select" list="marka">
        </input>
      </div>
    </div>
    <div class="form-group row">
      <label for="type" class="col-4 col-form-label">Model</label> 
      <div class="col-8">
        <input id="model" name="model"  required="required" class="custom-select" list="brands"> 
        </input>
      </div>
    </div>
    <div class="form-group row">
      <label for="przebieg" class="col-4 col-form-label">Przebieg</label> 
      <div class="col-8">
        <input id="przebieg" name="przebieg" required="required" type="number" class="form-control" required="required">
      </div>
    </div>
    <div class="form-group row">
      <label for="rok_prod" class="col-4 col-form-label">Rok Produkcji</label> 
      <div class="col-8">
        <input id="rok_prod" name="rok_prod" required="required" type="number" class="form-control" required="required">
      </div>
    </div>
    <div class="form-group row">
      <label for="pojemność" class="col-4 col-form-label">Pojemność</label> 
      <div class="col-8">
        <input id="pojemność" name="pojemność" required="required" type="number" class="form-control" required="required">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Wybierz model</label> 
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Random_forest" checked> 
          <label for="radio_0" class="custom-control-label">Lasy losowe</label>
        </div>
    
  <?php
    if (isset($_SESSION['premium']) == 1){

        echo '<div class="custom-control custom-radio custom-control-inline">
          <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Gradient" default> 
          <label for="radio_1" class="custom-control-label">Gradient Boost</label>
        </div>';
    } else {
      echo '<div class="custom-control custom-radio custom-control-inline">
      <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Gradient" disabled> 
      <label for="radio_1" class="custom-control-label">Gradient Boost</label>
    </div>';
    echo '<button class="addMore" title="Tylko użytkownicy premium mogą odpytywać ten model!" disabled>?</button>';
    }
  ?>
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Wyceń swój motocykl</button>
      </div>
    </div>
    <div>
    <?php
    
      if (isset($_GET["error"])){
        if ($_GET["error"] == "mustbeloged"){
          echo "<div class=wynik>";
          echo "<p>Najpierw zaloguj się!</p>";
          echo "</div>";
        }
        if ($_GET["error"] == "motornotfound"){
          echo "<div class=wynik>";
          echo "<p>W bazie danych nie posiadamy takiego motocykla lub podczas wpisywania danych wkradł się błąd</p>";
          echo "<p>Sprawdź pisownie i spróbuj raz jeszcze!</p>";
          echo "</div>";
        }
    }
    ?>
    </div>
    <datalist id="marka">
    <option value="Yamha">
    <option value="Suzuki">
    <option value="Honda">
  </datalist>

  <datalist id="brands">
    <option value="mt">
    <option value="hornet">
    <option value="virago">
  </datalist>
  </form>
</div>

