<?php
    $phones = array(
        array("brand" => "Samsung", "model" => "Galaxy S22"),
        array("brand" => "Samsung", "model" => "Galaxy S22+"),
        array("brand" => "Samsung", "model" => "Galaxy A03"),
        array("brand" => "Samsung", "model" => "Galaxy Xcover 5")
    );
?>

<table>
    <tr><th>Daftar Smartphone Samsung</th></tr>
    
    <?php
    foreach ($phones as $phone) {
        echo "<tr>";
        echo "<td>" . $phone['brand'] . " " . $phone['model'] . "</td>";
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

    th {
        padding-top: 15px;
        padding-bottom: 15px;
        font-size: 20px;
        background-color: red;
    }

</style>