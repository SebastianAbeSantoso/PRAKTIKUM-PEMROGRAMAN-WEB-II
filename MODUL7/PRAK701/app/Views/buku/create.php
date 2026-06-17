<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 32px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
        }

        label {
            display: block;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 16px;
            background: #2563eb;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        a {
            color: #2563eb;
            text-decoration: none;
            margin-left: 8px;
        }

        .alert {
            padding: 10px;
            margin-bottom: 16px;
            border-radius: 4px;
            background: #fee2e2;
            color: #991b1b;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tambah Buku</h2>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="/buku/store" method="post">
            <?= csrf_field() ?>

            <label for="judul">Judul</label>
            <input 
                type="text" 
                name="judul" 
                id="judul" 
                value="<?= old('judul') ?>"
            >

            <label for="penulis">Penulis</label>
            <input 
                type="text" 
                name="penulis" 
                id="penulis" 
                value="<?= old('penulis') ?>"
            >

            <label for="penerbit">Penerbit</label>
            <input 
                type="text" 
                name="penerbit" 
                id="penerbit" 
                value="<?= old('penerbit') ?>"
            >

            <label for="tahun_terbit">Tahun Terbit</label>
            <input 
                type="number" 
                name="tahun_terbit" 
                id="tahun_terbit" 
                value="<?= old('tahun_terbit') ?>"
            >

            <button type="submit">Simpan</button>
            <a href="/buku">Kembali</a>
        </form>
    </div>

</body>
</html>