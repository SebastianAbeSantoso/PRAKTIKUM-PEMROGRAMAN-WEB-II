<!DOCTYPE html>

<html>

<body>

<style>
  table {
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid black;
    padding-top: 5px;
    padding-left: 10px;
    padding-right: 10px;
  }
</style>


<form method="post">
    Panjang: <input type="text" name="length" required><br>
    Lebar: <input type="text" name="width" required><br>
    Nilai: <input type="text" name="numbers" required><br>
    <input type="submit" value="Cetak"><br>
</form>
    
<?php
    if (isset($_POST['length']) && isset($_POST['width'])) {
        $length = $_POST['length'];
        $width = $_POST['width'];
        $numbers = explode(' ', $_POST['numbers']);

        $i = 0;

        echo "<table>";

        while ($i < $length) {
            echo "<tr>";
            $j = 0;
            $num = $i * $width;

            while ($j < $width) {
                if (!isset($numbers[$num])) {
                    echo "<td> null</td>";
                } else {
                    echo "<td>$numbers[$num]</td>";
                }
                $j++;
                $num++;
            }

            $i++;
        }
        echo "</table>";

    }
?>

</body>
        
</html>
