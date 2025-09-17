<?php include 'data.php'; ?>
<?php
$id = $_GET['id'] ?? 0;
$found = null;
foreach ($articles as $article) {
    if ($article['id'] == $id) {
        $found = $article;
        break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $found ? htmlspecialchars($found['title']) : 'Article Not Found' ?></title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <a href="homepage.php" class="back">&larr; Back to News</a>
        <?php if ($found): ?>
            <h1><?= htmlspecialchars($found['title']) ?></h1>
            <p class="date"><?= $found['date'] ?></p>
            <p><?= nl2br(htmlspecialchars($found['content'])) ?></p>
        <?php else: ?>
            <p>Article not found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
