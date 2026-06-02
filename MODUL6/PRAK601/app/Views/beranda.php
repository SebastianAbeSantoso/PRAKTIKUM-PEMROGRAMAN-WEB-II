<?= view('templates/header', ['title' => $title]) ?>

<main class="hero" style="--hero-bg: url('<?= base_url('images/bg-hero.png') ?>');">
    <div class="hero-bg"></div>

    <p class="hero-label">PRAK601 | CodeIgniter and MVC | <?= esc($profile['nim']) ?></p>

    <h1>Halo, saya<br><span><?= esc($profile['full_name']) ?></span></h1>

    <p class="hero-quote"><?= esc($profile['tagline']) ?></p>

    <div class="btn-row">
        <a href="/profil" class="btn btn-solid">Lihat Profil</a>
        <a href="/" class="btn btn-ghost">Beranda</a>
    </div>
</main>

<?= view('templates/footer') ?>