<?= view('templates/header', ['title' => $title]) ?>

<main class="profile-wrap">
    <div class="profile-head">
        <img src="/<?= esc($profile['pasfoto']) ?>" alt="Foto Profil">
        <div>
            <h1><?= esc($profile['full_name']) ?></h1>
            <p><?= esc($profile['nim']) ?> | <?= esc($profile['prodi']) ?></p>
            <p><?= esc($profile['email']) ?> | <?= esc($profile['location']) ?></p>
        </div>
    </div>

    <div class="profile-grid">

        <div>
            <p class="section-label">Hobi</p>
            <ul class="plain">
                <?php foreach ($profile['hobbies'] as $hobby): ?>
                    <li><?= esc($hobby) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div>
            <p class="section-label">Skills</p>
            <div class="tags">
                <?php foreach ($profile['skills'] as $skill): ?>
                    <span class="tag"><?= esc($skill) ?></span>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="span-2">
            <p class="section-label">Projects</p>
            <div class="card-row">
                <?php foreach ($profile['projects'] as $project): ?>
                    <div class="card">
                        <img src="/<?= esc($project['image']) ?>" alt="<?= esc($project['title']) ?>">
                        <div class="card-body">
                            <h3><?= esc($project['title']) ?></h3>
                            <a href="<?= esc($project['link'], 'attr') ?>" target="_blank">Lihat Project →</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div>
            <p class="section-label">Credentials</p>
            <div class="cred-row">
                <?php foreach ($profile['credentials'] as $credential): ?>
                    <div class="cred">
                        <img src="/<?= esc($credential['image']) ?>" alt="<?= esc($credential['title']) ?>">
                        <div class="cred-info">
                            <span><?= esc($credential['title']) ?></span>
                            <a href="<?= esc($credential['link'], 'attr') ?>" target="_blank">Lihat →</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div>
            <p class="section-label">Social Media</p>
            <div class="social-row">
                <?php foreach ($profile['social_media'] as $social): ?>
                    <a href="<?= esc($social['link'], 'attr') ?>" target="_blank" class="social-btn">
                        <img src="/<?= esc($social['image']) ?>" alt="<?= esc($social['title']) ?>">
                        <?= esc($social['title']) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</main>

<?= view('templates/footer') ?>