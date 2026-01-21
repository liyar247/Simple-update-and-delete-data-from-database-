<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute(['id' => $id]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h2>Student Details</h2>
<p><b>ID:</b> <?= $student['id']; ?></p>
<p><b>Name:</b> <?= $student['name']; ?></p>
<p><b>CGPA:</b> <?= $student['cgpa']; ?></p>

<a href="index.php">⬅ Back</a>
