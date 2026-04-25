<!DOCTYPE html>

<html>

<body>

<?php
    $n = "";

    if (isset($_GET['number'])) {
        $n = $_GET['number'];
    }
?>

<form method="get">
    Nilai: <input type="text" name="number" value="<?php echo $n; ?>"> <br>
    <input type="submit" value="Konversi"> <br>
</form>

<?php
    if (isset($_GET['number'])) {
        if (!is_numeric($n)) { 
            echo "<h2 style='color:red;'>Bukan angka</h2>";
    } else {
        $n = (int) $n;
        if ($n == 0) {
            echo "<h2>Hasil: Nol</h2>";
        } elseif ($n < 10) {
            echo "<h2>Hasil: Satuan</h2>";
        } elseif ($n < 20) {
            echo "<h2>Hasil: Belasan</h2>";
        } elseif ($n < 100) {
            echo "<h2>Hasil: Puluhan</h2>";
        } elseif ($n < 1000) {
            echo "<h2>Hasil: Ratusan</h2>";
        } else {
            echo "<h2>Hasil: Melebihi limit</h2>";
        }
    }
}
?>

</body>

</html>
