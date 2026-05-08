<!DOCTYPE html>

<html>

<body>
  
<form method="post">
    Tinggi : <input type="text" name="height" value="<?php echo isset($_POST['height']) ? $_POST['height'] : ''; ?>"> <br>
    Alamat Gambar : <input type="text" name="image" value="<?php echo isset($_POST['image']) ? $_POST['image'] : ''; ?>"><br>
    <input type="submit" name="submit" value="Cetak"> <br> <br>
</form>

<?php
  if (isset($_POST['submit']) && isset($_POST['height']) && isset($_POST['image'])) {
    $height = $_POST['height'];
    $image = $_POST['image'];
    $row = $height;

    while ($row >= 1) {
      $indent = ($height - $row) * 20;
      echo "<div style='margin-left: " . $indent . "px;'>";

      $column = 1;
      while ($column <= $row) {
        echo "<img src='$image' width='20' height='20'>";
        $column++;
      }
      echo "</div>";
      $row--;
    }
}
?>

</body>
  
</html>
