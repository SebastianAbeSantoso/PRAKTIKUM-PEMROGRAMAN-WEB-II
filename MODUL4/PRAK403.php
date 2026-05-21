<!DOCTYPE html>

<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 30%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #d0cece;
        }

    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>



<?php
$student = array(
    'Ridho' => array(
        "Course" => array(
            "Pemrograman I" => 2,
            "Praktikum Pemrograman I" => 1,
            "Pengantar Lingkungan Lahan Basah" => 2,
            "Arsitektur Komputer" => 3,
        ), 
    ),
    'Ratna' => array(
        "Course" => array(
            "Basis Data I" => 2,
            "Praktikum Basis Data I" => 1,
            "Kalkulus" => 3,
        ),
    ),
    'Tono' => array(
        "Course" => array(
            "Rekayasa Perangkat Lunak" => 3,
            "Analisis dan Perancangan Sistem" => 3,
            "Komputasi Awan" => 3,
            "Kecerdasan Bisnis" => 3,
        ), 
    ),
);

$no = 1;

foreach ($student as $name => $details) {
    $courses = $details["Course"];
    $total_sks = array_sum($courses);

    if ($total_sks >= 7) {
        $keterangan = "Tidak Revisi";
        $color = "green";
    } else {
        $keterangan = "Revisi KRS";
        $color = "red";
    }

    $firstRow = true;

    foreach ($courses as $course => $sks) {
        echo "<tr>";

        if ($firstRow) {
            echo "<td>" . $no . "</td>";
            echo "<td>" . $name . "</td>";
        } else {
            echo "<td></td>";
            echo "<td></td>";
        }

        echo "<td>" . $course . "</td>";
        echo "<td>" . $sks . "</td>";

        if ($firstRow) {
            echo "<td>" . $total_sks . "</td>";
            echo "<td style='background-color: $color;'>" . $keterangan . "</td>";
        } else {
            echo "<td></td>";
            echo "<td></td>";
        }

        echo "</tr>";

        $firstRow = false;
    }

    $no++;
}
?>
</table>

</body>

</html>