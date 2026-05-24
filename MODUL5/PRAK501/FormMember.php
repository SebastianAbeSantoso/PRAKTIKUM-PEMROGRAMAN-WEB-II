<?php 
require 'Model.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$data = ['nama_member'=>'','nomor_member'=>'','alamat'=>'','tgl_mendaftar'=>'','tgl_terakhir_bayar'=>''];

if ($id) {
    $conn = koneksi();
    $res = mysqli_query($conn, "SELECT * FROM member WHERE id_member=$id");
    $data = mysqli_fetch_assoc($res);
}

if (isset($_POST['submit'])) {
    if ($id) {
        updateMember($id, $_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['tgl_d'], $_POST['tgl_b']);
    } else {
        addMember($_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['tgl_d'], $_POST['tgl_b']);
    }
    header('Location: Member.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Member</title>
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
        <h2><?= $id ? 'Edit Member' : 'Tambah Member Baru' ?></h2>
        <form method="POST">
            <label>Nama Member</label>
            <input type="text" name="nama" value="<?= $data['nama_member'] ?>" required>
            
            <label>Nomor Member</label>
            <input type="text" name="nomor" value="<?= $data['nomor_member'] ?>" required>
            
            <label>Alamat</label>
            <textarea name="alamat" rows="3" required><?= $data['alamat'] ?></textarea>
            
            <label>Tanggal Mendaftar</label>
            <input type="datetime-local" name="tgl_d" value="<?= str_replace(' ', 'T', $data['tgl_mendaftar']) ?>" required>
            
            <label>Terakhir Bayar</label>
            <input type="date" name="tgl_b" value="<?= $data['tgl_terakhir_bayar'] ?>" required>
            
            <button type="submit" name="submit" class="btn btn-add"><?= $id ? 'Update Data' : 'Simpan Member' ?></button>
            <a href="Member.php" style="margin-left:10px;">Batal</a>
        </form>
    </div>
</body>
</html>