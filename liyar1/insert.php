<?php
include 'db.php';

$name = $_POST['name'];
$cgpa = $_POST['cgpa'];

$sql = "INSERT INTO students (name, cgpa) 
        VALUES (:name, :cgpa)";

$stmt = $conn->prepare($sql);
$stmt->execute([
    'name' => $name,
    'cgpa' => $cgpa
]);

header("Location: index.php");
exit;
