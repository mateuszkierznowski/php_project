<?php


if(file_exists("config/con.fig.php")) include("config/con.fig.php");
if(file_exists("includes/functions.php")) include("includes/functions.php");

$query = "SELECT * FROM project_users";
    $result = mysqli_query ($link, $query) or die ("Zapytanie zakończone niepowodzeniem");
    echo "<table class=\"table\">\n";
    echo "\t\t<td>user_id</td>\n";
    echo "\t\t<td>login</td>\n";
    echo "\t\t<td>hasło</td>\n";
    echo "\t\t<td>premium</td>\n";
    echo "\t\t<td>typ użytkownika</td>\n";

    while ($wynik = mysqli_fetch_row($result)){
        echo "\t<tr>\n";
        foreach ($wynik as $col_value){
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "<table>\n";
    
    mysqli_free_result($result);

?>