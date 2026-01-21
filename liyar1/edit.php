<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute(['id' => $id]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h2>Edit Student</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $student['id']; ?>">

    Name:<br>
    <input type="text" name="name" value="<?= $student['name']; ?>" required><br><br>

    CGPA:<br>
    <input type="text" name="cgpa" value="<?= $student['cgpa']; ?>" required><br><br>

    <button type="submit">Update</button>
</form>
