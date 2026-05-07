<!DOCTYPE html>

<html>

<body>

<form method="post">
    Jumlah Peserta: <input type="text" name="jumlah" required><br>
    <input type="submit" value="Cetak">
</form>
    
<?php
    if (isset($_POST['jumlah'])) {
        $jumlah = $_POST['jumlah'];

        $jumlah = $_POST['jumlah'];
        $i = 1;

        while ($i <= $jumlah) {

            if ($i % 2 == 1) {
                echo "<h1 style='color:red;'>Peserta ke-$i</h1>";
            } else {
                echo "<h1 style='color:green;'>Peserta ke-$i</h1>";
            }

            $i++;
        }
    }
?>

</body>
        
</html>
