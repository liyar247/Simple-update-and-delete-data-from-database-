<?php
include 'db.php';

$id   = $_POST['id'];
$name = $_POST['name'];
$cgpa = $_POST['cgpa'];

$sql = "UPDATE students 
        SET name = :name, cgpa = :cgpa 
        WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->execute([
    'name' => $name,
    'cgpa' => $cgpa,
    'id'   => $id
]);

header("Location: index.php");
exit;
