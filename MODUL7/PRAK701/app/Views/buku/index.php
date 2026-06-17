<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 32px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        a {
            text-decoration: none;
            color: #2563eb;
        }

        .logout {
            color: #dc2626;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f1f5f9;
        }

        .empty {
            text-align: center;
            color: #64748b;
        }

        .alert {
            padding: 10px;
            margin-bottom: 16px;
            border-radius: 4px;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-error">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <div class="topbar">
            <div>
                <h2>Data Buku</h2>
                <p>Halo, <?= session()->get('username') ?></p>
            </div>

            <a href="/logout" class="logout">Logout</a>
        </div>

        <a href="/buku/create">+ Tambah Buku</a>

        <br><br>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php if (empty($buku)): ?>
                    <tr>
                        <td colspan="6" class="empty">Belum ada data buku.</td>
                    </tr>
                <?php else: ?>
                    <?php $no = 1; ?>
                    <?php foreach ($buku as $item): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= esc($item['judul']) ?></td>
                            <td><?= esc($item['penulis']) ?></td>
                            <td><?= esc($item['penerbit']) ?></td>
                            <td><?= esc($item['tahun_terbit']) ?></td>
                            <td>
                                <a href="/buku/edit/<?= $item['id'] ?>">Edit</a>
                                |
                                <a href="/buku/delete/<?= $item['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>
</html>