<?php 
require 'Model.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id) {
    $conn = koneksi();
    $res = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_peminjaman=$id");
    $data = mysqli_fetch_assoc($res);
} else {
    $data = [
        'tgl_pinjam' => date('Y-m-d'),
        'tgl_kembali'=> '', 
        'id_member'  => '', 
        'id_buku'    => ''
    ];
}

if (isset($_POST['submit'])) {
    if ($id) {
        updatePeminjaman($id, $_POST['tgl_p'], $_POST['tgl_k'], $_POST['member'], $_POST['buku']);
    } else {
        addPeminjaman($_POST['tgl_p'], $_POST['tgl_k'], $_POST['member'], $_POST['buku']);
    }
    header('Location: Peminjaman.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
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
        <h2><?= $id ? 'Edit Data Peminjaman' : 'Tambah Peminjaman Baru' ?></h2>
        <form method="POST">
            <label>Pilih Member</label>
            <select name="member" required>
                <option value="">-- Pilih Member --</option>
                <?php $m = getData('member'); while($row = mysqli_fetch_assoc($m)): ?>
                    <option value="<?= $row['id_member'] ?>" <?= $data['id_member'] == $row['id_member'] ? 'selected' : '' ?>>
                        <?= $row['nama_member'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
            
            <label>Pilih Buku</label>
            <select name="buku" required>
                <option value="">-- Pilih Buku --</option>
                <?php $b = getData('buku'); while($row = mysqli_fetch_assoc($b)): ?>
                    <option value="<?= $row['id_buku'] ?>" <?= $data['id_buku'] == $row['id_buku'] ? 'selected' : '' ?>>
                        <?= $row['judul_buku'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
            
            <label>Tanggal Pinjam</label>
            <input type="date" name="tgl_p" value="<?= $data['tgl_pinjam'] ?>" required>
            
            <label>Tanggal Kembali</label>
            <input type="date" name="tgl_k" value="<?= $data['tgl_kembali'] ?>" required>
            
            <button type="submit" name="submit" class="btn btn-add">Simpan Peminjaman</button>
            <a href="Peminjaman.php" style="margin-left:10px;">Batal</a>
        </form>
    </div>
</body>
</html>
