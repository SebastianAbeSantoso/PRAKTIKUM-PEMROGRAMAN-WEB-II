<?php 
require 'Model.php'; 
if (isset($_GET['id_buku'])) {
    deleteData('buku', 'id_buku', $_GET['id_buku']);
    header('Location: Buku.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Koleksi Buku</title>
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
        <h2>Koleksi Buku</h2>
        <a href="FormBuku.php" class="btn btn-add"> + Tambah Buku</a>
        <table>
            <tr>
                <th>Judul</th><th>Penulis</th><th>Penerbit</th><th>Tahun</th><th>Aksi</th>
            </tr>
            <?php $result = getData('buku'); while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['judul_buku'] ?></td>
                <td><?= $row['penulis'] ?></td>
                <td><?= $row['penerbit'] ?></td>
                <td><?= $row['tahun_terbit'] ?></td>
                <td>
                    <a href="FormBuku.php?id=<?= $row['id_buku'] ?>" class="btn btn-edit">Edit</a>
                    <a href="Buku.php?id_buku=<?= $row['id_buku'] ?>" class="btn btn-delete" onclick="return confirm('Hapus buku?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
