<!DOCTYPE html>

<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 35%;
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
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>

<?php
    function getLetterGrade($score) {
        if ($score >= 80) {
            return 'A';
        } elseif ($score >= 70) {
            return 'B';
        } elseif ($score >= 60) {
            return 'C';
        } elseif ($score >= 50) {
            return 'D';
        } else {
            return 'E';
        }
    }

    $student = array(
        'Andi' => array(
            "NIM" => "2101001", 
            "UTS_SCORE" => "87", 
            "UAS_SCORE" => "65",
        ),
        'Budi' => array(
            "NIM" => "2101002", 
            "UTS_SCORE" => "76", 
            "UAS_SCORE" => "79",
        ),
        'Tono' => array(
            "NIM" => "2101003", 
            "UTS_SCORE" => "50", 
            "UAS_SCORE" => "41",
        ),
        'Jessica' => array(
            "NIM" => "2101004", 
            "UTS_SCORE" => "60", 
            "UAS_SCORE" => "75",
        ),
    );

    foreach ($student as $name => $details) {
        $final_score = 0.4 * $details['UTS_SCORE'] + 0.6 * $details['UAS_SCORE'];

        echo "<tr>";
        echo "<td>" . $name . "</td>";
        echo "<td>" . $details['NIM'] . "</td>";
        echo "<td>" . $details['UTS_SCORE'] . "</td>";
        echo "<td>" . $details['UAS_SCORE'] . "</td>";
        echo "<td>" . $final_score . "</td>";
        echo "<td>" . getLetterGrade($final_score) . "</td>";
        echo "</tr>";
    }
?>
</table>

</body>

</html>
