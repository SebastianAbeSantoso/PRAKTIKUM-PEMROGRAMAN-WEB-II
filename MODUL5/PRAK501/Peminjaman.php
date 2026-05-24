<?php 
require 'Model.php'; 
if (isset($_GET['id_peminjaman'])) {
    deleteData('peminjaman', 'id_peminjaman', $_GET['id_peminjaman']);
    header('Location: Peminjaman.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman</title>
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
        <h2>Data Peminjaman</h2>
        <a href="FormPeminjaman.php" class="btn btn-add"> + Tambah Peminjaman</a>
        <table>
            <tr>
                <th>Member</th><th>Buku</th><th>Tgl Pinjam</th><th>Tgl Kembali</th><th>Aksi</th>
            </tr>
            <?php $result = getPeminjaman(); while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['nama_member'] ?></td>
                <td><?= $row['judul_buku'] ?></td>
                <td><?= $row['tgl_pinjam'] ?></td>
                <td><?= $row['tgl_kembali'] ?></td>
                <td>
                    <a href="FormPeminjaman.php?id=<?= $row['id_peminjaman'] ?>" class="btn btn-edit">Edit</a>
                    <a href="Peminjaman.php?id_peminjaman=<?= $row['id_peminjaman'] ?>" class="btn btn-delete" onclick="return confirm('Hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
