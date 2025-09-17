<?php include 'data.php'; ?>
<?php
session_start();

// If not logged in, redirect to login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tech News</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<p>Your role: <?php echo $_SESSION['role']; ?></p>

<a href="logout.php">Logout</a>

    <div class="container">
        <h1>Tech News</h1>
        <?php foreach ($articles as $article): ?>
            <div class="article">
                <h2><a href="article.php?id=<?= $article['id'] ?>"><?= htmlspecialchars($article['title']) ?></a></h2>
                <p class="date"><?= $article['date'] ?></p>
                <p><?= substr($article['content'], 0, 100) ?>...</p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
