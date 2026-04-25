<!DOCTYPE html>

<html>

<body>
  
<?php
  $nameError = $nimError = $genderError = "";
  $name = $nim = $gender = "";

  function test_input($data) {
      return htmlspecialchars(trim($data));
  }

  if (isset($_GET['submit'])) {
    if (empty($_GET["name"])) {
      $nameError = "nama tidak boleh kosong";
    } else {
      $name = test_input($_GET["name"]);
    }

    if (empty($_GET["nim"])) {
      $nimError = "nim tidak boleh kosong";
    } else {
      $nim = test_input($_GET["nim"]);
    }
  
    if (empty($_GET["gender"])) {
      $genderError = "jenis kelamin tidak boleh kosong";
    } else {
      $gender = test_input($_GET["gender"]);
    }
  }
?>

<form method="get">
    Nama: <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color:red">* <?php echo $nameError;?></span> <br> 
    NIM: <input type="text" name="nim" value="<?php echo $nim; ?>">
    <span style="color:red">* <?php echo $nimError;?></span><br>
    Jenis Kelamin: 
    <span style="color:red">* <?php echo $genderError;?></span><br>
    <input type="radio" name="gender" value="Laki-Laki" <?php if ($gender == "Laki-Laki") echo "checked"; ?>>Laki-Laki <br>
    <input type="radio" name="gender" value="Perempuan" <?php if ($gender == "Perempuan") echo "checked"; ?>>Perempuan <br>
    <input type="submit" name="submit" value="submit"> <br>
</form>

<?php
  $result = "";

  if ($name && $nim && $gender) {
      $result = "$name <br>$nim <br>$gender";
  }

  echo "$result";
?>

</body>
  
</html>
