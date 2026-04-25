<?php
    $phones = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
?>

<table>
    <tr><th>Daftar Smartphone Samsung</th></tr>
    
    <?php
    foreach ($phones as $phone) {
        echo "<tr>";
        echo "<td>" . $phone . "</td>";
        echo "</tr>";
    }
    ?>
</table>    

<style>
    table {
        border-collapse: collapse;
    }

    td, th  {
        border: 3px double black;
    }

</style>