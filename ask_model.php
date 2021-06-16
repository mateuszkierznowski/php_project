<?php

if (isset($_POST["submit"])){

    if (!(isset($_SESSION['userid']))){
        header("location: index.php?error=mustbeloged");
        }

    $url = 'https://motocykle-prediction.herokuapp.com/'; //TODO do configa
    $ch = curl_init($url);

    $data = array(
        'key' => 'asfwuighftirwer', //TODO do configa
        'ML_model' =>  $_POST['radio'],
        'brand' => $_POST['marka'],
        'model' => $_POST['model'],
        'capacity' => $_POST['pojemność'],
        'kilometers' => $_POST['przebieg'],
        'year' => $_POST['rok_prod']
    );


    $content = json_encode($data);
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json"));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

    $json_response = curl_exec($curl);

    $json_responses = json_decode($json_response);

    //echo $json_responses['price'];
    $price = $json_responses->price;
    $price = ceil($price);
    if ($price == 0){
        header("location: index.php?error=motornotfound");
    } else {
        echo "<div class=wynik>";
        echo "<h2>Nasz model wycenił motocykl na ".$price." złotych</h2>";
        echo "<p>Prosimy mieć na wzglądzie, że jest to uśredniona cena dla danego modelu</p>";
        echo "<p>w niektórych przypadkach np. przy szkodach cena może istotnie różnic się od tej wskazanej przez model</p>";
        echo "<p>Zapraszamy do ponownej wyceny klikając przycisk wyceń!</p>";
        echo "</div>";
    }

    curl_close($curl);
}
?>