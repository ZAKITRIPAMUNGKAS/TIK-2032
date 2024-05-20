<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

require 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];

    $stmt = $conn->prepare("INSERT INTO artiKEL (title, content, category) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $content, $category);

    if ($stmt->execute()) {
        $message = "Artikel berhasil diupload!";
    } else {
        $message = "Gagal mengupload artikel: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Artikel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Upload Artikel</h2>
        <form method="POST" action="upload_article.php">
            <div class="input-group">
                <label for="title">Judul Artikel:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="input-group">
                <label for="content">Konten Artikel:</label>
                <textarea id="content" name="content" rows="10" required></textarea>
            </div>
            <div class="input-group">
                <label for="category">Kategori:</label>
                <input type="text" id="category" name="category" required>
            </div>
            <div class="input-group">
                <button type="submit">Upload</button>
            </div>
            <?php if (isset($message)): ?>
                <p class="success"><?= $message ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
