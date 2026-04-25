<!DOCTYPE html>

<html>

<body>

<form method="get">
    Nama 1: <input type="text" name="name1"><br>
    Nama 2: <input type="text" name="name2"><br>
    Nama 3: <input type="text" name="name3"><br>
    <input type="submit" value="Urutkan">
</form>

<?php
    $name1 = $name2 = $name3 = "";

    if (isset($_GET['name1'], $_GET['name2'], $_GET['name3'])) {

        $name1 = $_GET['name1'];
        $name2 = $_GET['name2'];
        $name3 = $_GET['name3'];

        if ($name1 <= $name2 && $name1 <= $name3) {
            $first = $name1;

            if ($name2 <= $name3) {
                $second = $name2;
                $third = $name3;
            } else {
                $second = $name3;
                $third = $name2;
            }

        } elseif ($name2 <= $name1 && $name2 <= $name3) {
            $first = $name2;

            if ($name1 <= $name3) {
                $second = $name1;
                $third = $name3;
            } else {
                $second = $name3;
                $third = $name1;
            }

        } else {
            $first = $name3;

            if ($name1 <= $name2) {
                $second = $name1;
                $third = $name2;
            } else {
                $second = $name2;
                $third = $name1;
            }
        }

        echo "$first <br>";
        echo "$second <br>";
        echo "$third <br>";
    }
?>

</body>
        
</html>
