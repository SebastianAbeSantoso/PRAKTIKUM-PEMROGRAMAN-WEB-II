<!DOCTYPE html>

<html>

<body>

<form method="post">
    Batas Bawah : <input type="text" name="bottom" value="<?php echo isset($_POST['bottom']) ? $_POST['bottom'] : ''; ?>"> <br>
    Batas Atas : <input type="text" name="top" value="<?php echo isset($_POST['top']) ? $_POST['top'] : ''; ?>"> <br>
    <input type="submit" name="submit" value="Cetak"> <br> <br>
</form>

<?php
  if (isset($_POST['submit']) && isset($_POST['bottom']) && isset($_POST['top'])) {
    $bottom = $_POST['bottom'];
    $top = $_POST['top'];
    $image = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
    do {
        if (($bottom + 7) % 5 === 0) {
            echo "<img src='$image' width='20' height='20'> ";
        } else {
            echo "$bottom ";
        }
        $bottom++;
    } while ($bottom <= $top); }
?>

</body>

</html>
