<?php
require 'Koneksi.php';

function getData($table) {
    $conn = koneksi();
    $sql = "SELECT * FROM $table";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function deleteData($table, $id_col, $id_val) {
    $conn = koneksi();
    $sql = "DELETE FROM $table WHERE $id_col = $id_val";
    return mysqli_query($conn, $sql);
}

function addMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $conn = koneksi();
    $sql = "INSERT INTO member VALUES (NULL, '$nama', '$nomor', '$alamat', '$tgl_daftar', '$tgl_bayar')";
    return mysqli_query($conn, $sql);
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $conn = koneksi();
    $sql = "UPDATE member SET nama_member='$nama', nomor_member='$nomor', alamat='$alamat', 
            tgl_mendaftar='$tgl_daftar', tgl_terakhir_bayar='$tgl_bayar' WHERE id_member=$id";
    return mysqli_query($conn, $sql);
}

function addBuku($judul, $penulis, $penerbit, $tahun) {
    $conn = koneksi();
    $sql = "INSERT INTO buku VALUES (NULL, '$judul', '$penulis', '$penerbit', '$tahun')";
    return mysqli_query($conn, $sql);
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $conn = koneksi();
    $sql = "UPDATE buku SET judul_buku='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit=$tahun WHERE id_buku=$id";
    return mysqli_query($conn, $sql);
}

function getPeminjaman() {
    $conn = koneksi();
    $sql = "SELECT p.*, m.nama_member, b.judul_buku FROM peminjaman p 
            JOIN member m ON p.id_member = m.id_member 
            JOIN buku b ON p.id_buku = b.id_buku";
    return mysqli_query($conn, $sql);
}

function addPeminjaman($tgl_p, $tgl_k, $id_m, $id_b) {
    $conn = koneksi();
    $sql = "INSERT INTO peminjaman VALUES (NULL, '$tgl_p', '$tgl_k', $id_m, $id_b)";
    return mysqli_query($conn, $sql);
}

function updatePeminjaman($id, $tgl_p, $tgl_k, $id_m, $id_b) {
    $conn = koneksi();
    $sql = "UPDATE peminjaman SET tgl_pinjam='$tgl_p', tgl_kembali='$tgl_k', id_member=$id_m, id_buku=$id_b WHERE id_peminjaman=$id";
    return mysqli_query($conn, $sql);
}

function countData($table) {
    $conn = koneksi();
    $sql = "SELECT COUNT(*) as total FROM $table";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}
?>

