<?php require 'Model.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistem Perpustakaan - Dashboard</title>
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
        <h1>Dashboard Utama</h1>
        <div class="card-container">
            <div class="card">
                <h3>Total Member</h3>
                <p><?= countData('member') ?></p>
            </div>
            <div class="card">
                <h3>Total Buku</h3>
                <p><?= countData('buku') ?></p>
            </div>
            <div class="card">
                <h3>Buku Dipinjam</h3>
                <p><?= countData('peminjaman') ?></p>
            </div>
        </div>

        <div class="card">
            <h2>Selamat Datang!</h2>
            <p>Ini adalah sistem manajemen perpustakaan sederhana. Gunakan menu di samping untuk mengelola data.</p>
        </div>
    </div>
</body>
</html>