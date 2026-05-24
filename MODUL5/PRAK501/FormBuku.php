<?php 
require 'Model.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$data = ['judul_buku'=>'','penulis'=>'','penerbit'=>'','tahun_terbit'=>''];

if ($id) {
    $conn = koneksi();
    $res = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku=$id");
    $data = mysqli_fetch_assoc($res);
}

if (isset($_POST['submit'])) {
    if ($id) {
        updateBuku($id, $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun']);
    } else {
        addBuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun']);
    }
    header('Location: Buku.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Buku</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="sidebar">
        <h2>Perpus App</h2>
        <a href="index.php">Dashboard</a>
        <a href="Member.php">Manajemen Member</a>
        <a href="Buku.php">Koleksi Buku</a>
        <a href="Peminjaman.php">Peminjaman</a>
    </div>

    <div class="content">
        <h2><?= $id ? 'Edit Buku' : 'Tambah Buku Baru' ?></h2>
        <form method="POST">
            <label>Judul Buku</label>
            <input type="text" name="judul" value="<?= $data['judul_buku'] ?>" required>
            
            <label>Penulis</label>
            <input type="text" name="penulis" value="<?= $data['penulis'] ?>" required>
            
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="<?= $data['penerbit'] ?>" required>
            
            <label>Tahun Terbit</label>
            <input type="number" name="tahun" value="<?= $data['tahun_terbit'] ?>" required>
            
            <button type="submit" name="submit" class="btn btn-add"><?= $id ? 'Update Buku' : 'Simpan Buku' ?></button>
            <a href="Buku.php" style="margin-left:10px;">Batal</a>
        </form>
    </div>
</body>
</html>