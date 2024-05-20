<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
} else {
    header('Location: login.php');
}
?>

<?php
require 'db_config.php';

$sql = "SELECT id, title, content, category, created_at FROM articles ORDER BY created_at DESC";
$result = $conn->query($sql);

if (!$result) {
    die("Error: " . $conn->error);
}
?>