<?php
require "koneksi.php";

$stmt = $pdo->prepare("INSERT INTO penanaman (title,content) VALUES (:title,:content)");
$stmt->bindParam(':title', $title);
$stmt->bindParam(':content', $content);

// insert one row
$title = $_POST['title'];
$content = $_POST['content'];
if($stmt->execute())
    header("Location:index.php");