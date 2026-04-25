<!DOCTYPE html>

<html>

<body>

<?php
function temp_calculator($temp, $from, $to){
if ($from == "Celcius") {
    $temp_celcius = $temp;
} elseif ($from == "Fahrenheit") {
    $temp_celcius = ($temp - 32) * 5/9;
} elseif ($from == "Rheamur") {
    $temp_celcius = $temp * 5/4;
} else {
    $temp_celcius = $temp - 273.15;
}

if ($to == "Celcius") {
    $converted_temp = $temp_celcius; 
    $temp_symbol = "C";
} elseif ($to == "Fahrenheit") {
    $converted_temp = ($temp_celcius * 9/5) + 32;
    $temp_symbol = "F";
} elseif ($to == "Rheamur") {
    $converted_temp = $temp_celcius * 4/5;
    $temp_symbol = "R"; 
} else {
    $converted_temp = $temp_celcius + 273.15;
    $temp_symbol = "K"; 
  }

  return [$converted_temp, $temp_symbol];
}
?>

<form method="get">
    Nilai: <input type="text" name="temperature"> <br>
    Dari: <br>
    <input type="radio" name="from" value="Celcius">Celcius <br>
    <input type="radio" name="from" value="Fahrenheit">Fahrenheit <br>
    <input type="radio" name="from" value="Rheamur">Rheamur <br>
    <input type="radio" name="from" value="Kelvin">Kelvin <br>
    Ke: <br>
    <input type="radio" name="to" value="Celcius">Celcius <br>
    <input type="radio" name="to" value="Fahrenheit">Fahrenheit <br>
    <input type="radio" name="to" value="Rheamur">Rheamur <br>
    <input type="radio" name="to" value="Kelvin">Kelvin <br>
    <input type="submit" value="Konversi"> <br>
</form>

<?php
if (isset($_GET['temperature'], $_GET['from'], $_GET['to'])) {
    $temp = (float) $_GET['temperature'];
    $from = $_GET['from'];
    $to = $_GET['to'];
     
    list($converted_temp, $temp_symbol) = temp_calculator($temp, $from, $to);
    echo "<h2>Hasil Konversi: " . number_format($converted_temp, 1, ',', '.') . "°$temp_symbol</h2>";
}
?>

</body>

</html>