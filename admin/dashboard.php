<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

require 'db_config.php';

$sql = "SELECT id, title, content, category, created_at FROM artikel ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Dashboard Admin</h2>
        <p>Selamat datang, <?= htmlspecialchars($_SESSION['username']) ?>!</p>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="upload_article.php">Upload Artikel</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <div class="content">
            <h3>Artikel Terbaru</h3>
            <?php if ($result->num_rows > 0): ?>
                <ul>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <li>
                            <h4><?= htmlspecialchars($row['title']) ?></h4>
                            <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
                            <p><small>Kategori: <?= htmlspecialchars($row['category']) ?> | Tanggal: <?= $row['created_at'] ?></small></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <p>Tidak ada artikel yang ditemukan.</p>
            <?php endif; ?>
            <?php $conn->close(); ?>
        </div>
    </div>
</body>
</html>
