<?= view('templates/header', ['title' => $title]) ?>

<main class="profile-page">
    <section class="profile-card">
        <div class="profile-layout">
            <img 
                src="/<?= esc($profile['pasfoto']) ?>" 
                alt="Foto Profil" 
                class="profile-photo"
            >

            <div class="profile-text">
                <h1><?= esc($profile['full_name']) ?></h1>

                <p>NIM: <?= esc($profile['nim']) ?></p>
                <p>Prodi: <?= esc($profile['prodi']) ?></p>
                <p>Email: <?= esc($profile['email']) ?></p>
                <p>Lokasi: <?= esc($profile['location']) ?></p>
            </div>
        </div>
    </section>

    <section class="content-section">
        <h2>Hobi</h2>

        <ul>
            <?php foreach ($profile['hobbies'] as $hobby): ?>
                <li><?= esc($hobby) ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="content-section">
        <h2>Skill</h2>

        <div class="tag-list">
            <?php foreach ($profile['skills'] as $skill): ?>
                <span><?= esc($skill) ?></span>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="content-section">
        <h2>Projects</h2>

        <div class="card-list">
            <?php foreach ($profile['projects'] as $project): ?>
                <div class="item-card">
                    <img src="/<?= esc($project['image']) ?>" alt="<?= esc($project['title']) ?>">

                    <h3><?= esc($project['title']) ?></h3>

                    <a href="<?= esc($project['link'], 'attr') ?>" target="_blank">
                        Lihat Project
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="content-section">
        <h2>Credentials</h2>

        <div class="card-list">
            <?php foreach ($profile['credentials'] as $credential): ?>
                <div class="item-card">
                    <img src="/<?= esc($credential['image']) ?>" alt="<?= esc($credential['title']) ?>">

                    <h3><?= esc($credential['title']) ?></h3>

                    <a href="<?= esc($credential['link'], 'attr') ?>" target="_blank">
                        Lihat Credential
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="content-section">
        <h2>Social Media</h2>

        <div class="card-list">
            <?php foreach ($profile['social_media'] as $social): ?>
                <div class="item-card">
                    <img src="/<?= esc($social['image']) ?>" alt="<?= esc($social['title']) ?>">

                    <h3><?= esc($social['title']) ?></h3>

                    <a href="<?= esc($social['link'], 'attr') ?>" target="_blank">
                        Kunjungi
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?= view('templates/footer') ?>