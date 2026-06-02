<?= view('templates/header', ['title' => $title]) ?>

<main class="hero">
    <section class="hero-content">
        <p class="label">PRAK601 | CodeIgniter and MVC</p>

        <h1>Halo, saya <?= esc($profile['full_name']) ?></h1>

        <p class="subtitle">
            NIM: <?= esc($profile['nim']) ?> | <?= esc($profile['prodi']) ?>
        </p>

        <p class="description">
            <?= esc($profile['tagline']) ?>
        </p>

        <div class="button-group">
            <a href="/profil" class="btn primary">Lihat Profil</a>
            <a href="/" class="btn secondary">Beranda</a>
        </div>
    </section>
</main>

<?= view('templates/footer') ?>