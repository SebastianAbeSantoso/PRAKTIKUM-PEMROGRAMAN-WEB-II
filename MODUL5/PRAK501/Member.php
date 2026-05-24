<?php 
require 'Model.php'; 
if (isset($_GET['id_member'])) {
    deleteData('member', 'id_member', $_GET['id_member']);
    header('Location: Member.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Member</title>
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
        <h2>Daftar Member</h2>
        <a href="FormMember.php" class="btn btn-add">Tambah Member Baru</a>
        <table>
            <tr>
                <th>Nama</th><th>Aksi</th>
            </tr>
            <?php $result = getData('member'); while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['nama_member'] ?></td>
                <td>
                    <a href="FormMember.php?id=<?= $row['id_member'] ?>" class="btn btn-edit">Edit</a>
                    <a href="Member.php?id_member=<?= $row['id_member'] ?>" class="btn btn-delete">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
