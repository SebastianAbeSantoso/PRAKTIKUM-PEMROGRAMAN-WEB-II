<?php
function koneksi() {
    $host = "sql200.byetcluster.com";
    $user = "if0_42010080";           
    $db   = "if0_42010080_prak501";   
    
    $pass = "XYnklpEtrNJe"; 

    $conn = mysqli_connect($host, $user, $pass, $db);
    
    if (!$conn) {
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
    return $conn;
}
?>