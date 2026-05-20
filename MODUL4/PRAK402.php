<!DOCTYPE html>

<html>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>NIM</th>
            <th>UTS Score</th>
            <th>UAS Score</th>
        </tr>

<?php
    $student = array();
    $student['Andi'] = array(
    "NIM" => "2101001", 
    "UTS_SCORE" => "87", 
    "UAS_SCORE" => "65",
);

    foreach ($student as $name => $details) {
      echo "<tr>";

      foreach ($details as $key => $value) {
        if (empty($value)) {
          $details[$key] = "null";
        } else {
            echo "<td>" . $name . "</td>";
            echo "<td>" . $details['NIM'] . "</td>";
            echo "<td>" . $details['UTS_SCORE'] . "</td>";
            echo "<td>" . $details['UAS_SCORE'] . "</td>";
        }
      }
      echo "</tr>";
    }
?>
</table>

</body>
  
</html>