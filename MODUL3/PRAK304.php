<!DOCTYPE html>

<html>

<body>

<?php
    $star = 0;
    $submitted = false;
    $image = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";

    if (isset($_POST['submit'])) {
        $star = (int) $_POST['star'];
        $submitted = true;
    } elseif (isset($_POST['action'])) {
        $star = (int) $_POST['star'];
        if ($_POST['action'] === 'add') {
            $star++;
        } elseif ($_POST['action'] === 'subtract' && $star > 0) {
            $star--;
        }
        $submitted = true;
    }
?>
<?php if ($submitted): ?>
    <p>Jumlah bintang: <?= $star ?></p>
    <?php for ($i = 0; $i < $star; $i++): ?>
        <img src="<?= $image ?>" width="75" alt="Star">
    <?php endfor; ?>
    <form method="post">
        <input type="hidden" name="star" value="<?= $star ?>">
        <button type="submit" name="action" value="add">Tambah</button>
        <button type="submit" name="action" value="subtract">Kurang</button>
    </form>

<?php else: ?>
    <form method="post">
        <label>Jumlah bintang</label>
        <input type="number" name="star">
        <button type="submit" name="submit" value="1">Submit</button>
    </form>
<?php endif; ?>
</body>

</html>
