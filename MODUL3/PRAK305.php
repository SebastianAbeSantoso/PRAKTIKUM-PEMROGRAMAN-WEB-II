<!DOCTYPE html>

<html>

<body>

<form method="post">
    <input type="text" name="string" value="<?php echo isset($_POST['string']) ? $_POST['string'] : ''; ?>"> 
    <input type="submit" name="submit" value="submit"> <br>
</form>

<?php
  if (isset($_POST['submit']) && isset($_POST['string'])) {
    $string = $_POST['string'];
    $length = strlen($string);
    $result = [];

    echo "<h2> Input:</h2> $string";

    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length; $j++) {
            if ($j == 0) {
                $first = strtoupper($string[$i]);
                $result[] = $first;
            } else {
                $lower = strtolower($string[$i]);
                $result[] = $lower;
            }
        }
    }

    echo "<h2> Output:</h2>" . implode("", $result);
    }
?>


</body>

</html>
